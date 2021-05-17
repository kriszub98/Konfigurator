<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;
use App\Models\Type;
use App\Models\Property;
use App\Models\Requirement;
use App\Models\Predefined;
use App\Http\Requests\StoreComponentOfTypeRequest;
use App\Http\Requests\UpdateComponentRequest;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('component.index');
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
     * @param  Component  $component
     * @return \Illuminate\Http\Response
     */
    public function show(Component $component)
    {
        $component = Component::where('id', $component->id)->with(['type', 'properties', 'requirements'])->get();
        dd($component);
        return view('component.show', compact('component'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Component  $component
     * @return \Illuminate\Http\Response
     */
    public function edit(Component  $component)
    {
        $component = Component::where('id', $component->id)->with(['type', 'properties', 'requirements'])->first();
        $types = Type::all();
        return view('component.edit', compact('component', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Component  $component
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComponentRequest $request, Component  $component)
    {
        $component->update($request->validated());

        // Properties attachment
        $component->properties()->detach();
        
        for($i = 0; $i < count($request->param_names); $i++) {
            $parameter = Property::firstOrCreate([
                'name' => $request->param_names[$i],
                'value' => $request->param_values[$i],
            ]);
            $component->properties()->syncWithoutDetaching($parameter);
        }
        
        // Requirements
        $component->requirements()->detach();
        
        for($i = 0; $i < count($request->requirement_names); $i++) {

            $property = Property::firstOrCreate([
                'name' => $request->requirement_names[$i],
                'value' => $request->requirement_values[$i],
            ]);

            $requirement = Requirement::firstOrCreate([
                'type_id' => $request->requirement_type[$i],
                'property_id' => $property->id,
            ]);

            $component->requirements()->syncWithoutDetaching($requirement);
        }
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

    /**
     * Shows specific type of components in a table
     */
    public function showOfType(\App\Models\Type $type)
    {
        return view('component.showOfType', [
            'components' => Component::where('type_id', $type->id)->with('type')->get(),
            'type' => $type,
        ]);
    }

    /**
     * Shows form that creates component of set type
     */
    public function createOfType(\App\Models\Type $type)
    {
        $types = Type::all();
        return view('component.createOfType', [
            'type' => $type,
            'types' => $types,
        ]);
    }


    /**
     * Stores the record in database
     */
    public function storeOfType(StoreComponentOfTypeRequest $request, \App\Models\Type $type)
    {
        $component = Component::create($request->validated() + ['type_id' => $type->id]);
        
        // Adding parameters that belong to component
        for($i = 0; $i < count($request->param_names); $i++) {
            $parameter = Property::firstOrCreate([
                'name' => $request->param_names[$i],
                'value' => $request->param_values[$i],
            ]);
            $component->properties()->syncWithoutDetaching($parameter);

            if($request->param_required[$i] == 1) {
                $predefined = Predefined::firstOrCreate(['name' => $request->param_names[$i]]);
                $type->predefined()->syncWithoutDetaching($predefined);
            }
        }

        // Adding requirements that belong to component
        for($i = 0; $i < count($request->requirement_names); $i++) {
            $property = Property::firstOrCreate([
                'name' => $request->requirement_names[$i],
                'value' => $request->requirement_values[$i],
            ]);

            $requirement = Requirement::firstOrCreate([
                'type_id' => $request->requirement_type[$i],
                'property_id' => $property->id,
            ]);

            $component->requirements()->syncWithoutDetaching($requirement);
        }
        return redirect()->route('components.showOfType', $type->id);
    }
}