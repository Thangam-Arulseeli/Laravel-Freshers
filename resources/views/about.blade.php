{{-- <h3> This is my about page </h3>  --}}

{{-- @extends('layouts.app') --}}
@extends('layout')
    @section('content')
        @section('title')
            About Page of Briskaline
        @endsection
        <div class="container" >
        <h1 align="center"> About Page </h1>
        <p id="ps1"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sunt! Illo expedita ducimus debitis, dolores, deserunt quae veniam nemo nulla suscipit velit ut quis minus natus consequatur aspernatur, adipisci excepturi. </p>
        <p id="ps2"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nisi sequi nihil, delectus totam velit quo numquam dicta temporibus cumque unde, reiciendis autem dolor dolores, assumenda atque rerum eaque eos! </p>
       <center> <h3 onclick="popup"> Company Details </h3>
        <img src="https://chandigarhmetro.com/wp-content/uploads/2020/02/how-to-create-perfect-image.jpg" width="300" height="300" /> </center>
        <p id="mycss"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus veritatis nostrum, adipisci illum officia tempore deserunt eos dolores fuga quidem eum et? Earum veniam assumenda dolor, deleniti molestias dolorem minus.
    </div>
@endsection