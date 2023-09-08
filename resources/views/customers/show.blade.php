 @extends('layout') 
{{-- @extends('layouts.app') --}}
@section('content')
<div class="col-sm-6">

<h4> Details of {{$customer->name}} </h4>  

 <p align="right"> <a href="/customers/create"> Add New Customer </a></p>   
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
      <tr> <td> <strong>  Company Name</strong> </td> <td> {{$customer->company_id}}</td>
     <tr> <td> <strong>   Photo  </strong> </td> <td>
     @if ($customer->image)
	<div class="row">
	<div class="col-6">
		<img src="{{asset('storage/'.$customer->image)}}" alt="" class="img-thumbnail" >
      </div>
      </div>
      @endif
      </td> </tr>
   </table>
</div>


</div>
</div>
@endsection
