@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="container padding">
                    <div class="text-heading-update">
                        <div class="card-header-update">Update information</div>
                    </div>

                @if ($errors->any())
                <div style="color: black; background-color: #EA9987; width: 280px; padding:10px;"class="alert alert-danger">
                    
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    
                </div>
                @endif
                @if (\Session::has('success'))
                <div  style="color: black; background-color: #A0DD68; width: 280px; padding:10px;" class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="text-body-update">

                    <form class="form-horizontal" method="POST" action="{{ route('patients.update', ['patient' =>$patient['id']]) }}" enctype="multipart/form-data" >
                        @method('PATCH')
                        @csrf
                            <div class="col-md-8">
                                <label >Email</label>
                                <input type="text" name="email" value="{{$patient->email}}" style="width: 200px;"/>
                            </div>
                                <div class="col-md-6 col-md-offset-4">

                                    <input type="submit" class="green-button" style="width: 80px; height: 30px;" />

                                <input type="reset" class="orange-button" style="width: 80px; height: 30px;" />
                            </a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection