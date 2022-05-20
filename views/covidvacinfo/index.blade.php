@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <section class="container padding">
                    
                    <div class="text-heading">
                <div class="card-header">Covid-19 Vaccination info</div>
</div>

                <div class="card-body">
                @if (session('status'))
                    <div style="color: black; background-color: #A0DD68; width: 280px; padding:10px;" class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
<div class="text-body">
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th> Vaccination name </th>
            <th> Date taken </th>
            <th> Batch number </th>
        </tr>
    </thead>
        <tbody>
            @foreach($vac_infos as $vac_info)
            <tr>
                <td style="border-bottom: none"> {{$vac_info['vac_name']}} </td>
                <td style="border-bottom: none"> {{$vac_info['date_taken']}} </td>
                <td style="border-bottom: none"> {{$vac_info['batch_no']}} </td>
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