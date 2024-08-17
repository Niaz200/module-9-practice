@extends('layout.app')

@section('title', 'Projects')

@section('content')
    <div>
        <h1>Projects</h1>
        @foreach($projts as $project)
            <div class="project-card">
                <h2>{{ $project['title'] }}</h2>
                <p>{{ $project['description'] }}</p>
                
            </div>
        @endforeach
    </div>
@endsection