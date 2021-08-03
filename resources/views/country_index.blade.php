@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">country</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($countries as $country)
        <tr>
          <th scope="row">{{ $country->id }}</th>
          <td>{{ $country->country }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection