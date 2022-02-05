@extends('admin.admin_master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8 ">
            <i class="fas fa-chair"></i> Create a Table
            <hr>
            @include('partial.error')
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{route('table.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="categoryName" class="form-label">Table Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Table...">
                          {{-- @error('name')
                                <span class="text-danger">{{$message}}</span>  
                            @enderror --}}
                        </div>
                        
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                      </form>
                </div>
              </div>
           
        </div>
    </div>
</div>

@endsection