<?php

namespace App\Http\Controllers\Comment;


class IndexController extends BaseController
{
    public function __invoke($bank) {
        $chosen_bank = $this->service->getById($bank);
        $comments = $this->commentService->getAllByBankId($bank);

        return view('bank', [
            'chosen_bank' => $chosen_bank,
            'comments' => $comments
        ]);
    }
}
