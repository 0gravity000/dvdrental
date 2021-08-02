@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">actor_id</th>
          <th scope="col">film_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($actor_films as $actor_film)
        <tr>
          <td>{{ $actor_film->actor_id }}</td>
          <td>{{ $actor_film->film_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection