<?php

namespace App\Http\Controllers;

use App\KnowledgeBasedCategory;
use App\KnowledgeBased;
use Illuminate\Http\Request;

class KnowledgeBasedController extends Controller
{
    public function __construct(){
    $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= KnowledgeBasedCategory::all();
            if($categories->isEmpty()){
                    return back();
            }
        return view('knowledgebased.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        KnowledgeBased::create([
            'knowledge_based_category_id' => request('category'),
            'title' => request('title'),
            'body' => request('body')
            ]);
        session()->flash('status', trans('helpdesk.kb_created'));
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KnowledgeBased  $knowledgeBased
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeBased $knowledgebase)
    {
         return view('knowledgebased.show',compact('knowledgebase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KnowledgeBased  $knowledgeBased
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeBased $knowledgeBased)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgeBased  $knowledgeBased
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBased $knowledgeBased)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgeBased  $knowledgeBased
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBased $knowledgeBased)
    {
        //
    }
}
