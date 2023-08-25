@extends('layout')
@section('content')
<div class="col-sm-6">

<h4> Details of {{$customer->name}} </h4>  

{{-- <p align="right"> <a href="/customers.create"> Add New Customer </a></p>   --}}
<div class = "mx-3 my-3">
<p> <a href="/customers/{{$customer->id}}/edit">Edit</a> </p>
<form action ="/customers/{{$customer->id}}" method="post">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit">Delete</button>
</form>
</div>

<div class="row py-3 mx-3">  
     <table class=table-border>
      <tr> <td> <strong> Customer Name </strong> </td> <td> {{$customer->name}}</td>
      <tr> <td> <strong>  Age </strong> </td> <td> {{$customer->age}} </td>
      <tr> <td> <strong>  Address </strong> </td> <td> {{$customer->address}} </td>
      <tr> <td> <strong>  Contact No.</strong> </td> <td> {{$customer->contactno}}</td>
      <tr> <td> <strong>  Mail ID</strong> </td> <td> {{$customer->mailid}}</td>
      <tr> <td> <strong>  Status </strong> </td> <td> {{$customer->active}}</td> 
      <tr> <td> <strong>  Company Name</strong> </td> <td> {{$customer->companyid}}</td>
     </table>
</div>
</div>
@endsection
