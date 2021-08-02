@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">language_id</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($films as $film)
          <tr>
            <th scope="row">{{ $film->id }}</th>
            <td>{{ $film->title }}</td>
            <td>{{ $film->description }}</td>
            <td>{{ $film->language_id }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection