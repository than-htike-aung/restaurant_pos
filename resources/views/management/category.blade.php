@extends('admin.admin_master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8 ">
            <i class="fas fa-bars"></i> Category
            <a href="{{route('category.create')}}" class="btn btn-success btn-sm float-end">
                <i class="fas-fa-plus">Create Category</i>
            </a>
            <hr>
                @include('partial.status')

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i>Edit</a>
                            </td>
                            <td>
                               <form action="{{route('category.destroy', $category->id)}}" method="POST">
                                @csrf
                                @method('DElETE')
                                <input type="submit" value="Delete" class="btn btn-primary">
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
    </div>
</div>

@endsection