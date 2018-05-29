@extends('layouts.dash')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Complete Registration') }}</div>

                    <div class="card-body">
                        {{ Form::open(['url'=>'teacher/registration', 'role' =>'form'])  }}
                        @csrf

                        <div class="col-md-4" style="padding-left: 15em">
                            <label>County:</label><br />
                            <select name="county" id="county" class="demoInputBox">
                                <option value="">Select County</option>

                                @foreach($counties as $county)

                                    {{ $county->county_code }}

                                    <option value="{{$county->id}}">{{$county->county}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group" style="padding: 0 15em;">
                            {{ Form::label('school','School')  }}
                            {{ Form::text('school',old('school'), ['class'=>'form-control']) }}
                            @if($errors->has('school'))
                                <p class="help-block text-danger">
                                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('school') }}
                                </p>
                            @endif
                        </div>

                        <div class="form-group" style="padding: 0 15em;">
                            {{ Form::label('tscNo','Tsc Number')  }}
                            {{ Form::text('tscNo',old('tscNo'), ['class'=>'form-control']) }}
                            @if($errors->has('tscNo'))
                                <p class="help-block text-danger">
                                    <i class="fa fa-exclamation-triangle fa-fw"></i> {{ $errors->first('tscNo') }}
                                </p>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="english" value="english" checked="yes">English<br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="kishwahili" value="kishwahili" checked="yes">kishwahili<br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="maths" value="maths" checked="yes">Mathematics<br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="biology" value="biology" checked="yes">Biology<br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="Physics" value="physics" checked="yes">Physics<br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="maths" value="maths" checked="yes">Mathematics<br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="geograpy" value="geograpy" checked="yes">Geography<br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="chemistry" value="chemistry" checked="yes">Chemistry<br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div>
                                        <input type="checkbox" name="agriculture" value="agriculture" checked="yes">Agriculture<br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
