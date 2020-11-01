@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <form action="/questionnaire" method="post">
                    @csrf;
                    
                    <div class="form-group">
                        <label for="title">Enter Questionnaire Title</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp">
                        <small id="titleHelp" class="form-text text-muted">Give your questionnaire a title that attracts attention.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="purpose">Enter Questionnaire purpose</label>
                        <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp">
                        <small id="purposeHelp" class="form-text text-muted">Give your questionnaire purpose.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Questionnaire</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
