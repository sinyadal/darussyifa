@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">

            @if(Auth::user()->level===1)
            @else
            <a href="{{ route('treatment.match', $patient->id) }}" class="uk-button uk-button-primary">Add Treatment</a>
            @endif

            <h1 class="uk-card-title">Illness</h1>{{ $patient->name }}
            <table class="uk-table uk-table-divider uk-table-small">
                <thead>
                    <tr>
                        <th>Illness</th>
                        <th>Comment</th>
                        <th>Doctor</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($treatments as $treatment) 
                    <tr>
                        <td>{{ $treatment->illness }}</td>
                        <td>{{ $treatment->comment }}</td>
                        <td>{{ $treatment->doctor }}</td>
                        <td>{{ date('M j, Y g:i A', strtotime($treatment->created_at)) }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <a href="{{ route('patient.index', $patient->id) }}" class="uk-button uk-button-default">Cancel</a>
        </div>
    </div>
</div>



@endsection