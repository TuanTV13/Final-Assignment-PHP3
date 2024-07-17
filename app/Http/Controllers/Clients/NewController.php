<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index()
    {
        $data = DB::table('categories')
            ->get();

        $categories = DB::table('categories')
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $news = DB::table('news')
            ->join('categories', 'categories.id', '=', 'news.category_id')
            ->orderByDesc('views')
            ->limit(3)
            ->select('news.id', 'news.title', 'news.views', 'news.create_at', 'news.description', 'categories.name as category_name')
            ->get();


        return view('clients.index', compact('categories', 'news', 'data'));
    }
}
