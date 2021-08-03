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
          <th scope="col">address_id</th>
          <th scope="col">email</th>
          <th scope="col">store_id</th>
          <th scope="col">active</th>
          <th scope="col">username</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Staffs as $Staff)
        <tr>
          <th scope="row">{{ $Staff->id }}</th>
          <td>{{ $Staff->first_name }}</td>
          <td>{{ $Staff->last_name }}</td>
          <td>{{ $Staff->address_id }}</td>
          <td>{{ $Staff->email }}</td>
          <td>{{ $Staff->store_id }}</td>
          <td>{{ $Staff->active }}</td>
          <td>{{ $Staff->username }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection