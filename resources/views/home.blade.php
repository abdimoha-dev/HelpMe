@extends('layouts.app')

@section('content')
    @include('shared.alerts.alerts')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert-danger alert-success ">
                            {{ session('status') }}
                        </div>
                    @endif

                   @include('home')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
