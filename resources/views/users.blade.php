
@extends('layouts.main')

@section('container')

<h1 class="mb5">Users</h1>
    
    @foreach ($posts as $post)
        <article class="mb-5">

            <ul>
                <li>

                    <h2><a href="/users/{{ $post->user->username }}">{{ $post->user->name }}</h2></a>

                </li>
            </ul>
                    
        </article>    
    @endforeach 
            
@endsection
