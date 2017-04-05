<?php

namespace App\Http\Controllers;

use App\KnowledgeBasedCategory;
use Illuminate\Http\Request;

class KnowledgeBasedCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = KnowledgeBasedCategory::all();


        return view('knowledgebased.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('knowledgebased.category');
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

        KnowledgeBasedCategory::create([
            'name' => request('name'),
            ]);
        session()->flash('status', trans('New category has been created'));
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KnowledgeBasedCategory  $knowledgeBasedCategory
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeBasedCategory $knowledgeBasedCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KnowledgeBasedCategory  $knowledgeBasedCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeBasedCategory $knowledgeBasedCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgeBasedCategory  $knowledgeBasedCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBasedCategory $knowledgeBasedCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgeBasedCategory  $knowledgeBasedCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBasedCategory $knowledgeBasedCategory)
    {
        //
    }
}
