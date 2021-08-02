@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">first_name</th>
          <th scope="col">last_name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($actors as $actor)
        <tr>
          <th scope="row">{{ $actor->id }}</th>
          <td>{{ $actor->first_name }}</td>
          <td>{{ $actor->last_name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection