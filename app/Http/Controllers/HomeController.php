<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $categories = Category::with('children')->where('parent_id', null)->get();

        view()->share('tagCloud', \App\Models\TagCloud::all());
        view()->share('categories', $categories);
    }

    /**
     * Show the home page.
     *
     * @return void
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the contact page.
     *
     * @return void
     */
    public function contact()
    {
        return view('home.contact');
    }

    /**
     * Store the contact form data.
     *
     * @return void
     */
    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|min:3|max:1000',
        ]);

        Contact::create($request->all());

        return redirect()->route('home.contact')->with('success', 'Your message has been sent successfully.')->withFragment('contact-result');
    }

    /**
     * Show the search page.
     *
     * @return void
     */
    public function search($query = null)
    {
        return view('home.search')->with('query', $query);
    }

    /**
     * Show the post.
     *
     * @param  mixed $slug
     * @return void
     */
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->increment('views');

        return view('home.post')->with('post', $post);
    }

    /**
     * Show the posts by category.
     *
     * @param  mixed $slug
     * @return void
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->paginate(6);

        return view('home.category')->with('posts', $posts)->with('category', $category);
    }


}
