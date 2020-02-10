<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class MemberController extends Controller
{
    public function index(){
        $member = Member::all();
        return view('list_member',compact('member'));
    }
    
    public function create(){
        return view('add_member');
    }

    public function store(Request $request){
        $data = $request->all();
        Member::create($data);
        return redirect('list');
    }

    public function edit($id){
        $member = Member::findOrFail($id);
        return view('edit_member',compact('member'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
        Member::findOrFail($id)->update($data);
        return redirect('list');
    }

    public function destroy($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('list');
    }
}
