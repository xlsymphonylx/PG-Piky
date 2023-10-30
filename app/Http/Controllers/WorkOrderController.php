<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use App\Models\WorkOrder;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    public function index()
    {
        $workOrders = WorkOrder::all();
        return view('work_orders.index', compact('workOrders'));
    }

    public function show($id)
    {
        $workOrder = WorkOrder::findOrFail($id);
        return view('work_orders.show', compact('workOrder'));
    }
    public function searchWorkOrder(Request $request)
    {
        $request->validate([
            'file_number' => 'required|exists:work_orders,file_number',
        ]);

        $fileNumber = $request->get('file_number');

        $workOrder = WorkOrder::where('file_number', $fileNumber)->firstOrFail();

        // Check if there is an associated draft
        $existingDraft = Draft::where('work_order_id', $workOrder->id)->first();

        if (!$existingDraft) {
            // If no associated draft, create a new one
            Draft::create(['work_order_id' => $workOrder->id]);
        }

        session(['latestWorkOrder' => serialize($workOrder)]);

        return back();
    }
    public function stopSearch(Request $request)
    {
        // Remove the 'latestWorkOrder' session variable
        $request->session()->forget('latestWorkOrder');
        return back();
    }
    public function create()
    {
        return view('work_orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'branch' => 'required',
            'file_number' => 'required|integer',
            'terminal' => 'required',
            'product' => 'required',
            'vessel' => 'required',
            'file_status' => 'required',
            'eta' => 'required|date',
        ]);

        WorkOrder::create($request->all());

        return redirect()->route('work_orders.index')
            ->with('success', 'The work order has been created sucessfully!');
    }

    public function edit($id)
    {
        $workOrder = WorkOrder::findOrFail($id);
        return view('work_orders.edit', compact('workOrder'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'branch' => 'required',
            'file_number' => 'required|integer',
            'terminal' => 'required',
            'product' => 'required',
            'vessel' => 'required',
            'file_status' => 'required',
            'eta' => 'required|date',
        ]);

        $workOrder = WorkOrder::findOrFail($id);
        $workOrder->update($request->all());

        return redirect()->route('work_orders.index')
            ->with('success', 'The work order has been updated sucessfully!');
    }

    public function destroy($id)
    {
        $workOrder = WorkOrder::findOrFail($id);
        $workOrder->delete();

        return redirect()->route('work_orders.index')
            ->with('success', 'The work order has been deleted sucessfully!');
    }
}
