<?php

namespace App\Http\Controllers;

use App\Models\TimeLog;
use Illuminate\Http\Request;

class TimeLogController extends Controller
{
    public function index()
    {
        $timeLogs = TimeLog::all();
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

        TimeLog::create($request->all());

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
            ->with('success', 'The ship has been updated sucessfully!');
    }

    public function destroy($id)
    {
        $timeLog = TimeLog::findOrFail($id);
        $timeLog->delete();

        return redirect()->route('time_log.index')
            ->with('success', 'The ship has been deleted sucessfully!');
    }
}
