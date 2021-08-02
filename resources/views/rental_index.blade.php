@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">rental_data</th>
          <th scope="col">inventory_id</th>
          <th scope="col">customer_id</th>
          <th scope="col">return_date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rentals as $rental)
        <tr>
          <th scope="row">{{ $rental->id }}</th>
          <td>{{ $rental->rental_date }}</td>
          <td>{{ $rental->inventory_id }}</td>
          <td>{{ $rental->customer_id }}</td>
          <td>{{ $rental->return_date }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection