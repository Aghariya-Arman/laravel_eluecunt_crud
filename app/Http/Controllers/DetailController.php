<?php

namespace App\Http\Controllers;

use App\Models\detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail = detail::paginate(4);
        return view('home', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age'   => 'required|numeric|max:100',
            'city'  => 'required',
        ]);

        $user = new detail;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->city = $request->city;

        $user->save();

        return redirect()->route('user.index')->with('status', 'Added SuccessFully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $details = detail::find($id);
        //return $details;
        return view('single', compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = detail::find($id);
        return view('updatedata', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age'   => 'required|numeric|max:100',
            'city'  => 'required',
        ]);

        $user = detail::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->city = $request->city;

        $user->save();
        return redirect()->route('user.index')->with('status', 'Update SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = detail::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('status', 'Delete  SuccessFully');
    }
}
