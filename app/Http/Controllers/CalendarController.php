<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Http\Requests\CreateEvaluation;
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
        \Debugbar::addMessage($calendars);

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
}


