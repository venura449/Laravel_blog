@extends('layouts.Main')

@section('content')
    <div class="container py-5">

        {{-- Alert Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h2 class="mb-4">📚 Posts by Venura</h2>
        @forelse($posts as $p)
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{$p->title}}</h5>
                    <small class="text-muted">{{$p->created_at->diffForHumans()}}</small>
                    <p class="card-text mt-2">{{$p->description}}</p>
                    <a href="" class="btn btn-outline-primary btn-sm">Read More</a>
                    <a href="{{route('edit',$p->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                    <a href="{{route('delete',$p->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
                </div>
            </div>
        @empty
            <h3>No Posts</h3>
        @endforelse

        <!-- Back Button -->
        <div class="text-center mt-4">
            <a href="{{url()->previous()}}" class="btn btn-outline-secondary">← Back</a>
        </div>
    </div>
@endsection
