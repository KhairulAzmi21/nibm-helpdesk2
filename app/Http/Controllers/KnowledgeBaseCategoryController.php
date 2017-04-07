<?php

namespace App\Http\Controllers;

use App\KnowledgeBaseCategory;
use Illuminate\Http\Request;

class KnowledgeBaseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = KnowledgeBaseCategory::all();
        return view('knowledgebased.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = KnowledgeBaseCategory::all();
        return view('knowledgebased.category',compact('categories'));
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
        'name' => 'required|unique:knowledge_based_categories|max:255',
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
    public function edit(KnowledgeBaseCategory $knowledgeBaseCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgeBaseCategory  $knowledgeBaseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBaseCategory $knowledgeBaseCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgeBaseCategory  $knowledgeBaseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBaseCategory $knowledgeBaseCategory)
    {
        //
    }
}
