<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function fetchContacts(){
        return Contact::all();
    }

    public function contactStore(Request $request){
        $contact = Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'message'=>$request->message,
        ]);

        return response()->json(['status'=>'success','message'=>'yahoooooooooo']);
    }
}
