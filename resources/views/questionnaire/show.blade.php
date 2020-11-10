@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$questionnaire->title}}</div>

                <div class="card-body">
                    <a href="/questinnaire/{{ $questionnaire->id }}/questions/create" class="btn btn-dark">Add New Question</a>
                </div>
            </div>

            {{-- @foreach ($questionnaire->question as $question)
            <div class="card mt-5">
                <div class="card-header">{{$question->question}}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($question->answers as $answer)
                            <li class="list-group-tiem">{{ $answer->answer}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach --}}
        </div>
    </div>
</div>
@endsection
