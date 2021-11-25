@extends('layout')

@section('content')
<!---
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    You are Logged In
                </div>
            </div>
        </div>
    </div>
</div>
-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Prueba ID</div>

                <div class="card-body">

                  <!--  <a href="{{ route('products.create.step.one') }}" class="btn btn-primary pull-right">Create Product</a> -->

                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">email</th>
                            <th scope="col">telefono</th>
                            <th scope="col">pais</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td><a href="/dashboard/{{$product->id}}">{{$product->nombre}}</a></td>
                                <td>{{$product->email}}</td>
                                <td>{{$product->telefono}}</td>
                                <td>{{$product->pais}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h2>Texto Inicial</h2>
                    <div>{{$product->textoIni}}</div>
                    <h2>Test {{$product->nombre}}</h2>
                    <div>{{$product->textoRedaccion}}</div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
