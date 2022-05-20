@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                @if (session('status'))
                    <div style="color: black; background-color: #A0DD68; width: 280px; padding:10px;" class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            
            <th> First name </th>
            <th> Middle name </th>
            <th> Last name </th>
            <th> NHS number</th>
            <th> Phone number</th>
            <th> DOB</th>
        </tr>
    </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td> {{$patient->f_name}} </td>
                <td> {{$patient->m_name}} </td>
                <td> {{$patient->l_name}} </td>
                <td> {{$patient->nhs_number}} </td>
                <td> {{$patient->phone}} </td>
                <td> {{$patient->dob}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection