<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index()
    {
        $data = DB::table('news')
            ->join('categories', 'categories.id', '=', 'news.category_id')
            ->select('news.id', 'news.title', 'news.views', 'news.create_at', 'news.description', 'categories.name as category_name')
            ->get();

        return view('admins.news.table', compact('data'));
    }
}
