<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dinner;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DinnerRequest;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;


class DinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    public function index(Request $request)
    {
        // $dinners = Dinner::with('user')->latest()->Paginate(4);
        // return view('dinners.index', compact('dinners'));
    
// 検索ここから
        $country = $request->country;
        $calendar = $request->calendar;
        $params = $request->query();
        $dinners = Dinner::with('user')->search($params)->latest()->paginate(4);
        $dinners->appends(compact('country', 'calendar'));

        // dd($dinners);
        return view('dinners.index', compact('dinners'));
    // 検索ここまで
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dinners.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dinner = new Dinner($request->all());
        // dd($dinner);
        $dinner->user_id = $request->user()->id;
        // $dinner->category_id = implode(",", $request->category_id);
        // $file = $request->file('image');
        // $dinner->image = self::createFileName($file);

        // DB::beginTransaction();
        // try {
        $dinner->save();
        //     if (!storage::pustFileAs('public/images/posts', $file, $dinner->image)) {
        //         throw new \Exception('画像ファイルの保存に失敗しました。');
        //     }
        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return back()->withInput()->withErrors($e->getMessage());


        return redirect()
            ->route('dinners.show', $dinner)
            ->with('notice', '記事を投稿しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $dinner = Dinner::find($id);
        $dinner = Dinner::with(['user'])->find($id);
        $comments = $dinner->comments()->latest()->get()->load(['user']);
        //  if (Auth::user()) {
        //      $favorite = Favorite::where('dinner_id', $dinner->id)->where('user_id', auth()->user()->id)->first();
        //      return view('dinners.show', compact('dinner', 'favorite'));
        //  } else {
        return view('dinners.show', compact('dinner', 'comments'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        
        $dinner = Dinner::find($id);
        return view('dinners.edit', compact('dinner', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DinnerRequest $request, $id)
    {
        $dinner = Dinner::find($id);
        if ($request->user()->cannot('update', $dinner)) {
            return redirect()->route('dinners.show', $dinner)
                ->withErrors('自分の記事以外は更新できません');

            //  $file = $request->file('image');
            //  if ($file) {
            //      $delete_file_path = $dinner->image_path;
            //      $dinner->image = self::createFileName($file);
        }
        $dinner->fill($request->all());

        //  DB::beginTransaction();
        //  try {
        $dinner->save();
        //      if ($file) {
        //          if (!Storage::putFileAs('images/dinners', $file, $dinner->image)) {
        //              throw new \Exception('画像ファイルの保存に失敗しました。');
        //          }
        //          if (!Storage::delete($delete_file_path)) {
        //              throw new \Exception('画像ファイルの削除に失敗しました。');
        //          }
        //      }
        //  DB::commit();
        //  } catch (\Exception $e) {
        //      DB::rollback();
        //      return back()->withInput()->withErrors($e->getMessage());
        //  }

        return redirect()
            ->route('dinners.show', $dinner)
            ->with('notice', '記事を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinner = Dinner::find($id);

        // DB::beginTransaction();
        // try {
        $dinner->delete();
        //     if (!Storage::delete($dinner->image_path)) {
        //         throw new \Exception('画像ファイルの削除に失敗しました。');
        //     }
        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return back()->withInput()->withErrors($e->getMessage());
        // }

        return redirect()
            ->route('dinners.index')
            ->with('notice', '記事を削除しました');
    }
    public static function createFileName($file)
    {
        return date('YmdHis') . '_' . $file->getClientOriginalName();
    }

    public function user($id){
        $user = User::find($id);
        // dd($user);
        return view('dinners.user', compact('user'));
    }
}
