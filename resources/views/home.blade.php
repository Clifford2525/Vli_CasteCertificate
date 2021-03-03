@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @if(auth()->user()->role=='applicant')
                    <p><a href="/forms">Continue</a></p>

                    @elseif(auth()->user()->role=='forwarder')
                    <p><a href="/forwarder">Continue</a></p>

                    @elseif(auth()->user()->role=='dc')
                    <p><a href="/dc">Continue</a></p>

                    @elseif(auth()->user()->role=='fieldofficer')
                    <p><a href="/fieldofficer">Continue</a></p>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
