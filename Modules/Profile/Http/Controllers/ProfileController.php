<?php

namespace Modules\Profile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Profile\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::get();

        return view('profile::index', compact('profile'));
    }

    public function create()
    {
        return view('profile::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        Profile::create([
            'name' => $request->input('name')
        ]);

        return redirect(route('app.profile.index'));
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);

        return view('profile::edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        Profile::findOrFail($id)->update([
            'name' => $request->input('name')
        ]);

        return redirect(route('app.profile.index'));
    }

    public function destroy($id)
    {
        Profile::findOrFail($id)->delete();

        return redirect(route('app.profile.index'));
    }
}
