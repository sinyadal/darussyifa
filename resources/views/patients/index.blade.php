@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
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
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->ic_number }}</td>
                        @if ($patient->gender == 1)
                        <td>Male</td>
                        @else ($patient->gender == 2)
                        <td>Female</td>
                        @endif
                        <td>{{ $patient->phone_number }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->postcode }}</td>
                        <td>{{ $patient->state }}</td>
                        <td><a href="{{ route('patient.edit', $patient->id) }}" class="uk-button uk-button-primary">Edit</a>
                        </td>
                        <td>
                             <a href="{{ route('patient.destroy', $patient->id) }}" class="uk-button uk-button-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection