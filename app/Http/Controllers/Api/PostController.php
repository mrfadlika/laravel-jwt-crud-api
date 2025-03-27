<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //index dlu
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return new PostResource(true, 'List Data Posts', $posts);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titleTask' => 'required',
            'dateTask' => 'required',
            'priorityTask' => 'required',
            'directionDesc' => 'required',
            'mataKuliahTask' => 'required',
            'descriptionTask' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->messages());
        }

        $post = Post::create($request->all());
        return new PostResource(true, 'Data Post Berhasil Ditambahkan', $post);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return new PostResource(true, 'Detail Data Post', $post);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titleTask' => 'required',
            'dateTask' => 'required',
            'priorityTask' => 'required',
            'directionDesc' => 'required',
            'mataKuliahTask' => 'required',
            'descriptionTask' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->messages());
        }

        $post = Post::find($id);
        $post->update($request->all());
        return new PostResource(true, 'Data Post Berhasil Diupdate', $post);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return new PostResource(true, 'Data Post Berhasil Dihapus', null);
    }
}
