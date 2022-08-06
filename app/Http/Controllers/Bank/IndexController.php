<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Models\Bank;

class IndexController extends Controller
{
    public function __invoke() {
        $bank = Bank::find(1);
        dd($bank);
        return view('welcome');
    }
}
