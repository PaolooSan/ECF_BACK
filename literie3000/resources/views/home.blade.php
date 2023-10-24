@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
            <a class="btn btn-primary btn-lg" href="{{ route('products.create') }}" role="button">Ajouter un produit</a>
        </div>
    </div>
@endsection
