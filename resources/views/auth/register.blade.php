@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        {!! Form::open(['url'=>'register','role'=>'form']) !!}
                        @csrf
                        <div class="form-group has-feedback">
                            {!! Form::label('name'),'Name' !!}
                            {!! Form::text('name', old('name'), ['class'=>'form-control','placeholder'=>'*name*']) !!}

                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <div class="col-md-6">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            {!! Form::label('email'),'E-mail Address' !!}
                            {!! Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'*email*']) !!}

                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <div class="col-md-6">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            {!! Form::label('school'),'School' !!}
                            {!! Form::text('school', old('school'), ['class'=>'form-control','placeholder'=>'*school*']) !!}

                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <div class="col-md-6">
                                @if ($errors->has('school'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            {!!  Form::select('role', config('sys.settings.subjects'));  !!}
                        </div>

                        <div class="form-group has-feedback">
                            {!! Form::label('password'),'Password' !!}
                            {!! Form::text('password', old('password'), ['class'=>'form-control','placeholder'=>'*password*']) !!}

                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <div class="col-md-6">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-confirm'),'Confirm Password' !!}
                            {!! Form::text('password-confirm', old('password-confirm'), ['class'=>'form-control','placeholder'=>'*password*']) !!}

                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection