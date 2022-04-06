@extends('disseny')

@section('content')

<h1>Llista de clients</h1>
<div class="mt-5">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr class="table-primary">
                <td>ID</td>

                <td>Nom</td>
                <td>Cognoms</td>
                <td>Email</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($soci as $sos)
            <tr>
                <td>{{$sos->id}}</td>
                <td>{{$sos->nom}}</td>
                <td>{{$sos->cognoms}}</td>
                <td>{{$sos->email}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection