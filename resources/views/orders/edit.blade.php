@extends('layouts.app')

@section('content')

<div class="container-fullwidth mx-5 mt-4">
  <form method="POST" action="{{route('orders.update',['order' => $order->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label >order user name</label>
      <input name="order_user_name" value="{{$order->order_user_name}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label >delivering address</label>
      <input name="delivering_address"  value="{{$order->delivering_address}}"type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label >doctor name</label>
      <input name="doctor_name" value="{{$order->doctor_name}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label >is insured</label>
      <input name="is_insured" value="{{$order->is_insured}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label >status</label>
      <input name="status" value="{{$order->status}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label >creator type</label>
      <input name="creator_type" value="{{$order->creator_type}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label >assigned  pharmacy name</label>
      <input name="assigned_pharmacy_name" value="{{$order->assigned_pharmacy_name}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
      <label >Actions</label>
      <input name="Actions" type="text" value="{{$order->Actions}}" class="form-control" aria-describedby="emailHelp">
    </div>

    <button type="submit"  class="btn btn-success">Create</button>
  </form>
</div>
@endsection

















