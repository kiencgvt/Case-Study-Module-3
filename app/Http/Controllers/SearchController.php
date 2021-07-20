<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function showDetail()
    {
        $details = Shop::all();
        return view('front-end.search.search', compact('details'));
    }
}
