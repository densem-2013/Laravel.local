<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Post $postModel)
	{
		//$posts = Post::all();
		//dd($posts);
		//$posts = Post::latest('published_at')->where('published_at','<=',Carbon::now())->get();
		$posts=$postModel->getPublishedPosts();
		return view('post.index',['posts'=>$posts]);
	}
	public function unpublished(Post $postModel)
	{
		$posts=$postModel->getUnPublishedPosts();
		return view('post.index',['posts'=>$posts]);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Post $postModel,Request $request)
	{
		//dd($request->all());
		//$request=$request->except('_token');
		$postModel->create($request->all() );
		return redirect()->route('posts');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
