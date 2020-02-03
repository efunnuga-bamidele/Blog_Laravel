@extends('layouts.app')


@section('content')

  <div class="card card-default">
      <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Image
                </th>

                <th>
                    Title
                </th>

                <th>
                    Restore
                </th>
                <th>
                    Destroy
                </th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
                        <img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></<img>
                    </td>
                    <td>
                        {{$post->title}}
                    </td>


                    <td>
                    <a href="{{route('post.delete',['id'=> $post->id])}}" class="btn btn-success btn-sm">Restore</a>
                    </td>
                    <td>
                        <a href="{{route('post.destroy',['id'=> $post->id])}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
  </div>

@stop
