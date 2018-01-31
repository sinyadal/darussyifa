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
                        <input class="uk-input" type="text" name="name">
                        @if ($errors->has('name'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('name') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">IC Number</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="ic_number">
                        @if ($errors->has('ic_number'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('ic_number') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <span class="uk-form-label">Gender</span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label>
                            <input class="uk-radio" type="radio" name="gender" value="1"> Male</label>
                        <br>
                        <label>
                            <input class="uk-radio" type="radio" name="gender" value="2"> Female</label>
                            @if ($errors->has('gender'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('gender') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Phone Number</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="phone_number">
                        @if ($errors->has('phone_number'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('phone_number') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Email Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="email" name="email">
                        @if ($errors->has('email'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="address">
                        @if ($errors->has('address'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('address') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Postcode</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="postcode">
                        @if ($errors->has('postcode'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('postcode') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">State</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="state">
                        @if ($errors->has('state'))
                        <div class="uk-margin uk-text-danger">
                            <p>{{ $errors->first('state') }}</p>
                        </div>
                        @endif
                    </div>
                </div>

                <hr class="uk-margin-large-top">
                <h1 class="uk-card-title">Add Illnesss</h1>

                <div class="uk-margin">
                    <label class="uk-form-label">Illness</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Perawat</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Comment</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" rows="4" name=""></textarea>
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