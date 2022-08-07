<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Services\Bank\Service;

abstract class BaseController extends Controller
{
    protected Service $service;

    /**
     * @param Service $service
     */
    public function __construct(Service $service, \App\Services\Comment\Service $commentService)
    {
        $this->service = $service;
    }
}
