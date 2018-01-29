@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">
            <h1 class="uk-card-title">Add Patient</h1>
            <form class="uk-form-horizontal" method="POST" action="{{ route('patient.store') }}">
                {{ csrf_field() }}
                @foreach($patients as $patient)
                <div class="uk-margin">
                    <label class="uk-form-label">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="name" value="{{ $patient->name }}" placeholder="" autofocus>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">IC Number</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="ic_number" value="{{ $patient->ic_number }}">
                    </div>
                </div>

                <div class="uk-margin">
                    <span class="uk-form-label">Gender</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label>
                            @if ($patient->gender == 1)
                                <input class="uk-radio" type="radio" name="gender" value="1"> Male</label>
                                <br>
                            @else ($patient->gender == 2)
                            <label>
                                <input class="uk-radio" type="radio" name="gender" value="2"> Female</label>
                            @endif
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Phone Number</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" name="phone_number" value="{{ $patient->phone_number }}">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Email Address</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="email" name="email" value="{{ $patient->email }}">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Address</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" name="address" value="{{ $patient->address }}">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">Postcode</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" name="postcode" value="{{ $patient->postcode }}">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label">State</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" name="state" value="{{ $patient->state }}">
                            </div>
                        </div>

                        <div class="uk-margin" uk-margin>
                            <button type="submit" class="uk-button uk-button-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        @endsection