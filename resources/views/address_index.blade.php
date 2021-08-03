@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">address</th>
          <th scope="col">address2</th>
          <th scope="col">district</th>
          <th scope="col">city_id</th>
          <th scope="col">postal_code</th>
          <th scope="col">phone</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($addresses as $address)
        <tr>
          <th scope="row">{{ $address->id }}</th>
          <td>{{ $address->address }}</td>
          <td>{{ $address->address2 }}</td>
          <td>{{ $address->district }}</td>
          <td>{{ $address->city_id }}</td>
          <td>{{ $address->postal_code }}</td>
          <td>{{ $address->phone }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection