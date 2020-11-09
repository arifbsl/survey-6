@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaire/{{ $questionnaire->id }}/questions" method="post">
                        @csrf
                        
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="text" class="form-control" id="question" value="{{old('question.question')}}" aria-describedby="questionHelp">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to the point question for best result.</small>

                            @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>

                                <small id="choiceHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                                <div class="form-group">
                                    <label for="answer1">Enter Questionnaire answer1</label>
                                <input name="answers[][answer]" type="text" class="form-control" id="answer1" value="{{old('answers.0.answer')}}" aria-describedby="choiceHelp" placeholder="Enter Choice 1">
                                    <small id="answer1Help" class="form-text text-muted">Give your questionnaire answer1.</small>
        
                                    @error('answers.0.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="answer2">Enter Questionnaire answer2</label>
                                <input name="answers[][answer]" type="text" class="form-control" id="answer2" value="{{old('answers.1.answer')}}" aria-describedby="choiceHelp" placeholder="Enter Choice 2">
                                    <small id="answer2Help" class="form-text text-muted">Give your questionnaire answer2.</small>
        
                                    @error('answers.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="answer3">Enter Questionnaire answer3</label>
                                    <input name="answers[][answer]" type="text" class="form-control" id="answer3" value="{{old('answers.2.answer')}}" aria-describedby="choiceHelp" placeholder="Enter Choice 3">
                                    <small id="answer3Help" class="form-text text-muted">Give your questionnaire answer3.</small>
        
                                    @error('answers.2.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="answer4">Enter Questionnaire answer4</label>
                                    <input name="answers[][answer]" type="text" class="form-control" id="answer4" value="{{old('answers.3.answer')}}" aria-describedby="choiceHelp" placeholder="Enter Choice 4">
                                    <small id="answer4Help" class="form-text text-muted">Give your questionnaire answer4.</small>
        
                                    @error('answers.3.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </fieldset>
                        </div>
    
                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
