<!-- inherite master template app.blade.php -->
@extends('layouts.app')
<!-- define the content section -->
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class="card">
                     <div class="card-header">Pick a date</div>
                    <!-- display the errors -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul> @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> @endforeach
                        </ul>
                        </div><br /> @endif
                    <!-- display the success status -->
                        @if (\Session::has('success'))
                        <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                        </div><br /> @endif
                    <!-- define the form -->
                        <div class="card-body">
                        <form class="form-horizontal" method="POST"
                        action="{{url('patients') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="col-md-8">
                        <label >NHS number</label>
                        <input type="text" name="nhs_number"
                        placeholder="NHS number" />
                    </div>
                    <div class="col-md-8">
                         <label >Phone number</label>
                        <input type="text" name="phone"
                        placeholder="phone number" />
                    </div>
                    <div class="col-md-8">
                        <label >First name</label>
                        <input type="text" name="f_name"
                        placeholder="First name" />
                    </div>
                    <div class="col-md-8">
                        <label >Middle name</label>
                        <input type="text" name="m_name"
                        placeholder="Middle name" />
                    </div>
                    <div class="col-md-8">
                        <label >Postcode</label>
                        <input type="text" name="postcode"
                        placeholder="Postcode" />
                    </div>
                    <div class="col-md-8">
                        <label >Date of birth</label>
                        <input type="date" name="dob"
                        placeholder="Date of birth" />
                    </div>
                    <div class="col-md-6 col-md-offset-4">
                        <input type="submit" class="btn btn-primary" />
                        <input type="reset" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection