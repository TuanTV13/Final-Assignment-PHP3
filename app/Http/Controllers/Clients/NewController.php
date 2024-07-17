<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            ->select('news.id', 'news.title', 'news.views', 'news.image', 'news.create_at', 'news.description', 'categories.name as category_name')
            ->get();


        return view('clients.index', compact('categories', 'news', 'data'));
    }

    public function details($id)
    {
        $data = DB::table('categories')
        ->get();

        $new = News::find($id);

        return view('clients.details', compact('new', 'data'));
    }

    public function NewsByCategory($categoryID)
    {

        $data = DB::table('categories')
        ->get();

        $news = News::where('Category_id', $categoryID)->get();
        // $category = News::where('Category_id', $categoryID)->get();

        // dd($news);

        return view('clients.news-by-category', compact('news', 'data'));

    }
}
