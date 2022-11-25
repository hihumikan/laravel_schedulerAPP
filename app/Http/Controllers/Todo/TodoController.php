<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class TodoController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $schedules = Schedule::where('user_id', $id)->get();
        return view('dashboard', compact('schedules'));
    }

    public function post()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'context' => 'required',
            'place' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $schedule = new Schedule();
        $schedule->context = $request->context;
        $schedule->place = $request->place;
        $schedule->start = $request->start;
        $schedule->end = $request->end;
        $schedule->user_id = auth()->user()->id;
        $schedule->save();

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $schedule = Schedule::where('id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();
        return view('edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'context' => 'required',
            'place' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $schedule = Schedule::find($id);
        $schedule->context = $request->context;
        $schedule->place = $request->place;
        $schedule->start = $request->start;
        $schedule->end = $request->end;
        $schedule->save();

        return redirect()->route('dashboard');
    }

    public function week()
    {
        $id = auth()->user()->id;
        # 今日から1週間分のデータを取得
        $schedules = Schedule::where('user_id', $id)
            ->where('start', '>=', date('Y-m-d'))
            ->where('start', '<=', date('Y-m-d', strtotime('+6 day')))
            ->get();
        return view('week', compact('schedules'));
    }

    public function month()
    {
        $id = auth()->user()->id;
        # 今日から1ヶ月分のデータを取得
        $schedules = Schedule::where('user_id', $id)
            ->where('start', '>=', date('Y-m-d'))
            ->where('start', '<=', date('Y-m-d', strtotime('+1 month')))
            ->get();
        return view('month', compact('schedules'));
    }
}
