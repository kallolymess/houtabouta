<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Post;
use App\Comment;
use DB;
use PDO;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $AAInput = $this->validate(request(), [
            's' => 'required',
            'where' => 'required',
            'date_from' => 'required|date',
            'date_to' => 'required|date'
		]);

		// dd($AAInput);

        // list($extraWhere, $bindArray) = $this->getExtraWhere($AAInput);
        list($extraWhere, $bindArray) = $this->getExtraWhere([
			's' => 'TO_BASE64(calling_lists.office)',
			'where' => 'campaigns.id',
			'date_from' => 'TO_BASE64(calling_lists.sponsor_id)',
			'date_to' => 'calling_lists.id',
			'groups' => 'agent_groups.id',
			'agent' => 'agents.id',
			'workshift' => 'agents.workshift',
        ]);
		
		// dd([$extraWhere.' ', $bindArray]);
		// dd($extraWhere);

		// $posts = Post::whereRaw($query)
		// 			->orderBy('id')
		// 			->paginate(4);
		
		// Searching with one Query->Where Clause : works properly 
		// $posts = Post::where('body', 'like', '%'.$AAInput['s'].'%')
		// 			->orderBy('id')
		// 			->paginate(4);
		
		// return view('posts.index', compact('posts'));
		// return view('posts.index', ['posts' => $posts]); // this should work too istead of the compact('posts')
		
		// Searching with Query->Where and orWhere Clause : works properly 
		// $posts = Post::where('body', 'LIKE', '%' . $AAInput['s'] . '%')
		// ->orWhere('title', 'LIKE', '%' . $AAInput['s'] . '%')
		// ->orWhere('title', 'LIKE', '%second%')
		// ->paginate(4);
		
		// return view('posts.index', compact('posts'));
		// return view('posts.index', ['posts' => $posts]); // this should work too istead of the compact('posts')
		
		
		// Searching with Query->Where and orWhere Clause with external functions to build query : works properly 
		$posts = Post::where('body', 'LIKE', '%' . $AAInput['s'] . '%')
		// ->orWhere('title', 'LIKE', '%' . $AAInput['s'] . '%')
		// ->orWhere('title', 'LIKE', '%second%')
		->where('created_at', '>', ($AAInput['date_from'] == '') ? '2018-01-30' : $AAInput['date_from'])
		->where('created_at', '<', ($AAInput['date_to'] == '') ? 'CURDATE()' : $AAInput['date_to'])
		// ->orWhere('created_at', '<', $AAInput['date_to'])
		// ->where('created_at', '<', $AAInput['date_to'])
		->paginate(4);
		
		return view('posts.index', compact('posts'));
		// return view('posts.index', ['posts' => $posts]); // this should work too istead of the compact('posts')

    }

    public function getExtraWhere($params, $skipDate = false)
    {
        $bindArray = $skipDate ? [] : [
            ':from' => request('date_from').' 00:00:00',
            ':to' => request('date_to').' 23:59:59',
        ];

        $filters = '';
        foreach ($params as $key => $column) {
            if (request($key) && base64_decode(request($key)) !== '0') {
                $filters .= ' AND '.$column.' = :'.$key."\n";
                $bindArray[':'.$key] = request($key);
            }
        }
        // foreach ($params as $key => $column) {
        //     if ($key && base64_decode($key) !== '0') {
        //         $filters .= ' AND '.$column.' = :'.$key."\n";
        //         $bindArray[':'.$key] = $key;
        //     }
        // }

        return [$filters.' ', $bindArray];
    }
}
