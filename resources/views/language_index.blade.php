@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($languages as $language)
        <tr>
          <th scope="row">{{ $language->id }}</th>
          <td>{{ $language->name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection