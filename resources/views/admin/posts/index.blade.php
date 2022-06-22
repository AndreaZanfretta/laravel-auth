@extends('layouts.back')

@section('content')
<a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea</a>
<table class="table tablecolor table-striped-columns">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Data Creazione</th>
        <th scope="col">Pubblicato</th>
        <th scope="col">Modifica</th>
      </tr>
    </thead>
    @foreach ($posts as $post)
    <tbody>
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
          <td>{{$post->created_at}}</td>
          <td>{{$post->published ? 'si' : 'no'}}</td>
          <td><a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-success">Modifica</a>
            <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete">Cancella</button>
            </form>
            </td>
        </tr>
    @endforeach
  </table>
@endsection