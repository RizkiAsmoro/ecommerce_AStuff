@extends('frontend_layout')

@select('content')
<div class="row">
    <div calss="col-md-6">
    <table class="table table-bordered">
    <tr>
        <th>nama Barang</th>
        <th>Harga Barang</th>
    </tr>
    @foreach($productSelected as $product)
    <tr>
        <th>{{$product->name}}</th>
        <th>{{$qty[$product->id]}}</th>
        <th>{{$product->price}}</th>
    </tr>
@endforeach
    </table>
    <div>
        Total: {{$total}}
    </div>
    <div>
        <a class="btn btn-primary" href="#">Checkout</button>>
    </div>
</div>
@endsection
