@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">
            <h1 class="uk-card-title">Add Patient</h1>
            <form class="uk-form-horizontal" method="POST" action="{{ route('patient.store') }}">
                {{ csrf_field() }}

                <div class="uk-margin">
                    <label class="uk-form-label">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="name" value="{{ old('name') }}" placeholder="" autofocus>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">IC Number</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="ic_number">
                    </div>
                </div>

                <div class="uk-margin">
                    <span class="uk-form-label">Gender</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label>
                            <input class="uk-radio" type="radio" name="radio1"> Male</label>
                        <br>
                        <label>
                            <input class="uk-radio" type="radio" name="radio1"> Female</label>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Phone Number</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="phone_number">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Email Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="email" name="email">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="address">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Postcode</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="postcode">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">State</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="state">
                    </div>
                </div>

                <div class="uk-margin" uk-margin>
                    <button type="submit" class="uk-button uk-button-primary">Add Patient</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection