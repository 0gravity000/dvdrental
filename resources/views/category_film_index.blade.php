@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">film_id</th>
          <th scope="col">category_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category_films as $category_film)
        <tr>
          <td>{{ $category_film->film_id }}</td>
          <td>{{ $category_film->category_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection