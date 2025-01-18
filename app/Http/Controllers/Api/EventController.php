<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PostResource;

class EventController extends Controller
{
    public function filterEvent(Request $request){
        $events = DB::table('posts')->where('category','event')->get();
        return PostResource::collection($events);
    }
}
