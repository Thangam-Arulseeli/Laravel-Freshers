@extends('layout')
@section('content')

<h2> Edit Details of {{$customer->name}} </h2>
  <div class="py-3">
    <form action="/customers/{{$customer->id}}" method="post">
    @method('PATCH')
    @include('customers.form')
    <div class="mb-3 mt-3  col-sm-6">  
       <button type="submit" class="btn btn-primary">Update Customer</button>
     </div>  
@csrf
</form> 
</div>
@endsection

