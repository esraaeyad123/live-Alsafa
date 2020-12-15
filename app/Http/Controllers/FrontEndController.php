<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use Session;
use Validator;
use App\subcategories;
use App\Contact;
use App\Category;
use DB;



use Illuminate\Http\Request;

class FrontEndController extends Controller
{



    public function index(Category $category) {

       // $subcategories = $category->subcategories();


        $categories = Category::all();
       $subcategories = DB::table('subcategories')->select('*')->where('parent_id', '!=', NULL)->get();
     //   dd(Session(['key'=>'value']));
if(Session(['key'=>'value'])){
    
        return view('vip-rest', compact(['categories', 'subcategories']));
}
        else{
                 return view('inst', compact(['categories', 'subcategories']));

        }



}
   
    public function offer(Category $category) {

       // $subcategories = $category->subcategories();


        $categories = Category::all();
       $subcategories = DB::table('subcategories')->select('*')->where('parent_id', '!=', NULL)->get();
  
        return view('offer', compact(['categories', 'subcategories']));




}
   
 



    public function subCat(Request $request)
    {

        $parent_id = $request->cat_id;


        $subcategories = subcategories::where('parent_id', '=', $parent_id)->get();

        //  dd( $subcategories);
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }
    public function send_message(Request $request){



        $this->validate($request, [

            
            'message' => 'required',
            'category_id' => 'required',
                        'subcategories_id' => 'required',

        ]);

        $contact = Contact::create([

            'subcategories_id' => $request->subcategories_id,
            'message' => $request->message,

            'category_id' => $request->category_id,
        ]);
        $contact->save();
if($contact){
    Session::flash('send_message', 'تم ارسال الرسالة بنجاح شكرا على مشاركتك اقتراحاتك ');
        return redirect()->back();}
    }

}

