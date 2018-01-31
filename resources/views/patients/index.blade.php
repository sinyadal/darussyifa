@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">

            <form action="search" method="POST" class="uk-search uk-search-default uk-form-width-large">
                {{ csrf_field() }}
                <span uk-search-icon></span>
                <input class="uk-search-input uk-form-width-large" type="search" name="search" placeholder="Search by name, or IC number..">
            </form>

            <a href="{{ route('patient.create') }}" class="uk-align-right uk-button uk-button-primary">Add Patient</a>

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
                        <td>
                            <form method="POST" action="{{ route('patient.destroy', $patient->id) }}">
                                {{ method_field('DELETE') }} {{ csrf_field() }}

                                <a href="{{ route('treatment.show', $patient->id) }}" class="uk-icon-link uk-margin-small-right" title="Patient History" uk-tooltip uk-icon="icon: comment"></a>

                                <a href="{{ route('patient.edit', $patient->id) }}" title="Edit" uk-tooltip class="uk-icon-link uk-margin-small-right" uk-icon="icon: pencil"></a>

                                <button type="submit" class="uk-icon-link uk-margin-small-right" title="Remove" uk-tooltip uk-icon="icon: trash"></button>

                                <a href="" title="Print" uk-tooltip class="uk-icon-link uk-margin-small-right" uk-icon="icon: download"></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection