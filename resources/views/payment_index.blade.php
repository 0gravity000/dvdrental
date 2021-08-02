@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">customer_id</th>
          <th scope="col">staff_id</th>
          <th scope="col">rental_id</th>
          <th scope="col">amount</th>
          <th scope="col">payment_date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($payments as $payment)
        <tr>
          <th scope="row">{{ $payment->id }}</th>
          <td>{{ $payment->customer_id }}</td>
          <td>{{ $payment->staff_id }}</td>
          <td>{{ $payment->rental_id }}</td>
          <td>{{ $payment->amount }}</td>
          <td>{{ $payment->payment_date }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection