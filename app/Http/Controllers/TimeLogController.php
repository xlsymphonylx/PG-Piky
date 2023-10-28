<?php

namespace App\Http\Controllers;

use App\Models\TimeLog;
use Illuminate\Http\Request;

class TimeLogController extends Controller
{
    public function index()
    {
        $latestWorkOrder = unserialize(session('latestWorkOrder'));
        $workOrderId = $latestWorkOrder->id;
        // Retrieve time logs associated with the specific work order
        $timeLogs = TimeLog::where('work_order_id', $workOrderId)->get();
        return view('time_log.index', compact('timeLogs'));
    }

    public function show($id)
    {
        $timeLog = TimeLog::findOrFail($id);
        return view('time_log.show', compact('timeLog'));
    }

    public function create()
    {
        return view('time_log.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'entry_time' => 'required',
            'description' => 'required',
        ]);

        $timeLogData = $request->all();

        // Retrieve the latest work order from the session
        $latestWorkOrder = unserialize(session('latestWorkOrder'));

        // Add the work_order_id to the time log data
        $timeLogData['work_order_id'] = $latestWorkOrder->id;
        TimeLog::create($timeLogData);

        return redirect()->route('time_log.index')
            ->with('success', 'The time log has been created sucessfully!');
    }

    public function edit($id)
    {
        $timeLog = TimeLog::findOrFail($id);
        return view('time_log.edit', compact('timeLog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'entry_time' => 'required',
            'description' => 'required',
        ]);

        $timeLog = TimeLog::findOrFail($id);
        $timeLog->update($request->all());

        return redirect()->route('time_log.index')
            ->with('success', 'The time log has been updated sucessfully!');
    }

    public function destroy($id)
    {
        $timeLog = TimeLog::findOrFail($id);
        $timeLog->delete();

        return redirect()->route('time_log.index')
            ->with('success', 'The time log has been deleted sucessfully!');
    }
}
