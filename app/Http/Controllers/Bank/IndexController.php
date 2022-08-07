<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Models\Bank;

class IndexController extends Controller
{
    public function __invoke() {
        $banks = Bank::all();
        return view('index', compact('banks'));
    }
}
