@extends('layouts.default')

@section('pageTitle','Prodotti')

@section('mainContent')

    <section class="container">
        <h1>Prodotti</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Peso</th>
                <th scope="col">Cottura</th>
                <th scope="col">Visualizza </th>
                <th scope="col">Modifica</th>
                <th scope="col">Cancella</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($prodotti as $prodotto)
                    <tr>
                        <td>{{$prodotto->id}}</td>
                        <td>{{$prodotto->title}}</td>
                        <td>{{$prodotto->type}}</td>
                        <td>{{$prodotto->weight}}</td>
                        <td>{{$prodotto->cooking_time}}</td>
                        <td><a href="{{route('products.show',$prodotto->id)}}" class="btn btn-info">Visualizza</a></td>
                        <td><a href="{{route('products.edit',$prodotto->id)}}" class="btn btn-warning">Modifica</a></td>
                        <td>
                            <form action="{{route('products.destroy',$prodotto->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </section>

@endsection
