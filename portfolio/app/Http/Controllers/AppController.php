<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
        return view('top');
    }
    public function search()
    {
        $items = DB::table('content')->get();
        return view('search',['items' => $items]);
    }
    public function show($id)
    {
        $items = Content::find($id);
        return view('detail', ['items' => $items]);
    }
}
