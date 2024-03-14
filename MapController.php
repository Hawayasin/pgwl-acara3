<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $data =[
            "title" => "Peta PGWL",
        ];
        return view('index', $data);
    }
    public function table()
    {
        $data = [
            "title" => "Table",
        ];
        return view('table', $data);
    }
}
