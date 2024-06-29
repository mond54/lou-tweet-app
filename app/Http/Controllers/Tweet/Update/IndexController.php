<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Services\TweetService; 
use Illuminate\Http\Request;
use App\Models\Tweet;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweets = $tweetService->getTweets(); //つぶやき一覧を取得
        return view('tweet.update')->with('tweet', $tweet);
    }
}
