@extends('layouts.app')


@section('content')

  <div class="card card-default">
      <div class="card-header">
          Tags
      </div>
      <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Sn
                </th>
                <th>
                    Tag name
                </th>
                <th>
                    Editing
                </th>
                <th>
                    Deleting
                </th>
            </thead>
            <tbody>
                @if ($tags->count() > 0)

                @foreach ($tags as $tag)
                <tr>
                    <td>
                        {{$tag->id}}
                    </td>
                    <td>
                        {{$tag->tag}}
                    </td>
                    <td>
                    <a href="{{route('tag.edit', ['id' => $tag->id])}}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                    <td>
                    <a href="{{route('tag.delete',['id'=> $tag->id])}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

                @else
                <tr>
                   <th colspan="5" class="text-center">No tags yet.</th>
                </tr>
             @endif
            </tbody>
        </table>
      </div>
  </div>

@stop
