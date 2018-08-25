<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\MySqlConnection;
use Illuminate\Database\Eloquent\Collection;

use App\Post;
use App\Comment;
use DB;

class PostsController extends Controller
{
	public function index()
	{
		// $posts = Post::all(); this the oldest first (as in the database)
		// $posts = Post::latest()->get(); // latest first // After getting paginate which
		// user 
		return view('posts.index', ['posts' => Post::latest()->paginate(4)]);
	}

	public function show(Post $postId)
	{
		// $post = Post::find($which);
		return view('posts.show', compact('postId'));
	}

	public function create()
	{
		return view('posts.create');
	}

	public function store()
	{
		// dd(request()->all());
		// dd(request(['title', 'body']));

		// $post = new Post;
		// $post->title = request('title');
		// $post->body = request('body');
		// $post->save();

		// Create a superclass of Post calle Model that is inturn extends Elequent\Model
		// Remove the Laravels guard on hacking-loophole where a hacker can potentially use post request
		// to change any DB values: See App\Model, App\Post changes
		// For this its also imp. to set the parameters that we want to be set by a form explicitly
		// in this case 'title' and 'body' like so:
		
		$this->validate(request(), [
			'title' => 'required',
			'body' => 'required'
		]);

		Post::create([
			'title' => request('title'),
			'body' => request('body')
		]);
		// which btw. is Laravels equivalent to lines 30 through 33

		return redirect('/');
	}

	public function search()
	{
	    $AAInput3 = $this->validate(request(), [
			's' => 'required',
			'where' => 'required',
			'date_from' => 'nullable|date',
			'date_to' => 'nullable|date'
    ]);
    
    // $postsCol = new Collection;
    // $sokeItup = request('s');
		// dd(request(['s', 'where', 'date_from', 'date_to']));
    // $posts = Post::all();
    
		// $query = 'SELECT `id` FROM `posts` WHERE title like \'%'.request('s').'%\' and created_at BETWEEN \'2018-04-25\' AND \'2018-09-01\'';
		// $query = 'SELECT id   FROM `posts` WHERE title like \'%'.request('s').'%\' and created_at BETWEEN \'2018-04-25\' AND \'2018-09-01\'';
    
    // dd($query);
    // $arrDBReturn = DB::select(DB::raw($query),  array('sokeIt' => $sokeItup));

    // foreach ($arrDBReturn as $arr) {
    //   $postsCol->add(Post::findOrFail($arr->id));
    // }
    // dd($postsCol);
    // $postsCol->paginate(2);
    // return view('posts.index', ['posts' => $postsCol->paginate(4)]);
    // return view('posts.index', ['posts' => $postsCol]);


    // $posts = Post::where('id', $arrDBReturn()->id);
    // $posts = Post::where('id', $arrDBReturn()->id);
		// dd($posts);
		// $posts = Post::where($query)->firstOrFail();
		// $posts = Post::where('title', 'LIKE', 'Next')->get();
	  // ->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
		// $posts = Post::all();
    // dd($posts);

// This method functions, dont erase : 
    // $users = DB::table('posts')
    // ->where([
    //     ['title', 'like', '%'.request('s').'%'],
    //     ['created_at', '>', request('date_from')],
    //     ['created_at', '<', request('date_to')]
    // ])->paginate(2);
    // return view('posts.index', ['posts' => $users]);


	$AAInput = [
		's' => request('s'),
		'where' => request('where'),
		'date_from' => request('date_from'),
		'date_to' => request('date_to'),
	];
	
	$AAInput2 = request()->all();
	dd($this->getWhere($AAInput3));
	dd(request()->all());
	// dd($AAInput);
	dd(request()->getQueryString());
	dd($this->query->all());

	}

    protected function getInput($key, $default = null)
    {
        if (!empty($this->inputs[$key]))
        {
           return $this->inputs[$key];
        }

        return $default;
	}
	
	public function getWhere($param)
	{
		$queryWhere = '';
		foreach ($param as $key => $value) {
			$queryWhere .= ' '.$value.' : '.$key."\n";
		}
		// $queryWhere = '';
		// foreach ($param as $key => $value) {

		// 	$queryWhere .= ($key = 'title') ? a : b ;
		// 	$queryWhere .= ' '.$value.' : '.$key."\n";
		// }
		return $queryWhere;
	}
}
