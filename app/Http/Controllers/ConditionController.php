<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index()
    {
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $workOrderId = $latestWorkOrder->id;
        // Retrieve ships associated with the specific work order
        $conditions = Condition::where('work_order_id', $workOrderId)->get();
        return view('conditions.index', compact('conditions'));
    }

    public function show($id)
    {
        $condition = Condition::findOrFail($id);
        return view('conditions.show', compact('condition'));
    }

    public function create()
    {
        return view('conditions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'attending_surveyor' => 'required',
            'master_name' => 'required',
            'chief_name' => 'required',
            'witness_dought' => 'required',
            'witness_tank' => 'required',
            'ship_location' => 'required',
            'weather_temp' => 'required|integer',
            'sea_conditions' => 'required',
            'heading_ship' => 'required|numeric',
            'direction_wind' => 'required',
            'stream_speed' => 'required|integer',
            'tide' => 'required',
            'ice' => 'required',
        ]);

        $conditionData = $request->all();

        // Retrieve the latest work order from the session
        $latestWorkOrder = unserialize(session('latestWorkOrder'));

        // Add the work_order_id to the condition data
        $conditionData['work_order_id'] = $latestWorkOrder->id;
        Condition::create($conditionData);
        return redirect()->route('conditions.index')
            ->with('success', 'The condition has been created sucessfully!');
    }

    public function edit($id)
    {
        $condition = Condition::findOrFail($id);
        return view('conditions.edit', compact('condition'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'attending_surveyor' => 'required',
            'master_name' => 'required',
            'chief_name' => 'required',
            'witness_dought' => 'required',
            'witness_tank' => 'required',
            'ship_location' => 'required',
            'weather_temp' => 'required|integer',
            'sea_conditions' => 'required',
            'heading_ship' => 'required|numeric',
            'direction_wind' => 'required',
            'stream_speed' => 'required|integer',
            'tide' => 'required',
            'ice' => 'required',
        ]);

        $condition = Condition::findOrFail($id);
        $condition->update($request->all());

        return redirect()->route('conditions.index')
            ->with('success', 'The condition has been updated sucessfully!');
    }

    public function destroy($id)
    {
        $condition = Condition::findOrFail($id);
        $condition->delete();

        return redirect()->route('conditions.index')
            ->with('success', 'The condition has been deleted sucessfully!');
    }
}
