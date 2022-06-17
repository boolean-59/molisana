@extends('layouts.default')

@section('pageTitle','Prodotto')

@section('mainContent')

    <section class="container">
        <div id="demo"></div>
        <form id="formdelete" action="{{route('products.destroy',$product->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button id="mybutton" type="submit" class="btn btn-danger">Cancella</button>
        </form>
        <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning">Modifica</a>
        <h1>{{$product->title}}</h1>
        <div>
            <img src="{{$product->image}}" alt="{{$product->title}}">
        </div>
        <p>
            {!!$product->description!!}
        </p>
    </section>



@endsection
