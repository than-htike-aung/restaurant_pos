@extends('admin.admin_master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8 ">
            <i class="fas fa-bars"></i> Create a Menu
            <hr>
            @include('partial.error')
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{route('menu.store')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="menuName" class="form-label">Menu Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Menu...">
                          
                        </div>

                        <label for="menuPrice" class="form-label">Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" name="price" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                          </div>
                        
                          <label for="MenuImage">Image</label>
                          <div class="input-group mb-3">
                            <input type="file" class="form-control" name="image" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                          </div>

                          <div class="mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description...">
                            
                          </div> 
                          <div class="mb-3">
                            <label for="Category" class="form-label">Category</label>
                            <select name="category_id" class="form-select" id="">
                               
                                <option value="" selected>Select Category Name</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            
                          </div>
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                      </form>
                </div>
              </div>
           
        </div>
    </div>
</div>

@endsection