<?php

namespace App\Http\Controllers;

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

    public function create()
    {
        return view('work_orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'branch' => 'required',
            'terminal' => 'required',
            'product' => 'required',
            'vessel' => 'required',
            'file_status' => 'required',
            'eta' => 'required|date',
        ]);

        WorkOrder::create($request->all());

        return redirect()->route('work_orders.index')
            ->with('success', '¡La orden de trabajo se ha creado exitosamente!');
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
            'terminal' => 'required',
            'product' => 'required',
            'vessel' => 'required',
            'file_status' => 'required',
            'eta' => 'required|date',
        ]);

        $workOrder = WorkOrder::findOrFail($id);
        $workOrder->update($request->all());

        return redirect()->route('work_orders.index')
            ->with('success', '¡La orden de trabajo se ha actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $workOrder = WorkOrder::findOrFail($id);
        $workOrder->delete();

        return redirect()->route('work_orders.index')
            ->with('success', '¡La orden de trabajo se ha eliminado exitosamente!');
    }
}
