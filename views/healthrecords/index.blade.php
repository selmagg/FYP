@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
       
            <div class="card">
                <section class="container padding">
                    <div class="text-heading-health">
                        <div class="card-header">Health Records</div>
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
            <th style="border-right: 1px solid"> Allergies</th>
            <th> Adverse reactions </th>
        </tr>
    </thead>
        <tbody>
            @foreach($health_infos as $health_info)

            <tr>
                <td style="border-right: 1px solid; border-bottom: none;"> {{$health_info['allergy']}} </td>
                <td style="border-bottom: none;"> {{$health_info['reaction']}} </td>

                </td>
            </tr>
                  @endforeach
        </tbody>
    </table>
</table>
<div>
    <button style="margin-right: 530px;"class="blue-button"><a class="p" href="{{ url('/vac_info') }}">Covid pass </a></button>
</div>
</section>
               
            </div>
        </div>
    </div>
</div>
@endsection