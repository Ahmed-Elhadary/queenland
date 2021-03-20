<?php

namespace App\Http\Controllers;

use App\Models\Modelbackend\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.allquestions')->with('questions',Questions::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('dashboard.pages.addquestions');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Questions::create($input);
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelbackend\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelbackend\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions,$id)
    {
        $questions = Questions::find($id);
        return view('dashboard.pages.editquestion')->with('questions',$questions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelbackend\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $questions = Questions::findOrFail($id);
        $questions->update([
            'ar_question' => $request->ar_question,
            'en_question' => $request->en_question,
            'ar_answer' => $request->ar_answer,
            'en_answer' => $request->en_answer
        ]);
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelbackend\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $questions,$id)
    {
        Questions::find($id)->delete();
        return redirect()->back();
    }
}
