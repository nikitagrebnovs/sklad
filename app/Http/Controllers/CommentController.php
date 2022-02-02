<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comments;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CommentController extends BaseController
{
    public function index()
    {
        $comments = Comments::get();

        return view('pages.comments', ['comments' => $comments]);
    }

    public function store(CommentRequest $request)
    {
        Comments::create([
            'user_id' => auth()->user()->getAuthIdentifier(),
            'content' => $request->validated()['inp-comment']
        ]);

        return redirect()->route('comment.index');
    }
}
