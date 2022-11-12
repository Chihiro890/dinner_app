<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Dinner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @param  \App\Models\Dinner  $dinner
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index(Dinner $dinner)
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinner  $dinner
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Dinner $dinner)
    {
        $comment = new Comment($request->all());
        // $comment->user_id = $request->user()->id;
        $comment->user_id = 1;

        // トランザクション開始
        DB::beginTransaction();
        try {
            // 登録
            $dinner->comments()->save($comment);

            // トランザクション終了(成功)
            DB::commit();
        } catch (\Exception $e) {
            // トランザクション終了(失敗)
            DB::rollback();
            // return back()->withInput()->withErrors($e->getMessage());
            logger($e->getMessage());
            return response('', 500);
        }

        // return redirect()->route('dinners.show', $dinner)
        //     ->with('notice', 'コメントを登録しました');

        // return view('comments.create', compact('dinner'));
        return response($comment, 201);
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
        return response()->json($comment);
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
        // if ($request->user()->cannot('update', $comment)) {
        //     return redirect()->route('dinners.show', $dinner)
        //         ->withErrors('自分のコメント以外は更新できません');
        // }

        $comment->fill($request->all());

        // トランザクション開始
        DB::beginTransaction();
        try {
            // 更新
            $comment->save();

            // トランザクション終了(成功)
            DB::commit();
        } catch (\Exception $e) {
            // トランザクション終了(失敗)
            DB::rollback();
            // return back()->withInput()->withErrors($e->getMessage());
            logger($e);
            return response('', 500);
        }

        return redirect()->route('dinners.show', $dinner)
            ->with('notice', 'コメントを更新しました');
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
        DB::beginTransaction();
        try {
            $comment->delete();

            // トランザクション終了(成功)
            DB::commit();
        } catch (\Exception $e) {
            // トランザクション終了(失敗)
            DB::rollback();
            // return back()->withInput()->withErrors($e->getMessage());
            logger($e);
            return response('', 500);
        }


        // return redirect()->route('dinners.show', $dinner)
        //     ->with('notice', 'コメントを削除しました');
        return response('', 204);
    }
}
