<?php

namespace App\Http\Controllers;
use Session;
use App\Category;
use App\subcategories;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subcategories = subcategories::orderBy('created_at', 'DESC')->paginate(20);

        return view('admin.subcategories.index', compact('subcategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategories.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:subcategories,name',
            'parent_id' => 'required',

        ]);

        $subcategories=subcategories::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);



        Session::flash('success', 'subcategory created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function show(subcategories $subcategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategories $subcategories ,$id)
    {

        $categories = Category::all();
        $subcategories = $subcategories->whereId($id)->first();


        return view('admin.subcategories.edit',compact(['categories','subcategories']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcategories $subcategories)
    {


        $this->validate($request, [
            'name' => "required|unique:$subcategories,name,$subcategories->name",
        ]);

        if($subcategories->update($request->all())){
            $subcategories->save();

        Session::flash('success', 'Setting updated successfully');
        return redirect()->back();}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategories  $subcategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategories $subcategories, $id){
        $subcategories = $subcategories->whereId($id)->delete();



        Session::flash('success', 'Category deleted successfully');

        return redirect()->back();
    }


}
