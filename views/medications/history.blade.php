@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <section class="container padding">
                    <div class="text-heading-history">
                        <div class="card-header">Medication History</div>
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
            <th> Medication name</th>
            <th> Date requested</th>
            <th> Request status</th>
        </tr>
    </thead>
        <tbody>
            @foreach($med_reqs as $med_req)
            <tr>
                <td style="border-bottom: none;"> {{$med_req['med_name']}} </td>
                <td style="border-bottom: none;"> {{$med_req['created_at']}} </td>
                <td style="border-bottom: none;"> {{$med_req['request_status']}} </td>
            </tr>
                  @endforeach
        </tbody>
    </table>
<div>
    <button style="margin-right: 400px;"class="blue-button"><a class="p" href="{{ url('/meds') }}">Order medication </a></button>
</div>
</section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection