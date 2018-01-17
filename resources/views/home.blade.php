@extends('frontend_layout')

@section('css')
<link href="/css/home.css" rel="stylesheet" type"text/css">
@endsection()

@section ('content')
    <div class="row">

    @foreach($products as $product)    
    <div class="col-md-3">
            <div class="product-item-container">
                <img class="product-item-images" src="/img/hmprod.jpg"/>
                <div class="product-item-description">
                    <p>{{$product->name}}</p>
                    <p>RP {{$product->price}}</p>
                    <p>Discount {{$product->discount}}%</p>
                </div>
                <div class="product-item-cta">
                    <button class"btn btn-primary beli-cta" data-id="{{$product->id}}">Beli</buttom>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section ('js')
    
    <script>
        $(".beli-cta").on("click", function(event){
            var el = event.target
            var id = $(el).data('id');
            alert("tambah cart :"+id);

            $.post('/cart/add-content',
            {id:id},function(){
            refreshCart();
            })
        });

    </script>
@endsection
