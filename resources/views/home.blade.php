@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-card uk-card-body uk-card-default">
            <h1 class="uk-card-title">Your are logged in as {{ Auth::user()->name }}</h1>
        </div>
    </div>
</div>

@endsection