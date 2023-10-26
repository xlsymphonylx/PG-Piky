<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function index()
    {
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $workOrderId = $latestWorkOrder->id;
        // Retrieve ships associated with the specific work order
        $ships = Ship::where('work_order_id', $workOrderId)->get();
        return view('ships.index', compact('ships'));
    }

    public function show($id)
    {
        $ship = Ship::findOrFail($id);
        return view('ships.show', compact('ship'));
    }

    public function create()
    {
        return view('ships.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vessel' => 'required|string|max:255',
            'loaded' => 'required|boolean',
            'file' => 'required|string|max:255',
            'vessel_previous_name' => 'required|string|max:255',
            'call_letters' => 'required|string|max:255',
            'built_year' => 'required|date',
            'built_by' => 'required|string|max:255',
            'hydrostatic_by' => 'required|string|max:255',
            'shipyard_no' => 'required|string|max:255',
            'hull_no' => 'required|string|max:255',
            'dated_hull' => 'required|date',
            'registry_port' => 'required|string|max:255',
            'flag' => 'required|string|max:255',
        ]);

        $shipData = $request->all();

        // Retrieve the latest work order from the session
        $latestWorkOrder = unserialize(session('latestWorkOrder'));

        // Add the work_order_id to the ship data
        $shipData['work_order_id'] = $latestWorkOrder->id;

        Ship::create($shipData);

        return redirect()->route('ships.index')
            ->with('success', 'The ship has been created sucessfully!');
    }

    public function edit($id)
    {
        $ship = Ship::findOrFail($id);
        return view('ships.edit', compact('ship'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'vessel' => 'required|string|max:255',
            'loaded' => 'required|boolean',
            'file' => 'required|string|max:255',
            'vessel_previous_name' => 'required|string|max:255',
            'call_letters' => 'required|string|max:255',
            'built_year' => 'required|date',
            'built_by' => 'required|string|max:255',
            'hydrostatic_by' => 'required|string|max:255',
            'shipyard_no' => 'required|string|max:255',
            'hull_no' => 'required|string|max:255',
            'dated_hull' => 'required|date',
            'registry_port' => 'required|string|max:255',
            'flag' => 'required|string|max:255',
        ]);

        $ship = Ship::findOrFail($id);
        $ship->update($request->all());

        return redirect()->route('ships.index')
            ->with('success', 'The ship has been updated sucessfully!');
    }

    public function destroy($id)
    {
        $ship = Ship::findOrFail($id);
        $ship->delete();

        return redirect()->route('ships.index')
            ->with('success', 'The ship has been deleted successfully!');
    }
}
