@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
     <h1>{{$post->title}}</h1>
      <p>{{$post->description}}</p>
      <b> Authot: {{$post->user->name}}</b>
      <hr>
    @empty
      <p>   Nenhum post foi emcontrado</p>
    @endforelse
</div>
@endsection
