@extends('layouts.app')

@include('partials.meta_static')
@section('content')

    <div class="container">
        @foreach($blogs as $blog)
            <h2><a href={{ route('blogs.show', $blog->slug) }}>{{ $blog->title }}</a></h2>
            {!! $blog->body !!}

            @if($blog->user)
                Author: <a href="{{ route('users.show', $blog->user->name) }}">{{ $blog->user->name }}</a> | Posted: {{ $blog->created_at->diffForHUmans() }}
            @endif
            <hr>
        @endforeach
    </div>

@endsection