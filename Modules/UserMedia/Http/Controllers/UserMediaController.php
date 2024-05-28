<?php

namespace Modules\UserMedia\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\UserMedia\Models\UserMedia;

class UserMediaController extends Controller
{
    public function index()
    {
        $usermedia = UserMedia::get();

        return view('usermedia::index', compact('usermedia'));
    }

    public function create()
    {
        return view('usermedia::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        UserMedia::create([
            'name' => $request->input('name')
        ]);

        return redirect(route('app.usermedia.index'));
    }

    public function edit($id)
    {
        $usermedia = UserMedia::findOrFail($id);

        return view('usermedia::edit', compact('usermedia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        UserMedia::findOrFail($id)->update([
            'name' => $request->input('name')
        ]);

        return redirect(route('app.usermedia.index'));
    }

    public function destroy($id)
    {
        UserMedia::findOrFail($id)->delete();

        return redirect(route('app.usermedia.index'));
    }
}
