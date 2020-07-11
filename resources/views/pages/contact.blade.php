@extends('layouts.app')

@section('title')
Contact - {{$settings["general"]->site_title}} 
@endsection

@section('description')
Billy's Burgers has been around since the beginning of the Disco era. 
@endsection

@section('content')
    <div id="contact-page">
    <div class="content-box">
    <div class="row">
    <div class="col-md-6">
      <h1>Contact Us</h1>
      <h3>Address</h3>
      <p>
        {{$settings["general"]->address_1}} {{$settings["general"]->address_2}}<br>
        {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
      </p>
      <h3>Phone Number</h3>
      <p>
        <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
      </p>
      </div>
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3118.4073794232504!2d-90.22853584888479!3d38.59349277230486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8b322c6035a01%3A0x8716a921ebaabe53!2sBurger%20809!5e0!3m2!1sen!2sca!4v1594494588059!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <div>
    </div>
@endsection