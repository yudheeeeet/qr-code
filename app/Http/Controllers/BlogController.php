<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog()
    {
        $data = Blog::all();

        return view('test', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // $this->validate([
        //     'name' = required;
        // ])
            // echo $request;
        $data = $request->all();
        blog::create($data);
            // echo $data;
        return redirect('/test');
    }

    public function edit($id)
    {
        $data['Blog'] = Blog::findOrFail($id);
        return view('edit', $data);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = Blog::findOrFail($id);

        // Blog::where('id', $id)
        // ->update($input);
        $data->update($input);

        return redirect('/test');
    }

    public function destroy($id)
    {
        $data = Blog::where('id', $id)->first();
        $data->delete();

        return back();
    }
}
