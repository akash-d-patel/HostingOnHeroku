@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Dashboard</h1>
                <div>
                    <button type="reset" onclick="window.location.href='{{ route('products.index') }}'" class="btn btn-primary">Products</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
