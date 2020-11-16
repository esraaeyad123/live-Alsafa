<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;

use App\Contact;
use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{



    public function index(Category $categories)
    {
        $categories = Category::all();
    //  return view('offer');

        return view('offer', compact('categories'));


    }
    public function send_message(Request $request){



        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'category_id' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
            'phone' => $request->phone,
            'category_id' => $request->category_id,
        ]);
        $contact->save();
if($contact){
    Session::flash('send_message', 'تم ارسال الرسالة بنجاح');
        return redirect()->back();}
    }

}
