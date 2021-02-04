<?php

namespace App\Http\Controllers;

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
}
