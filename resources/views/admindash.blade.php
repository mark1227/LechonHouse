@extends('home')
@section('displayDash')


<div class="displays">
        <div class="imageholder">
            <input type="label" class ="pictureHolder"></input>
        </div>
        <div class="row align-items-center">
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Profile</button>
            </div>
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Orders</button>
            </div>
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Cart</button>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Payment</button>
            </div>
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">History</button>
            </div>
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Notification</button>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Manage</button>
            </div>
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Reports</button>
            </div>
            <div class="col-xl">
              <button type="button" class="btn btn-info" id="buttons">Blacklists</button>
            </div>
        </div>
        
        
        
</div>


@endsection