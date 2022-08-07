<?php

namespace App\Services\Comment;

use App\Models\Bank;
use App\Models\Comment;

class Service
{
    public function getAllByBankId($bank) {
        return Bank::find($bank)->comments;
    }

    public function store($data) {
        return Comment::firstOrCreate($data);
    }
}
