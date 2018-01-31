@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">
            <h1 class="uk-card-title">Add Illnesss</h1>
            <form class="uk-form-horizontal" method="POST" action="{{ route('treatment.store') }}">
                {{ csrf_field() }}

                <div class="uk-margin">
                    <label class="uk-form-label">Illness</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="illness">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Perawat</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="doctor">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Comment</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" rows="4" name="comment"></textarea>
                    </div>
                </div>

                <div class="form-group">
                        <input type="hidden" class="form-control" name="user_id" value="{{ $patient->id }}">
                </div>

                <div class="uk-margin" uk-margin>
                    <button type="submit" class="uk-button uk-button-primary">Add Illness</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection