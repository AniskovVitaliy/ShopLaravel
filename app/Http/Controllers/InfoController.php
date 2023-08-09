<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __invoke(): string
    {
        $q = 1;
        return phpinfo();
    }
}
