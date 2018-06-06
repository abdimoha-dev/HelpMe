@extends('layouts.dash')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Choose Your Upload') }}</div>

                    <div class="card-body">
                        {{ Form::open(['url'=>'teacher/uploads/questions', 'role' =>'form'])  }}
                        @csrf
                        {!!  Form::select('class', config('Sys.settings.form'));  !!}
                        {!!  Form::select('subject', config('Sys.settings.subjects'));  !!}
                        {!!  Form::select('topic', config('Sys.settings.topic'));  !!}

                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection