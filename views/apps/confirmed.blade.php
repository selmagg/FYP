@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <section class="container padding">
                    <div class="text-heading-booked">
                        <div class="card-header">Booked appointments</div>
                    </div>
                <div class="card-body">
                @if (session('status'))
                    <div style="color: black; background-color: #A0DD68; width: 280px; padding:10px;"class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
<div class="text-body">
<table class="table table-striped table-bordered table-hover">
    <table class="table-med">
    <thead>
        <tr>
            <th> Date of appointment:</th>
            <th> Time of appointment:</th>
            <th> Appointment booked with (if specified):</th>
            <th> Reason for appointment (if provided):</th>
        </tr>
    </thead>
        <tbody>
            @foreach($confirmed_apps as $confirmed_app)
            <tr>
                <td> {{$confirmed_app['app_date']}} </td>
                <td> {{$confirmed_app['app_time']}} </td>
                <td> {{$confirmed_app['gp_name']}} </td>
                <td> {{$confirmed_app['app_desc']}} </td>
            </tr>
                  @endforeach
        </tbody>
    </table>
</section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection