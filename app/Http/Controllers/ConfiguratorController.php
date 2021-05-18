<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            return $request->session()->get('chosen_components');
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
                'requirements' => [],
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
            'requirements' => $requirements,
        ]);
    }

    public function passComponent(\App\Models\Type $type)
    {
        // Logic that adds requirements to the components and then passes type, component and requirements to show inside 
        // configurator view
        return view('component_set.configurator', compact(''));
    }
}