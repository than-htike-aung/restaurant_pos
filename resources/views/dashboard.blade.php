@extends('admin.admin_master')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">Main</div>
      <div class="card-body ">
       <div class="row">
         <div class="col-sm-4">
           <a href="/management">
            <h4>Management</h4>
           <img src="{{asset('image/time.png')}}" width="50px" alt="">
          </a>
         </div>
         <div class="col-sm-4">
          <a href="/cashier">
            <h4>Cashier</h4>
          <img src="{{asset('image/cashier.png')}}" width="50px" alt="">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="/report">
            <h4>Report</h4>
            <img src="{{asset('image/report.png')}}" width="50px" alt="">
          </a>
        </div>
       </div>
      </div>
    </div>
  </div>
</div>

@endsection