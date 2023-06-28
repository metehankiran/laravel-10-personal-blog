<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        view()->share('tagCloud', \App\Models\TagCloud::all());
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

}
