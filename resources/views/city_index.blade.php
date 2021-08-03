@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">city</th>
          <th scope="col">country_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cities as $city)
        <tr>
          <th scope="row">{{ $city->id }}</th>
          <td>{{ $city->city }}</td>
          <td>{{ $city->country_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection