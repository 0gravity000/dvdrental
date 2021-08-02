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
          <th scope="col">email</th>
          <th scope="col">address_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customers as $customer)
        <tr>
          <th scope="row">{{ $customer->id }}</th>
          <td>{{ $customer->first_name }}</td>
          <td>{{ $customer->last_name }}</td>
          <td>{{ $customer->email }}</td>
          <td>{{ $customer->address_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection