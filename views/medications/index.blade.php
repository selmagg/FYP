@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">

            <div class="card">
                <section class="container padding">
                    <div class="text-heading-med">
                        <div class="card-header">Order medication</div>
                    </div>
                <div class="card-body">
                @if (session('status'))
                    <div style="color: black; background-color: #A0DD68; width: 280px; padding:10px;" class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
<div class="text-body">
<table class="table table-striped table-bordered table-hover">
    <table class="table-med">
    <thead>
        <tr>
            
            <th> Medication type</th>
            <th> Medication name </th>
            <th> Date issued </th>
            <th> Amount prescribed </th>
            <th> Suggested dose </th>
        </tr>
    </thead>
        <tbody>
            @foreach($med_infos as $med_info)
            <tr>
                <td> {{$med_info['category']}} </td>
                <td> {{$med_info['medication_name']}} </td>
                <td> {{$med_info['date_issued']}} </td>
                <td> {{$med_info['amount_prescribed']}} </td>
                <td style="border-right: none;"> {{$med_info['dose_amount']}} </td>
                </td>
                @if(Auth::user()->role==0)
                <td style="border-top:none; border-bottom: none;">
                    <button class="green-button" onclick="document.location='{{ action('App\Http\Controllers\MedicationRequestController@store', $med_info["id"])}}'">Request</a>
                @endif
            </div>
            </td>
            </tr>
                  @endforeach
        </tbody>
        </table>
    </table>
<div>
    <button style="margin-right: 400px;"class="blue-button"><a class="p" href="{{ url('/req_history') }}">Order status & history </a></button>
</div>
</section>
            </div>
        </div>
    </div>
</div>
@endsection