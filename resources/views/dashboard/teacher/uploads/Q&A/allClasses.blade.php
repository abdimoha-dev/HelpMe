@extends('layouts.dash')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Choose Your Upload') }}</div>

                    <div class="card-body">
                        <div class="form-group" style="padding: 0 15em;">
                            <a href="#!">Form One</a>
                        </div>

                        <div class="form-group" style="padding: 0 15em;">
                            <a href="#!">Form TWO</a>
                        </div>
                        <div class="form-group" style="padding: 0 15em;">
                            <div>
                                <a href="#!">Form Three</a>
                            </div>
                        </div>

                        <div class="form-group" style="padding: 0 15em;">
                            <div>
                                <a href="#!">Form Four</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection