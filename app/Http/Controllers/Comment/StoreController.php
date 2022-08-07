<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Http\Resources\Comment\CommentResource;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
     public function __invoke(StoreRequest $storeRequest) {

        return new CommentResource($this->commentService->store($storeRequest->validated()));
     }
}
