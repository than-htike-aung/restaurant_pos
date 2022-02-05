@extends('admin.admin_master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
         @include('management.inc.sidebar')
        <div class="col-md-8 ">
            <i class="fas fa-hamburger"></i> Menu
            <a href="{{route('menu.create')}}" class="btn btn-success btn-sm float-end">
                <i class="fas-fa-plus">Create Menu</i>
            </a>
            <hr>
                @include('partial.status')

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($menus as $menu)
                      <tr>
                          <td>{{$menu->id}}</td>
                          <td>{{$menu->name}}</td>
                          <td>{{$menu->price}}</td>
                          <td>
                              <img src="{{asset('menu_images')}}/{{$menu->image}}" alt="{{$menu->name}}"
                                width="120px" height="120px" class="img-thumbnail"
                              >
                          </td>
                          <td>{{$menu->description}}</td>
                          <td>{{$menu->category->name}}</td>
                          <td><a href="{{route('menu.edit', $menu->id)}}" class="btn btn-warning">Edit</a></td>
                          <td>
                              <form action="{{route('menu.destroy', $menu->id)}}" method="POST">
                                @csrf
                                @method('DElETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                          </td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
</div>

@endsection