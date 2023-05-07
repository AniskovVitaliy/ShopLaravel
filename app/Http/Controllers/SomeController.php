<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function __invoke(): string
    {
        return phpinfo();
    }
}
