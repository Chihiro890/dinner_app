<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Dinner;
use Illuminate\Http\Request;
use App\Http\Requests\DinnerRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $country = $request->country;
        $calendar = $request->calendar;
        $params = $request->query();
        // $dinners = Dinner::with('user')->search($params)->latest()->paginate(4);
        $dinners = Dinner::latest()->paginate($request->per_page);
        $dinners->appends(compact('country', 'calendar'));
        // return view('dinners.index', compact('dinners'));
        return response()->json($dinners);
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
        $dinner->user_id = $request->user()->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dinner  $dinner
     * @return \Illuminate\Http\Response
     */
    public function show(Dinner $dinner)
    {

        // $dinner = Dinner::with(['user'])->find($id);
        // $comments = $dinner->comments()->latest()->get()->load(['user']);
        $dinner->load('comments');

        return response()->json($dinner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dinner  $dinner
     * @return \Illuminate\Http\Response
     */
    public function update(DinnerRequest $request, $id)
    {
        $dinner = Dinner::find($id);
        if ($request->user()->cannot('update', $dinner)) {
            return redirect()->route('dinners.show', $dinner)
                ->withErrors('自分の記事以外は更新できません');
        }
        $dinner->fill($request->all());
        $dinner->save();
        return redirect()
            ->route('dinners.show', $dinner)
            ->with('notice', '記事を更新しました');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dinner  $dinner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinner = Dinner::find($id);
        $dinner->delete();

        try {
            $dinner->delete();
            // トランザクション終了(成功)
        } catch (\Exception $e) {
            // トランザクション終了(失敗)
            logger($e->getMessage());
            return response(status: 204);            
        }
        return response()->json($dinner, 204);
    }
    public static function createFileName($file)
    {
        return date('YmdHis') . '_' . $file->getClientOriginalName();
    }

    public function user($id)
    {
        $user = User::find($id);
        return view('dinners.user', compact('user'));
    }
}
