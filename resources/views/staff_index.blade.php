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
        @foreach ($staffs as $staff)
        <tr>
          <th scope="row">{{ $staff->id }}</th>
          <td>{{ $staff->first_name }}</td>
          <td>{{ $staff->last_name }}</td>
          <td>{{ $staff->address_id }}</td>
          <td>{{ $staff->email }}</td>
          <td>{{ $staff->store_id }}</td>
          <td>{{ $staff->active }}</td>
          <td>{{ $staff->username }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection