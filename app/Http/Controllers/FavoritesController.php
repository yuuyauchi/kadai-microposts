<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加

class FavoritesController extends Controller
{
    public function store($id)
    {
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
