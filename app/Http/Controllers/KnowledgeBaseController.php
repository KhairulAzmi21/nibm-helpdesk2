<?php

namespace App\Http\Controllers;

use App\KnowledgeBase;
use App\KnowledgeBaseCategory;
use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
    public function __construct(){
    $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $categories= KnowledgeBaseCategory::all();
        $knowledgebases = KnowledgeBase::all();
        return view('knowledgebase.article.index',compact('categories','knowledgebases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories= KnowledgeBaseCategory::all();
        $knowledgebases = KnowledgeBase::all();
       
            if($categories->isEmpty()){
                    return back();
            }

        return view('knowledgebase.article.create',compact('categories','knowledgebases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
      
        KnowledgeBase::create([
            'knowledge_base_category_id' => request('category'),
            'title' => request('title'),
            'body' => request('body')
            ]);
        session()->flash('status', trans('helpdesk.kb_created'));
        return redirect('/knowledgebase');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KnowledgeBased  $knowledgeBased
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeBase $knowledgebase)
    {
         return view('knowledgebase.article.show',compact('knowledgebase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeBase $knowledgebase)
    {
        $categories= KnowledgeBaseCategory::all();
            if($categories->isEmpty()){
                    return back();
            }

        return view('knowledgebase.article.edit',compact('categories','knowledgebase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBase $knowledgebase)
    {
        $input = $request->all();
        //return $input;
        $update = KnowledgeBase::findOrfail($knowledgebase->id);
        if($update->update($input)){
             session()->flash('status', trans('Successfully Update Article'));
            return redirect('/knowledgebase');
        }
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBase $knowledgebase)
    {

        KnowledgeBase::destroy($knowledgebase->id);
        session()->flash('status', trans('Successfully Delete Article'));
        return redirect('/knowledgebase');
    }
}
