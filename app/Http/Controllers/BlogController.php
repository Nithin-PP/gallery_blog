<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function create($id)
    {

        return view('Admin.blog', ['view' => $id]);
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->galleries_id = $request->id;
        $file = $request->file('file');
        $extention = $file->getClientOriginalName();
        $filename =  time() . '.' . $extention;
        $file->move('uploads/', $filename);
        $blog->image = $filename;
        $blog->save();

        return redirect('list');
    }


    public function show($id)
    {
        $data = Blog::where('galleries_id', $id)->get();
        return view('Admin.images', compact('data', 'id'));
    }

    public function edit2($id)
    {

        $data = Blog::find($id);
        return view('Admin.edit_image', ['update' => $data]);
    }


    public function update(Request $request)
    {

        $update = Blog::find($request->id);
        $id = $request->id;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extention = $file->getClientOriginalName();
            $filename =  time() . '.' . $extention;
            $file->move('uploads/', $filename);
            $update->image = $filename;
        }
        $update->update();
        return redirect('edit2/' . $id);
    }
    public function destroy($id)
    {
        $data = Blog::find($id);
        $data->delete();
    }
}
