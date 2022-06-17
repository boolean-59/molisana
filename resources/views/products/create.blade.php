@extends('layouts.default')

@section('pageTitle','Nuovo prodotto')

@section('mainContent')

<section class="container">
    <h1>Inserisci prodotto</h1>

    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" aria-describedby="title"  name="title" placeholder="Insert title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label" for="type">Select type:</label>
          <select class="form-control" name="type" id="type">
            <option value="lunga">Lunga</option>
            <option value="corta">Corta</option>
            <option value="cortissima">Cortissima</option>
          </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image Url</label>
            <input type="text" class="form-control" id="image" aria-describedby="image"  name="image" placeholder="Insert image">
        </div>
        <div class="mb-3">
            <label for="cooking_time" class="form-label">Cooking time in min.</label>
            <input type="number" class="form-control" id="cooking_time" aria-describedby="cooking_time"  name="cooking_time"  min="1" max="60">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight in gr.</label>
            <input type="number" class="form-control" id="weight"  name="weight"  min="1" max="2000">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </section>

@endsection
