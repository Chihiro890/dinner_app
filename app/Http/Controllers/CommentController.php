<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Dinner;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CommentRequest;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Dinner $dinner)
    {
        //
        return view('comments.create', compact('dinner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest  $request
     * @param  \App\Models\Dinner  $dinner
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request, Dinner $dinner)
    {
        $comment = new Comment($request->all());
        $comment->user_id = $request->user()->id;

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
            return back()->withInput()->withErrors($e->getMessage());
        }

        return redirect()
            ->route('dinners.show', $dinner)
            ->with('notice', 'コメントを登録しました');
        return view('comments.create', compact('dinner'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dinner  $dinner
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinner $dinner, Comment $comment)
    {
        return view('comments.edit', compact('dinner', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CommentRequest  $request
     * @param  \App\Models\Dinner  $dinner
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, Dinner $dinner, Comment $comment)
    {
        if ($request->user()->cannot('update', $comment)) {
            return redirect()->route('dinners.show', $dinner)
                ->withErrors('自分のコメント以外は更新できません');
        }

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
            return back()->withInput()->withErrors($e->getMessage());
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
        //
        // トランザクション開始
        DB::beginTransaction();
        try {
            $comment->delete();

            // トランザクション終了(成功)
            DB::commit();
        } catch (\Exception $e) {
            // トランザクション終了(失敗)
            DB::rollback();
            return back()->withInput()->withErrors($e->getMessage());
        }

        return redirect()->route('dinners.show', $dinner)
            ->with('notice', 'コメントを削除しました');
    }
}
