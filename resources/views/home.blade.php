@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
      @can('update-post',$post)
      <h1>{{$post->title}}</h1>
      <p>{{$post->description}}</p>
      <b> Authot: {{$post->user->name}}</b>

      <a href='{{url ("post/$post->id/update")}}'> editar</a>
      <hr>
      @endcan
    @empty
      <p>   Nenhum post foi emcontrado</p>
    @endforelse
</div>
@endsection
