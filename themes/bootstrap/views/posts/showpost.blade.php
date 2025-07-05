@extends('layouts.Main')

@section('content')
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <!-- Blog Post -->
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
                    <!-- Display Image -->
                    @if($posts->image)
                        <div class="bg-dark text-center">
                            <img src="{{ asset('images/' . $posts->image) }}"
                                 alt="Post Image"
                                 class="img-fluid"
                                 style="max-height: 450px; object-fit: cover; width: 100%;">
                        </div>
                    @endif

                    <div class="card-body px-5 py-4">
                        <h1 class="card-title fw-bold mb-3">{{ $posts->title }}</h1>
                        <div class="mb-3">
                            <span class="badge bg-primary rounded-pill text-light">
                                📅 {{ $posts->created_at->format('F j, Y') }}
                            </span>
                            <span class="text-muted ms-2">{{ $posts->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="lead text-secondary" style="line-height: 1.8;">{{ $posts->description }}</p>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="text-center">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-dark rounded-pill px-4 py-2 shadow-sm">
                        ← Back to Posts
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection
