<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Component;
use App\Models\Set;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class ConfiguratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sets.index', ['sets' => Set::where('is_public', 1)->get() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $set = \App\Models\Set::create([
            'name' => $request->name,
            'is_public' => $request->is_public,
            'user_id' => Auth::id()
        ]);
        $set->components()->attach($request->chosen_components);
        return redirect()->route('sets.show', $set->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\Set $set)
    {
        return view('sets.show', compact('set'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function configurator()
    {
        session()->forget('chosen_components');
        $type = \App\Models\Type::findOrFail(1)->with('components')->first();
        return view('component_set.configurator', ['type' => $type, 'components' => $type->components, 'requirements' => []]);
    }

    public function addComponent(Request $request, \App\Models\Type $type, \App\Models\Component $component)
    {
        // Add chosen component to chosen_components list
        if (!$request->session()->exists('chosen_components')) {
            $request->session()->put('chosen_components', [['component' => $component->id, 'type' => $type->id], ]);
        }
        else {
            $last_element = $request->session()->get('chosen_components');
            $last_element = end($last_element);
            if($last_element['type'] < $type->id)
                $request->session()->push('chosen_components', ['component' => $component->id, 'type' => $type->id]);
        }

        if($type->id >= 9) 
        {
            $chosen_components = collect($request->session()->get('chosen_components'))->map(function ($item) {
                return Component::findOrFail($item['component']);
            });
            return view('component_set.show', compact('chosen_components'));
        }

        $type = \App\Models\Type::where('id', $type->id + 1)->with('components')->first();

        //Get requirements
        $requirements = [];
        $passed_requirements = [];
        foreach($request->session()->get('chosen_components') as $chosen_component) 
        {
            $component = \App\Models\Component::findOrFail($chosen_component['component']);
            foreach($component->requirements as $requirement) 
            {
                if($requirement->type->id == $type->id) {
                    array_push($requirements, $requirement->property->id);
                    array_push($passed_requirements, ['name' => $requirement->property->name, 'value' => $requirement->property->value]);
                }
            }
        }
        // dd($passed_requirements);


        if(count($requirements) == 0) 
        {
            return view('component_set.configurator', [
                'type' => $type, 
                'components' => \App\Models\Component::where('type_id', $type->id)->get(),
                'requirements' => $passed_requirements,
            ]);
        }
        
        $all_components = \App\Models\Component::where('type_id', $type->id)->get();
        $components = [];
        foreach($all_components as $component) {
            // dd($requirements);
            // dd($component);
            // dd($component->properties);
            // dd($component->properties->find([0 => 2])->count() == 0);
            // dd($component->properties->find([0 => 4]));
            if($component->properties->find($requirements)->count() != 0) {
                // dd($component);
                array_push($components, $component);
            }
            // dd($components);
        }


        return view('component_set.configurator', [
            'type' => $type, 
            'components' => $components, 
            'requirements' => $passed_requirements,
        ]);
    }

    public function passComponent(\App\Models\Type $type)
    {
        // Logic that adds requirements to the components and then passes type, component and requirements to show inside 
        // configurator view
        return view('component_set.configurator', compact(''));
    }

    public function myLists()
    {
        return view('sets.myLists', Set::where('user_id', Auth::id())->get());
    }

    public function comment(Request $request, Set $set)
    {
        Comment::create([
            'set_id' => $set->id,
            'user_id' => Auth::id(),
            'content' => $request->content
        ]);
        return redirect()->back();
    }

    public function rate(Request $request, Set $set)
    {
        if(!$set->ratings->contains('user_id', Auth::id()))
            Rating::create([
                'set_id' => $set->id,
                'user_id' => Auth::id(),
                'rate' => $request->rate
            ]);
        return redirect()->back();
    }

    public function deleteComment(\App\Models\Comment $comment)
    {
        $comment->delete();
        return redirect()->back();
    }

}
