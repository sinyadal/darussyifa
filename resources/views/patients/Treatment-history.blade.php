@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">

            <form action="search" method="POST" class="uk-search uk-search-default uk-form-width-large">
                {{ csrf_field() }}
                <span uk-search-icon></span>
                <input class="uk-search-input uk-form-width-large" type="search" name="search" placeholder="Search by name, or IC number..">
            </form>

            <a href="{{ route('treatment.history-create', $patient->id) }}" class="uk-align-right uk-button uk-button-primary">Add Treatment</a>

            <h1 class="uk-card-title">Patient</h1>
            <table class="uk-table uk-table-divider uk-table-small">
                <thead>
                    <tr>
                        <th>Illness</th>
                        <th>Comment</th>
                        <th>Doctor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($treatments as $treatment)
                    <tr>
                        <td>{{ $treatment->illness }}</td>
                        <td>{{ $treatment->comment }}</td>
                        <td>{{ $treatment->doctor }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection