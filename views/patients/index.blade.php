@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="container padding">
                    <div class="text-heading-info">
                        <div class="card-header">Your information</div>
                    </div>
                <div class="card-body">
                @if (session('status'))
                    <div style="color: black; background-color: #A0DD68; width: 280px; padding:10px;" class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
<div class="text-body">
<table class="table table-striped table-bordered table-hover">
    <table class="table-info">
    <thead>
        <tr> 
                        @foreach($patients as $patient)
                    <tr> <td style="border: none;"> <b>First name </b></td>
                        <td style="border: none;"> {{$patient['f_name']}}</td></tr>

                    <tr> <td style="border: none;"> <b>Middle name </b></td>
                    <td style="border: none"> {{$patient['m_name']}}</td></tr>

                    <tr> <td style="border: none;"> <b>Last name </b></td>
                        <td style="border: none"> {{$patient['l_name']}}</td></tr>

                    <tr> <td style="border: none;"> <b>NHS Number </b></td>
                        <td style="border: none"> {{$patient['nhs_number']}}</td></tr>

                    <tr> <td style="border: none;"><b>Email </b></td> 
                        <td style="border: none; width: 250px;">{{$patient->email}}</td></tr>

                    <tr> <td style="border: none; width: 200px;"> <b>Phone number </b></td>
                        <td style="border: none"> {{$patient['phone']}}</td></tr>

                    <tr> <td style="border: none; width: 200px;"> <b>Postcode </b></td>
                        <td style="border: none"> {{$patient['postcode']}}</td></tr>

                    <tr> <td style="border: none;"><b>Date of birth </b></td> 
                        <td style="border: none">{{$patient->dob}}</td></tr>

                    <tr> <td style="border: none; width: 200px; "> <b>Surgery name </b></td>
                        <td style="border: none"> {{$patient['surgery_name']}}</td></tr> 
            </tr>
            @endforeach
        </tbody>
    </table>

                    @guest
                    @else

                    {{-- only show button if user has not provided details already --}}
                    @if ($patients->isEmpty())  

                    <a class="p" href="{{ url('patients/create') }}" style="margin-right: 510px; margin-top: -50px;">
                        <button class="green-button">Provide info </button>
                    </a>

                    @endif
                    @endguest

    @foreach($patients as $patient)
<div class="row mb-0">
    <button class="orange-button" onclick="document.location='{{ route('patients.edit', ['patient' => $patient['id']]) }}'">Update information</a>
    <form action="{{ action([App\Http\Controllers\PatientController::class, 'destroy'],['patient' => $patient['id']]) }}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="red-button" type="submit"> Delete account</button>
                </form>
                @endforeach   
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection