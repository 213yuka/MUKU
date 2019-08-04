<?php

namespace App\Http\Controllers;

// use App\Folder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    /**
     * カレンダー一覧
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // ユーザーのカレンダーを取得する
        // $calendars = Auth::user()->calendars()->get();

        return view('calendar/index');
    }

    /**
     * タスク作成フォーム
     * @param Calendar $calendar
     * @return \Illuminate\View\View
     */
    public function showCreateForm()
    {
        return view('calendar/create');
    }
}


