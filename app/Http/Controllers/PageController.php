<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;
use DB;

class PageController extends Controller
{

    public function index(){

//        $albums = Album::all();
//        $albums = DB::table('albums')->oderBy('created_at')->get();
        $albums = DB::table('albums')->orderBy('created_at','desc')->get();
        return view('show.list',compact('albums'));
    }
    public function create()
    {
        return view('form.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'dis_img'=>'image|max:1999',
            'dis_type'=>'required',
            'dis_name'=>'required',
            'dis_body'=>'required',
        ]);

//         get file extension
        $filenameWithExt = $request->file('dis_img')->getClientOriginalName();
        // file name 1.jpg
        // get file name ex =1
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        // get extension ex = jpg
        $extension = $request->file('dis_img')->getClientOriginalExtension();

        //create new file name ex = 1_123456789.jpg
        $filenameToStore = date("YmdHis").'_'.$filename.'.'.$extension;

        // upload image
        $request->file('dis_img')->move('uploads/album_covers',$filenameToStore);

        $album = new Album;
        $album->dis_type = $request->input('dis_type');
        $album->dis_name = $request->input('dis_name');
        $album->dis_body = $request->input('dis_body');
        $album->dis_img = $filenameToStore;
        $album->save();

        return redirect('/')->with('success','Discussion is ready to serve you');
    }
    public function list()
    {

        return view('show.list');
    }


    public function search(Request $request){
        $search = $request->get('search');

        $albums = Album::where('dis_name','like','%'.$search.'%')
            ->orwhere('dis_body','LIKE','%'.$search.'%')
            ->paginate(5)
            ->setpath('');

        return view('show.list',['albums'=>$albums]);
    }

    public function show($id)
    {
        $album = Album::find($id);
        return view('show.detail',compact('album'));
    }

    public function destroy($id)
    {

        $album = Album::find($id);
        $album -> delete();
        return redirect('/')->with('success','album');
    }

    public function edit($id)
    {
        $album = Album::find($id);
        return view('show.edit',compact('album'));
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
        $this->validate($request,[
            'dis_img'=>'image|max:1999',
            'dis_type'=>'required',
            'dis_name'=>'required',
            'dis_body'=>'required',
        ]);

//         get file extension
        $filenameWithExt = $request->file('dis_img')->getClientOriginalName();
        // file name 1.jpg
        // get file name ex =1
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        // get extension ex = jpg
        $extension = $request->file('dis_img')->getClientOriginalExtension();

        //create new file name ex = 1_123456789.jpg
        $filenameToStore = date("YmdHis").'_'.$filename.'.'.$extension;

        // upload image
        $request->file('dis_img')->move('uploads/album_covers',$filenameToStore);


        $album = Album::find($id);
        $album->dis_type = $request->input('dis_type');
        $album->dis_name = $request->input('dis_name');
        $album->dis_body = $request->input('dis_body');
        $album->dis_img = $filenameToStore;
        $album->save();

        return redirect('/')->with('success','Discussion is ready to serve you');
    }

}
