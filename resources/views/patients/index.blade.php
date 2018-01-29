@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default" uk-height-viewport="expand: true">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">
            <a href="{{ route('patient.create') }}" class="uk-button uk-button-primary">Add Patient</a>
            <h1 class="uk-card-title">Patient</h1>
            <table class="uk-table uk-table-divider uk-table-small">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>IC Number</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Postcode</th>
                        <th>State</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patients)
                    <tr>
                        <td>{{ $patients->name }}</td>
                        <td>{{ $patients->ic_number }}</td>
                        @if ($patients->gender == 1)
                        <td>Male</td>
                        @else ($patients->gender == 2)
                        <td>Female</td>
                        @endif
                        <td>{{ $patients->phone_number }}</td>
                        <td>{{ $patients->email }}</td>
                        <td>{{ $patients->address }}</td>
                        <td>{{ $patients->postcode }}</td>
                        <td>{{ $patients->state }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection