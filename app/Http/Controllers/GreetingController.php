<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($time_frame)
    {
        switch ($time_frame) {
            case 'morning':
                $time = '朝のあいさつ';
                $msg = 'おはようございます';
                break;
            case 'afternoon':
                $time = '昼のあいさつ';
                $msg = 'こんにちは';
                break;
            case 'evening':
                $time = '夕方のあいさつ';
                $msg = 'こんばんは';
                break;
            case 'night':
                $time = '夜のあいさつ';
                $msg = 'おやすみ';
                break;
            default:
                $time = '時間帯を指定してください';
                $msg = 'ごきげんよう';
                break;
        }
        return view('greeting.timeframe', ['time' => $time, 'msg' => $msg]);
    }


    public function freeword($freeword)
    {
        return view('freeword', ['freeword' => $freeword]);
    }

    public function randomMsg()
    {
        $num = random_int(1, 4);
        switch ($num){
            case 1:
                $msg = 'おはようございます';
                break;
            case 2:
                $msg = 'こんにちは';
                break;
            case 3:
                $msg = 'こんばんは';
                break;
            default:
                $msg = 'おやすみ';
                break;
        }
        return view('greeting.random', ['msg' => $msg]);
    }
}
