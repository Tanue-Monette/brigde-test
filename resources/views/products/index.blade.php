@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                </div>
                <div class="pull-right">
                    <h1><a href="/create-product">+</a></h1>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="py-5">
            <div class="row">
                @if (\Session::has('danger'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('danger') !!}</li>
                        </ul>
                    </div>
                @elseif(\Session::has('succes'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                @foreach ($products as $product)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn" style=" margin-left: 200px;">...</button>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="products-edit/{{ $product->id }}">Edit</a>
                                        <a href="product-delete/{{ $product->id  }}">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <img class="card-img-top" src="/Image/{{ $product->image }}"
                                style="height: 100px; width: 150px;" alt="">
                            <div class="card-body">
                                <h3>Name: {{ $product->name }}</h3>
                                <P>Price: {{ $product->price }}</P>
                                <p>Details: {{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <script>
        /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
@endsection
