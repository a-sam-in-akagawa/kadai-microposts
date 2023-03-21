<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($favId)
    {
        // 認証済みユーザ（閲覧者）が、 postをお気に入りにする
        \Auth::user()->favorite_on($favId);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($favId)
    {
        // 認証済みユーザ（閲覧者）が、 お気に入りを解除する
        \Auth::user()->favorite_off($favId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
