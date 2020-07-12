@extends('layouts.admin')

@section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Reservation </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/reservations" class="breadcrumb-link">All Reservations</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Reservation</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit this Reservation</h5>
                                <div class="card-body">
                                     <form method="POST" action="/admin/reservations/{{$reservation->id}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="inputfname">First Name</label>
                                            <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname', $reservation->fname) }}" required autocomplete="fname" autofocus placeholder="">

                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputlname">Last Name</label>
                                            <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname', $reservation->lname) }}" required autocomplete="lname" autofocus placeholder="">

                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputemail">Email</label>
                                            <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email', $reservation->email) }}" required autocomplete="email" autofocus placeholder="">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputphonenumber">Phone Number</label>
                                            <input id="inputphonenumber" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $reservation->phone_number) }}"  autocomplete="phone_number" autofocus placeholder="">

                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputgueststotal">Guest Total</label>
                                            <input id="inputgueststotal" type="text" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" name="guests_total" required autofocus placeholder="" value="{{ old('guests_total', $reservation->guests_total) }}" autocomplete="guests_total">

                                            @error('guests_total')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputtime">Time</label>
                                            <input id="inputtime" type="text" class="form-control form-control-lg @error('time') is-invalid @enderror" name="time" value="{{ old('time', $reservation->time) }}"  autocomplete="time" autofocus placeholder="">

                                            @error('time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        


                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                       
                    </div>
            </div>
   

@endsection
  
  
  
  
  