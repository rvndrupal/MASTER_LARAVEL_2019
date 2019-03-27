<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index () {
		$posts = Post::paginate(5);
		//$posts = Post::withTrashed()->paginate(5); los que estan eliminados de forma lógica
		return view('posts.index', compact( 'posts'));
    }

    public function show (Post $post) {
	    return view('posts.detail', compact( 'post'));
    }

    public function create () {
    	$titleBtn = "Añadir post";
    	$route = route('posts.store');
    	$method = "POST";
    	$post = new Post;
    	return view('posts.create', compact('titleBtn', 'route', 'method', 'post'));
    }

    public function store () {
    	$this->validate(request(), [
    		'title' => 'required|unique:posts,title|min:10|max:150',
		    'body' => 'required'
	    ]);
    	Post::create(request()->input()); //inserta en el campo
    	return back()->with('message', ['success', 'Post creado correctamente']);
    }

    public function edit ($id) {
	    $titleBtn = "Editar post";
	    $route = route('posts.update', ['id' => $id]);
	    $method = "PUT";
	    $post = Post::findOrFail($id);
	    return view('posts.edit', compact('titleBtn', 'route', 'method', 'post'));
    }

    public function update ($id) {
	    $this->validate(request(), [
		    'title' => 'required|unique:posts,title,'.$id.'|min:10|max:150', //para poder validar el mismo campo $id
				'body' => 'required'
				//mut importante lo del id
	    ]);

	    $post = Post::findOrFail($id);
	    $post->fill(request()->input())->save();
	    return back()->with('message', ['success', 'Post actualizado correctamente']);
    }

    public function destroy ($id) {
    	$post = Post::findOrFail($id);
    	$post->delete(); //lo borra de manera lógica
	    return back()->with('message', ['success', 'Post eliminado correctamente']);
    }

    public function restore ($id) {
		Post::where('id', $id)->restore();
	    return back()->with('message', ['success', 'Post restaurado correctamente']);
    }
}
