@extends('layouts.app')

@section('content')

@if(count($errors)>0)

<ul class="list-group ">
    @foreach ($errors->all() as $error)
        <li class="list-group-item text-danger">
            {{$error}}
        </li>
        <br>
    @endforeach
</ul>

@endif

    <div class="card card-default">
        <div class="card-header">
            Edit {{$post->title}}
        </div>

        <div class="card-body">
        <form action="{{route('post.update', ['id' => $post->id ])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}" >
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)

                         <option value="{{$category->id}}">{{$category->name}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" cols="5" rows="5">{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
