<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;



class QuestionnaireController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('questionnaire.create');
    }


    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);


        $questionnaire = auth()->user()->questionnaire()->create($data);

        return redirect('/questionnaire/'.$questionnaire->id);
    }


    public function show(Questionnaire $questionnaire) {

        $questionnaire->load('questions.answers');

        return view('questionnaire.show', compact('questionnaire'));
    }
}
