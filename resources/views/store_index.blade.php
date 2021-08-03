@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">manager_staff_id</th>
          <th scope="col">address_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($stores as $store)
        <tr>
          <th scope="row">{{ $store->id }}</th>
          <td>{{ $store->manager_staff_id }}</td>
          <td>{{ $store->address_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection