@extends('layouts.master')
@section('title')
    Laravel Shopping cart
@endsection
@section('style')
@endsection
@section('content')
    @foreach($products -> Chunk(3) as$productChunk)
        <div class="row">
            @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagepath}}" alt="">
                    <div class="caption">
                        <h3> {{$product->title}}</h3>
                        <p class="description">
                            {{$product->description}}
                        </p>
                        <div class="clearfix">
                            <a href="" class="pull-left price">{{$product->price}}</a>
                            <a href="" class="btn btn-success pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
    </div>
    @endforeach

@endsection


