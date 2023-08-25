@extends('layout')
@section('content')

<h2> Add New Customer </h2>
 <div class="py-3">
    <form action="/customers" method="post">
    @include('customers.form')
<div class="mb-3 mt-3  col-sm-6">  
    <button type="submit" class="btn btn-primary">Add Customer</button>
</div>  
@csrf
</form> 
</div>

@endsection
