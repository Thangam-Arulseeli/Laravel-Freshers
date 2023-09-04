@extends('layout')
{{-- @extends('layouts.app') --}}
@section('content')
<div class="container">
    <h3> Contact Us </h3>
  {{-- <form action="/contact" method="POST"> --}}
    {{-- <form action="{{url('/contact')}}" method="POST"> --}}
    <form action="{{route('contact.store')}}" method="POST">
        <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" autocomplete="off"  value="{{old('name')}}" >
         {{$errors->first('name')}}
        <div class="invalid-feedback">
             Enter the Full Name
        </div>   <!-- Bootstrap 5 form validation for required field attribute -->
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Mail ID:</label>
        <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" autocomplete="off"  value="{{old('email')}}" >
        {{$errors->first('email')}}  
        </div>
    </div>

    <div class="row mb-3">
        <label for="message" class="col-sm-2 col-form-label">Message:</label>
        <div class="col-sm-6">
        <textarea class="form-control" id="message" cols="30" rows="10" placeholder="Enter Name" name="message" autocomplete="off"  value="{{old('message')}}" > </textarea>
         {{$errors->first('message')}}
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-6" align="right">
           <button type="submit" class="btn btn-primary"> Send Message </button>
        </div>
    </div>
    @csrf
  </form>

</div>
@endsection