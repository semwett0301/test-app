<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bank\StoreRequest;
use App\Http\Resources\Bank\BankResource;
use App\Models\Bank;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $storeRequest) {
        $data = $storeRequest->validated();

        return new BankResource($this->service->store($data));
    }
}
