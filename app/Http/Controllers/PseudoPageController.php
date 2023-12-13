<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PseudoPageController extends Controller
{
    // 偽ランディングページを表示
    public function index()
    {
        return view('pseudo_page.index');
    }

    // 秘密の呪文入力受付
    public function post(Request $request)
    {
        // 呪文が正しいかチェック
        $magic_word = $request->input('keyword');
        $correct_word = 'secret';
        if ($magic_word === $correct_word) {
            // 正しい場合は、秘密の呪文入力後のランディングページを表示
            return view('trivia.index');
        } else {
            // 正しくない場合は、偽ランディングページを表示
            return view('pseudo_page.index');
        }
    }
}