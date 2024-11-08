<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create($request->only(['title', 'content']));
        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->only(['title', 'content']));
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(null, 204);
    }

    public function get_code(Request $request)
{
    try {
        // Validate the 'code_revisi' field
        $request->validate(['code_revisi' => 'required|string']);

        // Get 'code_revisi' input from the request
        $code_revisi = $request->input('code_revisi');

        // Query the database for the 'tr_ba_revisi_code'
        $hasil = DB::connection('mysql2')->select(
            "select * from Tr_BA_Revisi where tr_ba_main_code = ?",
            [$code_revisi]
        );

        // Return the result as a JSON response
        return response()->json([
            'message' => 'Berhasil',
            'data' => $hasil
        ]);
    } catch (\Exception $e) {
        // Rollback the database transaction in case of an error
        DB::rollback();
        
        // Return an error response if an exception occurs
        return response()->json([
            'error' => 'Data tidak ditemukan'
        ], 404); // Optional: Adding HTTP status code 404 (Not Found)
    }
}
}
