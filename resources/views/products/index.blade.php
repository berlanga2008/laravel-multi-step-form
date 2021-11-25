@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Product</div>

                <div class="card-body">

                    <a href="{{ route('products.create.step.one') }}" class="btn btn-primary pull-right">Create Product</a>

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
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->nombre}}</td>
                                <td>{{$product->email}}</td>
                                <td>{{$product->telefono}}</td>
                                <td>{{$product->pais}}</td>
                                <td>{{$product->status ? 'Active' : 'DeActive'}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
