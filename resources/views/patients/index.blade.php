@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-margin-left uk-margin-right">

            <form action="search" method="POST" class="uk-search uk-search-default uk-form-width-large">
                {{ csrf_field() }}
                <span uk-search-icon></span>
                <input class="uk-search-input uk-form-width-large" type="search" name="search" placeholder="Search by name, or IC number..">
            </form>

            @if(Auth::user()->level===1)
            <a href="{{ route('patient.create') }}" class="uk-align-right uk-button uk-button-primary">Add Patient</a>
            @else
            @endif

            <h1 class="uk-card-title">Patient
                <span class="uk-text-primary">{{ $count }}</span>
            </h1>
            @if( $count == 0)
            <p class="uk-text-center">Sorry, not found</p>
            @else
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
                        <th>Created at</th>
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
                        <td>{{ date('M j, Y g:i A', strtotime($patient->created_at)) }}</td>
                        <td>


                            <a href="{{ route('treatment.show', $patient->id) }}" class="uk-icon-link uk-margin-small-right" title="Patient History"
                                uk-tooltip uk-icon="icon: comment"></a>
                            
                                @if(Auth::user()->level===1)
                            <a href="{{ route('patient.edit', $patient->id) }}" title="Edit" uk-tooltip class="uk-icon-link uk-margin-small-right" uk-icon="icon: pencil"></a>
                            

                            <a href="#modal-sections-{{ $patient->id }}" class="uk-icon-link uk-margin-small-right" uk-toggle title="Remove" uk-tooltip uk-icon="icon: trash"></a>
                            
                            
                            <a href="{{ action('PatientController@pdf', $patient->id) }}" title="Print" uk-tooltip class="uk-icon-link uk-margin-small-right"
                                uk-icon="icon: download"></a>
                                @else  
                                @endif

                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            
            @endif
            
        </div>

        {{ $patients->links('vendor.pagination.uikit') }}

    
    </div>
</div>


@foreach($patients as $patient)

<div id="modal-sections-{{ $patient->id }}" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body">
            <p>Confirm deletion?</p>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <form method="POST" action="{{ route('patient.destroy', $patient->id) }}">
                {{ method_field('DELETE') }} {{ csrf_field() }}
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button type="submit" class="uk-button uk-button-danger">Delete</button>
            </form>
        </div>
    </div>
</div>

@endforeach


@endsection