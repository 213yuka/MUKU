<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Http\Requests\CreateEvaluation;
use App\Http\Requests\EditEvaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{

    // [get]カレンダー評価一覧表示
    public function index()
    {
        // ユーザーのカレンダーを取得する
         $calendars = Auth::user()->calendars()->get();

        return view('calendar/index',[
            'calendars' => $calendars,
        ]);
    }

    // [get]点数入力フォーム
    public function showCreateForm()
    {
        return view('calendar/create');
    }

    // [post]点数入力フォームからカレンダー評価一覧表示へリダイレクト
    public function create(CreateEvaluation $request)
    {
        // カレンダー(評価)モデルのインスタンスを作成する
        $calendar = new Evaluation();
        // 入力値を代入する
        $calendar->date = $request->date;
        $calendar->evaluation = $request->evaluation;

        // インスタンスの状態をデータベースに書き込む
        Auth::user()->calendars()->save($calendar);

        return redirect()->route('calendar.index', [
            'id' => $calendar->id,
        ]);
    }

    // [get]カレンダー編集フォーム
    public function showEditForm(Evaluation $evaluation)
    {

        return view('calendar/edit', [
            'calendar' => $evaluation,
        ]);
    }

//     [post]カレンダー編集フォームからカレンダー一覧表示へリダイレクト
    public function edit(Evaluation $evaluation, EditEvaluation $request)
    {

        $evaluation->evaluation = $request->evaluation;
        $evaluation->save();

        return redirect()->route('calendar.index', [
            'id' => $evaluation->id,
        ]);
    }
}


