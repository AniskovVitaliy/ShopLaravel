<?php

namespace App\Http\Controllers\Public\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('public.main.index');
    }
}
