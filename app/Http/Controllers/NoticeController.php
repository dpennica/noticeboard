<?php

namespace App\Http\Controllers;


use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function index(){
        $notices = Notice::orderBy('id', 'desc')->get();
        // $notices = DB::table('notices')->get();
        return view('notices', compact('notices') );
    }

    public function show($id){
        return Notice::findOrFail($id);
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $notice = new Notice();
        $notice->status = 1;
        $notice->user_id = 1;
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');

        $notice->save();

        return redirect('/notices');
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'telephone' => 'required'
        ]);

        $notice = Notice::find($id);
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        $notice->telephone = $request->input('telephone');

        $notice->save();
    }

    public function destroy(Request $request){
        $this->validate($request, [
            'id' => 'required',
        ]);

        $notice = Notice::find($request->input('id'));
        $notice->delete();
    }
}
