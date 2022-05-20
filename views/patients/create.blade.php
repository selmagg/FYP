<!-- inherite master template app.blade.php -->
@extends('layouts.app')
<!-- define the content section -->
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="card">
                <div class="container padding">
                    <div class="text-heading-provide">
                        <div class="card-header">Provide information</div>
                    </div>
                            <!-- display the errors -->
                            @if ($errors->any())
                            <div style="color: black; background-color: #EA9987; width: 280px; padding:10px;" class="alert alert-danger">
                             @foreach ($errors->all() as $error)
                            {{ $error }} @endforeach
                            
                            </div> @endif
                            <!-- display the success status -->
                            @if (\Session::has('success'))
                            <div style="color: black; background-color: #A0DD68; width: 280px; padding:10px;" class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                            </div> @endif

                        <!-- define the form -->
                        <div class="card-body">
                            <div class="text-body-provide">
                            <form class="form-horizontal" method="POST"action="{{url('patients') }}" enctype="multipart/form-data">
                                
                                @csrf
                                <div class="col-md-8">
                                 <label >NHS number</label>
                                <input type="text" name="nhs_number"
                                placeholder="NHS number" />
                                 </div>

                                 <div class="col-md-8">
                                <label for="surgery_name">Surgery name</label>
                                <select id="surgery_name" name="surgery_name">
                                    <option value="Pinewood Surgery">Pinewood Surgery</option>
                                </select>
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
                                <input type="submit" class="green-button" style="width: 80px; height: 35px;" />
                                <input type="reset" class="orange-button" style="width: 80px; height: 35px;"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection