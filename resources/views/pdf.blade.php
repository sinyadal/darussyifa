<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patient Details</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
</head>
<style>
    p {
        font-size: 12;
    }
</style>

<body>

    <div class="uk-container">
        <h2 class="uk-text-center">
            <b>DARUSSYIFA'</b>
        </h2>
        <hr>
        <h3>
            <b>Patient Details</b>
        </h3>
        <p>
            <b>Name: </b>{{ $patients->name }}
        </p>
        <p>
            <b>IC Number: </b>{{ $patients->ic_number }}
        </p>
        <p>
            <b>Gender: </b>
            @if ($patients->gender == 1) Male @else ($patients->gender == 2) Female @endif
        </p>
        <p>
            <b>Phone Number: </b>{{ $patients->phone_number }}
        </p>
        <p>
            <b>Email: </b>{{ $patients->email }}
        </p>
        <p>
            <b>Address: </b>{{ $patients->address }}
        </p>
        <p>
            <b>Postcode: </b>{{ $patients->postcode }}
        </p>
        <p>
            <b>State: </b>{{ $patients->state }}
        </p>
    </div>

</body>

</html>