@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Complete Registration') }}</div>
                    <div class="card-body">

                        {{ Form::open(['url'=>'student/registration', 'role' =>'form'])  }}
                        @csrf
                                <div class="col-md-4">
                                    <label>County:</label><br />
                                    <select name="county" id="county" class="demoInputBox">
                                        <option value="">Select County</option>
                                        @foreach($counties as $county)
                                            {{ $county->county_code }}
                                            <option value="{{$county->id}}">{{$county->county}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('school','School')  }}
                                        {{ Form::text('school',old('school'), ['class'=>'form-control']) }}
                                        @if($errors->has('school'))
                                            <p class="help-block text-danger">
                                                <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('school') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('admNo','Admision Number')  }}
                                        {{ Form::text('admNo',old('admNo'), ['class'=>'form-control']) }}
                                        @if($errors->has('admNo'))
                                            <p class="help-block text-danger">
                                                <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('admNo') }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::select('form', config('Sys.settings.form')) !!}
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>

                    {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
