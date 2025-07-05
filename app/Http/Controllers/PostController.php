<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('welcome')
                ->with('error', 'Something went wrong!');
        }

        $imagename = time().'.'.request()->image->extension();
        request()->image->move(public_path('images'), $imagename);

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagename,
        ]);

        return redirect()->route('welcome')->with('success', 'Post Created Successfully');
    }


    public function show($postId){
       $posts=Post::findorFail($postId);
       return view('posts.showpost',compact('posts'));
   }

   public function viewspec(){
       $posts = Post::where('user_id',Auth::id())->get();
       return view('posts.viewuserposts',compact('posts'));
   }

   public function edit($postId){
       $posts = Post::findorFail($postId);
       return view('posts.edit',compact('posts'));
   }

   public function update(Request $request,$postId){
       Post::findorFail($postId)->update($request->all());
       return redirect()->route('viewspec')->with('success', 'Post updated successfully.');
   }

   public function destroy($postId){
       Post::findorFail($postId)->delete();
       return redirect()->route('viewspec')->with('success', 'Post Deleted successfully.');
   }
}
