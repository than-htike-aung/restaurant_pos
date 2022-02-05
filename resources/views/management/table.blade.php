@extends('admin.admin_master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @include('management.inc.sidebar')
        <div class="col-md-8 ">
            <i class="fas fa-bars"></i> Table
            <a href="{{route('table.create')}}" class="btn btn-success btn-sm float-end">
                <i class="fas-fa-plus">Create Table</i>
            </a>
            <hr>
                @include('partial.status')

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Table</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($tables as $table)
                       <tr>
                           <td>{{$table->id}}</td>
                           <td>{{$table->name}}</td>
                           <td>{{$table->status}}</td>
                           <td>
                            <a href="{{route('table.edit', $table->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i>Edit</a>
                           </td>
                           <td>
                            <form action="{{route('table.destroy', $table->id)}}" method="POST">
                                @csrf
                                @method('DElETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
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