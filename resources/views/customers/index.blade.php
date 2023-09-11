{{-- <h3> Customer Name List - Traditional PHP syntax </h3>
<ul> 
    <?php
        // Traditional PHP syntax to display passed data
        // foreach ($customerlist as $customer){
        //     echo "<li>" . $customer . "</li>";
        // }
        ?>
</ul> 
-------------------------------------    --}}
{{-- <h3> Customer Name List - Laravel blade syntax </h3>
<h4> This is the basis of Restful Controller </h4>
<!-- Laravel blade sytax to display data for simpler and cleaner code -->
<ul>
@foreach ($customerlist as $customer)
  <li> {{$customer}} </li>
@endforeach
</ul>

--------------------------------------   --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Details</title>
</head>
<body>
    <h3> Maintain Customer Details </h3>
    {{--    ul>li*4a    --}}
    {{-- <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <a href=""></a>
    </ul> --}}
    

    {{--    ul>li*4>a   --}}
    {{-- <ul>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
    </ul>
</body>
</html> 
----------------------------     
--}} 

{{-- Getting all the records in Customers table, getting from CustomersController --}}
{{-- @extends('layout')
@section('content')
<h4> Customer List </h4>
    <ul>
        @foreach ($customerlist as $customer)
             {{-- <li> {{$customer}}  </li> --}}
             {{-- <li> {{$customer -> name }} -- {{ $customer-> age }} -- {{ $customer->address}}
       @endforeach

    </ul>
@endsection  
-- --------------------------- --}}

{{-- Display filtered records - Received from CustomerController (Active & Inactive records) --}}
{{-- @extends('layout')
@section('content')
<h4> Active Customer List </h4>
<div class="row">
    <div class="col-6">
        <h3> Active Customer list </h3>
    <ul>
        @foreach ($activeCustomers as $customer) 
              <li> {{$customer -> name }} ----- <span class="text-muted"> {{ $customer-> age }} -- {{ $customer->address}} -- -- {{$customer->contactno}} -- {{ $customer->mailid }}</span> </li>
       @endforeach
    </ul>
    </div>
  <div class="col-6">
    <h3> Inactive Customer List  </h3>
    <ul>
        @foreach($inactiveCustomers as $customer)
            <li> {{$customer -> name }} ----- <span class="text-muted"> {{ $customer-> age }} -- {{ $customer->address}} -- -- {{$customer->contactno}} -- {{ $customer->mailid }}</span> </li>
        @endforeach
@endsection  
 -- ----------------------------   --}}

 {{-- Inserting the Customer details [Form - Post action ] and display active & inactive records --}}
{{-- @extends('layout')
 @section('content') 
 <div class="container">
    <form action="customers" method="post" >
    <div class="row">
        <div class="col-5">

    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Customer Name:</label>
        <input type="text" class="form-control" id="" placeholder="Enter Name" name="name" autocomplete="off" value="{{old('name')}}">
          {{$errors->first('name')}}
    </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age:</label>
    <input type="text" class="form-control" id="" placeholder="Enter Age" name="age" autocomplete="off" value="{{old('age')}}">
    {{$errors->first('age')}}
</div>
    <div class="mb-3 mt-3">
    <label for="address" class="form-label">Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" autocomplete="off" value="{{old('address')}}">
    {{$errors->first('address')}}
  </div>
  <div class="mb-3">
    <label for="contactno" class="form-label">contact No:</label>
    <input type="text" class="form-control" id="contactno" placeholder="Enter Contact No." name="contactno" value="{{old('contactno')}}">
    {{$errors->first('contactno')}}
  </div>
  <div class="mb-3">
    <label for="mailid" class="form-label">Mail ID:</label>
    <input type="mailid" class="form-control" id="mailid" placeholder="Enter MailID" name="mailid" autocomplete="off" value="{{old('mailid')}}">
    {{$errors->first('mailid')}}    
    {{-- class="@error('mailid') is-invalid @enderror">
             @error('mailid')
                <div class="alert alert-danger">{{ $message }}</div> --}}
  {{-- </div> 
  <div class="mb-3">
    <label for="active" class="form-label">Activeness :</label>
    {{-- <input type="text" class="form-control" id="active" placeholder="Enter active/inactive(1/0)" name="active"> --}}
    {{-- <select name="active" id="">
        <option value="" disabled> Select Customer Status </option>
        <option value="1"> Active </option>
        <option value="0"> Inactive </option>
    </select>
</div>


<div class="mb-3 mt-3">
  <label for="companyid" class="col-sm-2"></label>
  <div class="col-sm-10">
  <select name="companyid" id="companyid">
      <option value="" disabled> Select Company ID </option>
      @foreach($companies as $company)
          <option value="{{$company->id}}"> {{$company->cpyname}} </option>
      @endforeach
  </select>
  </div>
</div>
  <div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
    </div>
    </div>
@csrf 
</form> 
 </div>
 <hr> --}}
{{-- <h4> Active Customer List </h4> --}}
{{-- <div class="row">
    <div class="col-6">
        <h3> Active Customer list </h3>
    <ul>
        @foreach ($activeCustomers as $customer) 
              <li> {{$customer -> name }} ----- <span class="text-muted"> {{ $customer-> age }} -- {{ $customer->address}} -- -- {{$customer->contactno}} -- {{ $customer->mailid }} -- {{$active->company->cpyname}} </span> </li>
       @endforeach
    </ul>
    </div>
  <div class="col-6">
    <h3> Inactive Customer List  </h3>
    <ul>
        @foreach($inactiveCustomers as $customer)
            <li> {{$customer -> name }} ----- <span class="text-muted"> {{ $customer-> age }} -- {{ $customer->address}} -- -- {{$customer->contactno}} -- {{ $customer->mailid }}  -- {{$active->company->cpyname}}</span> </li>
        @endforeach
    </ul>
  </div> --}}

  {{-- <div class="row">
    <div class="col-5">
        <h3> Active Customer list </h3>
    <ul>
        @foreach ($customers as $customer) 
              <li> {{$customer -> name }} ----- <span class="text-muted"> {{ $customer-> age }} -- {{ $customer->address}} -- -- {{$customer->contactno}} -- {{ $customer->mailid }} -- {{$customer->companyid }} -- {{$customer->active }} </span> </li>
       @endforeach
    </ul>
    </div>

</div>
 
@endsection 
 --}}

  @extends('layout')  
 {{-- @extends('layouts.app')   --}}
 @section('content')
 <div class="col-sm-6">

    {{-- <div class = "mx-3 my-3">
       
        <form action ="/customers.create" method="get">     
              @csrf
              <button class="btn btn-danger" type="submit">Add New Customer</button>
        </form>
        </div> --}}
        {{-- <a href='{!! url('http://127.0.0.1:8000/customers/create'); !!}'>ADD NEW1</a>  --}}
         {{-- <a href='{{ route('customers/create') }}'> ADD NEW2 </a>  --}}
       
         @can('create',App\Models\Customer::class);
             <p align="right"> <a href="/customers/create"> Add New Customer - Index </a></p>  
          @endcan

 <h4> Customer List </h4>      
 <div class="row py-3">
 <div class="col-sm-8 px-4"> 
 <table class="table table-border table-success table-striped table-hover"> 
 <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">Customer Name</th>
       <th scope="col">Age</th>
       <th scope="col">Address</th>
       <th scope="col">Contact No.</th>
       <th scope="col">Mail ID</th>
       <th scope="col">Active</th>
       <th scope="col">Company</th>
       <th scope="col">Photo</th>  
     </tr>
   </thead>
   <tbody> 
 @foreach ($customers as $customer)
     <tr>
       <th scope="row">{{$customer->id}}</th>
       <!-- <td>{{$customer->name}}</td> -->
       {{-- <td> <a href="/customers/{{$customer->id}}">{{$customer->name}}</a></td> --}}
       
       {{-- Use Authorization --}}
       <td>
        @can('view', $customer)
          <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
        @endcan
        @cannot('view', $customer)
           {{$customer->name}}
        @endcannot
        </td>


       <td>{{$customer->age}}</td>
       <td>{{$customer->address}}</td>
       <td>{{$customer->contactno}}</td>
        <td>{{$customer->mailid}}</td>
       {{-- <td>{{$customer->active ? "Active" : "Inactive"}}</td>  --}}
        <td>{{$customer->active }}</td> 
        {{-- <td>{{$customer->company_id}} </td>   --}}
        <td> {{ optional($customer->company)->cpyname }} </td> 
      <td> @if ($customer->image)
          <img src="{{asset('storage/'.$customer->image)}}" alt="" class="img-thumbnail" width="50" height="50" >     
            @endif
        </td>
      </tr>  

 @endforeach
 
 </table>
 </div> 
 {{-- <div class="col-12 d-flex justify-content-center pt-5">
    {{$customers->links()}}
 </div>   --}}
 </div>
</div> 
 @endsection
 





