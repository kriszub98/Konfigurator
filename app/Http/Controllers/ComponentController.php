<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;
use App\Models\Type;
use App\Models\Property;
use App\Models\Requirement;
use App\Models\Predefined;
use App\Http\Requests\StoreComponentOfTypeRequest;

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

    /**
     * Shows specific type of components
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

        for($i = 0; $i < count($request->param_names); $i++) {
            $parameter = Property::create([
                'name' => $request->param_names[$i],
                'value' => $request->param_values[$i],
            ]);
            $component->properties()->attach($parameter);

            if($request->param_required[$i] == 1) {
                $predefined = Predefined::create(['name' => $request->param_names[$i]]);
                $type->predefined()->attach($predefined);
            }
        }
        //FOR DODAWANIE Parametru, jezeli istnieje to nie dodawaj, tylko zbierz id
        
        // Attach / sync

        //FOR Dodawanie wymagań, jezeli istnieje to nie dodawaj, tylko zbierz id
        // Attach / sync
        for($i = 0; $i < count($request->requirement_names); $i++) {
            $property = Property::create([
                'name' => $request->requirement_names[$i],
                'value' => $request->requirement_values[$i],
            ]);

            $requirement = Requirement::create([
                'type_id' => $request->requirement_type[$i],
                'property_id' => $property->id,
            ]);

            $component->requirements()->attach($requirement);
        }
    }
}