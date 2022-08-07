<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Services\Bank\Service;

abstract class BaseController extends Controller
{
    protected \App\Services\Comment\Service $commentService;
    protected Service $service;

    public function __construct(Service $service, \App\Services\Comment\Service $commentService)
    {
        $this->service = $service;
        $this->commentService = $commentService;
    }
}
