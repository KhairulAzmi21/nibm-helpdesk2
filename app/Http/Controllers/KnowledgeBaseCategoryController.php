<?php

namespace App\Http\Controllers;

use App\KnowledgeBaseCategory;
use App\KnowledgeBase;
use Illuminate\Http\Request;

class KnowledgeBaseCategoryController extends Controller
{
    public function __construct(){
    $this->middleware('auth')->except('landing');

    }
    public function landing(){
         $categories = KnowledgeBaseCategory::all();
        return view('knowledgebase.knowledgebase',compact('categories'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $categories = KnowledgeBaseCategory::all();
        return view('knowledgebase.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = KnowledgeBaseCategory::all();
        return view('knowledgebase.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|unique:knowledge_base_categories|max:255',
        ]);

        KnowledgeBaseCategory::create([
            'name' => request('name'),
            ]);
        session()->flash('status', trans('New category has been created'));
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KnowledgeBaseCategory  $knowledgeBaseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeBaseCategory $knowledgeBaseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KnowledgeBaseCategory  $knowledgeBaseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeBaseCategory $category)
    {
        return view('knowledgebase.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgeBaseCategory  $knowledgeBaseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBaseCategory $category)
    {
       
         $this->validate($request, [
        'name' => 'required|unique:knowledge_base_categories|max:255',
        ]);

        KnowledgeBaseCategory::where('id',$category->id)
                                                ->update(['name' => request('name')]);
          
        session()->flash('status', trans('Category successfully change'));
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgeBaseCategory  $knowledgeBaseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBaseCategory $category)
    {
        $article = KnowledgeBase::where('knowledge_base_category_id',$category->id)->update([
                'knowledge_base_category_id' => null
        ]);

        KnowledgeBaseCategory::destroy($category->id);

        session()->flash('status', trans('Successfully Delete Category'));
        return redirect('/category');
    }
}
