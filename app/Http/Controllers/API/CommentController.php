<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Dinner;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Dinner  $dinner
     * @return \Illuminate\Http\Response
     */
    public function index(Dinner $dinner)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinner  $dinner
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Dinner $dinner)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dinner  $dinner
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Dinner $dinner, Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinner  $dinner
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinner $dinner, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dinner  $dinner
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dinner $dinner, Comment $comment)
    {
        //
    }
}
