<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(1);
        // dd(auth()->user()->links()->find(1));

        return view('dashboard');
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
         // Retrieve the validated input data...
        $validated = $request->validated();
        Link::create(['name' => $validated['name'], 'user_id' => auth()->id(), 'confirmed' => false]);
        return redirect('/dashboard')->with('status', 'profile-updated');
        
        dd($validated);

        auth()->user()>link()->create($validated);
        dd(auth()->user()->link()->find(1));

        auth()->user()->publish(
            new Link($validated)
        );
        dd(auth()->user()->link);
    
        // Retrieve a portion of the validated input data...
        $validated = $request->safe()->only(['name', 'email']);
        $validated = $request->safe()->except(['name', 'email']);
    
        // Store the blog post...
    
        return redirect('/dashboard')->with('status', 'profile-updated');
        return redirect('/dashboard');
        return view('user.profile', compact('user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }
}
