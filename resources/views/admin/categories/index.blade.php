@extends('layouts.app')


@section('content')

  <div class="card card-default">
      <div class="card-header">
          Categories
      </div>
      <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Sn
                </th>
                <th>
                    Category name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
            </thead>
            <tbody>
                @if ($categories->count() > 0)

                @foreach ($categories as $category)
                <tr>
                    <td>
                        {{$category->id}}
                    </td>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                    <a href="{{route('category.delete',['id'=> $category->id])}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

                @else
                <tr>
                   <th colspan="5" class="text-center">No categories yet.</th>
                </tr>
             @endif
            </tbody>
        </table>
      </div>
  </div>

@stop
