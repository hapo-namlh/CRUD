<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('list_member', ['members' => $members]);
    }
    
    public function create()
    {
        return view('add_member');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Member::create($data);
        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $members = Member::findOrFail($id);
        return view('edit_member', compact('members'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Member::findOrFail($id)->update($data);
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $members = Member::findOrFail($id);
        $members->delete();
        return redirect()->route('admin.index');
    }
}
