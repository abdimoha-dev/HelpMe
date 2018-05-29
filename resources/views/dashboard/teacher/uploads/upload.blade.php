@extends('layouts.dash')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Choose Your Upload') }}</div>

                    <div class="card-body">
                        <div class="form-group" style="padding: 0 15em;">
                            <a href="#!">Upload Notes</a>
                        </div>

                        <div class="form-group" style="padding: 0 15em;">
                            <a href="{{url('teacher/uploads/questions')}}">Upload Q&A</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
