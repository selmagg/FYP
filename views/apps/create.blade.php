<!-- inherite master template app.blade.php -->
@extends('layouts.app')
<!-- define the content section -->
@section('content')

        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class="card">
                    <section class="container padding">
                        <div class="text-heading-create-app">
                            <div class="card-header">Make an appointment</div>
                        </div>
                        <div class="text-body-create-app">
                    <p><i>If you feel that the medical issue is urgent, please do not wait and contact 111 immediately.<br>
                    Note that the surgery is closed on weekends, if urgent contact 111.</i></p>
                    <!-- display the errors -->
                        @if ($errors->any())
                        <div style="color: black; background-color: #EA9987; width: 280px; padding:10px;" class="alert alert-danger">
                        <ul> @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> @endforeach
                        </ul>
                        </div><br /> @endif
                    <!-- display the success status -->
                        @if (\Session::has('success'))
                        <div style="color: black; background-color: #A0DD68; width: 280px; padding:10px;" class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                        </div><br /> @endif
                    <!-- define the form -->
                        <div class="card-body">
                        <form class="form-horizontal" method="POST"
                        action="{{url('apps') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="col-md-8">
                        <label >Date</label>
                        <input type="date" name="date" min=""
                        placeholder="date" />
                    </div>

                    <div class="col-md-8">
                         <label >Hour</label>
                         <select id="hour" name="hour">
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                    </select>
                    </div>

                    <div class="col-md-8">
                        <label >Time</label>
                        <select id="mins" name="mins">
                            <option value="00">00</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                    </select>
                    </div>

                    <div class="col-md-8">
                        <label >Preferred GP</label>
                        <select id="gps" name="gps">
                            <option value="none" selected disabled hidden>Select a GP</option>
                            <option value="Dr Apple">Dr Apple</option>
                            <option value="Dr Brown">Dr Brown</option>
                            <option value="Dr Dini">Dr Dini</option>
                    </select>
                    </div>

                    <div class="col-md-8">
                        <label id="desc" name="desc">Please describe the issue or the reason for the appointment in 250 characters or less</label>
                        <p><textarea id="desc" name="desc"rows="4" cols="50" maxlength="250"></textarea></p>
                    </div>

                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="green-button">Submit</button>
                        <button type="reset" class="red-button">Reset</button>
                    </div>
                </form>

                <div>
                    <button style="margin-right: 400px;"class="blue-button"><a class="p" href="{{ url('/confirmed_apps') }}">View appointments </a></button>
                </div>

            </div>
            </section>
            </div>
        </div>
    </div>
</div>
</div>
@endsection