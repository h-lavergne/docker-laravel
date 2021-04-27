<?php

namespace App\Http\Controllers;

use App\Models\SpaceWeed;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'spaceWeeds' => SpaceWeed::OrderBy('id', 'DESC')->get()
        ]);
    }


    public function delete($id)
    {
        $weed = SpaceWeed::find($id);
        $weed->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        return view('weed.edit', [
            'spaceWeed' => SpaceWeed::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        SpaceWeed::find($id)->update($request->except('_token'));
        return redirect()->back();
    }

    public function create()
    {
        return view('weed/create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => ''
        ]);
        SpaceWeed::create($data);
        return redirect()->route('home');
    }
}
