
@extends('home')
@section('displayDash')


<div class="displays">
        <div class="imageholder">
            <input type="label" class ="pictureHolder"></input>
        </div>
        <div class="row align-items-center">
            <div class="col-xl">
              <a href = "{{ url('/profile') }}">
              <button type="button" class="btn btn-info" id="buttons">Profile</button>
              </a>
            </div>
            <div class="col-xl">
              <a href = "{{ url('/orders') }}">
              <button type="button" class="btn btn-info" id="buttons">Orders</button>
              </a>
            </div>
            <div class="col-xl">
              <a href = "{{ url('/cart') }}">
              <button type="button" class="btn btn-info" id="buttons">Cart</button>
              </a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl">
              <a href = "{{ url('/payment') }}">
              <button type="button" class="btn btn-info" id="buttons">Payment</button>
              </a>
            </div>
            <div class="col-xl">
              <a href = "{{ url('/history') }}">
              <button type="button" class="btn btn-info" id="buttons">History</button>
              </a>
            </div>
            <div class="col-xl">
              <a href = "{{ url('/notification') }}">
              <button type="button" class="btn btn-info" id="buttons">Notification</button>
              </a>
            </div>
        </div>
        
        
        
</div>


@endsection