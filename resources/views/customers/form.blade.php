<div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Customer Name:</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" autocomplete="off"  value="{{old('name') ?? $customer->name}}" required>
     {{$errors->first('name')}}
    <div class="invalid-feedback">
        Please Enter the Customer Name
    </div>   <!-- Bootstrap 5 form validation for required field attribute -->
    </div>
</div>
  <div class="row mb-3">
    <label for="age" class="col-sm-2 col-form-label">Age:</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age" autocomplete="off" value="{{old('age') ?? $customer->age}}">
    {{$errors->first('age')}}
    </div>
</div>
    <div class="row mb-3">
    <label for="address" class="col-sm-2 col-form-label">Address:</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{old('address') ?? $customer->address}}">
    </div>
</div>
  <div class="row mb-3">
    <label for="contactno" class="col-sm-2 col-form-label">contact No:</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="contactno" placeholder="Enter Contact No." name="contactno" autocomplete="off" value="{{old('contactno') ?? $customer->contactno}}">
    {{$errors->first('contactno')}} 
    </div>
</div>
  <div class="row mb-3">
    <label for="mailid" class="col-sm-2 col-form-label">Mail ID:</label>
    <div class="col-sm-4">
    <input type="email" class="form-control" id="mailid" placeholder="example@gmail.com" name="mailid" autocomplete="off" 
          class="@error('mailid') is-invalid @enderror" value="{{old('mailid') ?? $customer->mailid}}">
          @error('mailid')
    <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    {{$errors->first('mailid')}}  
    </div>
</div>
<div class="row mb-3">
    <label for="active" class="col-sm-2 col-form-label">Customer Status</label>
    <div class="col-sm-4">
    <select name="active" id="active" class="form-control">
        @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
        <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}}> {{$activeOptionValue}} </option>
        
        {{-- <option value="1" {{$customer->active == 'Active' ? 'selected' : ''}}> Active </option>
        <option value="0" {{$customer->active == 'Inactive' ? 'selected' : ''}}> Inactive </option> --}}
        @endforeach 
    </select>
    </div>
</div>
<div class="row mb-3">
    <label for="companyid" class="col-sm-2 col-form-label">Company Name</label>
    <div class="col-sm-4">
    <select name="companyid" id="companyid" class="form-control">
        @foreach($companies as $company)
            <option value="{{$company->id}}"  {{$company->id == $customer->companyid ? 'selected' : ''}} > {{$company->cpyname}} </option>
        @endforeach
        </select>
    </div>
</div>
@csrf
