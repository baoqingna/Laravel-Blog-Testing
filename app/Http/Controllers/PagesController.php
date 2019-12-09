<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller{

  public function Home(){

    $blogs = Blog::latest()->get();

    // return view('Blog', compact('$blogs'));
    return view('Home', compact('blogs'));
  }

  public function storeFunc(Request $request){

    $error_msgs = [
      'blogTitle.required' => 'Blah blah is required.', 
      'blogTitle.numeric' => 'Blah blah is mmust be a number.', 
    ];

    $this->validate($request, [
        'blogTitle' => 'required|numeric'
    ],$error_msgs);

    $blog = new Blog;
    $blog->blogTitle = $request->blogTitle;
    $blog->blogDesc = $request->blogDesc;
    $blog->save();

    return redirect()->back()->with('msg', 'New Blog posted.');
  }

  public function editBlog($id){

      $blog = Blog::find($id);
      return view('editBlog', compact('blog'));
  }

  public function updateFunc(Request $request, $id){

      $blog = Blog::find($id);
      $blog->blogTitle = $request->blogTitle;
      $blog->blogDesc = $request->blogDesc;
      $blog->update();

      return redirect()->to('/');
  }

  public function destroy($id){

      $blog = Blog::find($id);
      $blog->delete();

      return redirect()->to('/')->with('msg', 'Blog successfully deleted!');
  }
} //End of <class PagesController extends Controller>
