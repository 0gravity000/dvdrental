@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">film_id</th>
          <th scope="col">store_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Inventories as $Inventory)
        <tr>
          <th scope="row">{{ $Inventory->id }}</th>
          <td>{{ $Inventory->film_id }}</td>
          <td>{{ $Inventory->store_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection