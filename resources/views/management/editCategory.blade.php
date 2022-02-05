@extends('admin.admin_master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8 ">
            <i class="fas fa-bars"></i> Edit a Category
            <hr>
            @include('partial.error')
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{route('category.update', $category->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="categoryName" class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="name" value="{{$category->name}}">
                          {{-- @error('name')
                                <span class="text-danger">{{$message}}</span>  
                            @enderror --}}
                        </div>
                        
                        <button type="submit" class="btn btn-info btn-sm">Update</button>
                      </form>
                </div>
              </div>
           
        </div>
    </div>
</div>

@endsection