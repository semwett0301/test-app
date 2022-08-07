<?php

namespace App\Services\Bank;

use App\Models\Bank;

class Service
{
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return Bank::all();
    }

    public function store($data) {
        return Bank::firstOrCreate($data);
    }

    public function getById($bank) {
        return Bank::findOrFail($bank);
    }
}
