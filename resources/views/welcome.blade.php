@extends('layouts.Main')

@section('content')
    <!-- Main Content -->
    <style>
        a{
            text-decoration: none !important;
        }


    </style>
    <main class="container my-5">
        <div class="row">
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

            <!-- Blog Posts -->
            <div class="col-md-8 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="mb-0">📌 Recent Posts</h3>
                    <a href="{{Route('home')}}" class="btn btn-success btn-sm">
                        Add New Post
                    </a>
                </div>

                @forelse($posts as $p)
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">🚀 {{$p->title}}</h5>
                            <small class="text-muted">
                                ✍️ By <strong>{{ $p->user->name ?? 'Unknown Author' }}</strong>
                                • {{ date('d-M-Y', strtotime($p->created_at)) }}
                            </small>
                            <p class="card-text">{{ $p->description }}</p>
                            <a href="{{route('showpost',$p->id)}}" class="btn btn-outline-primary btn-sm">Read More</a>
                        </div>
                    </div>
                @empty
                    <h6>No Posts Avaliable</h6>
                @endforelse

            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="bg-white p-4 shadow-sm rounded mb-4">
                    <h4 class="mb-3">📂 Categories</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Tech</li>
                        <li class="list-group-item">Lifestyle</li>
                        <li class="list-group-item">Education</li>
                        <li class="list-group-item">Travel</li>
                    </ul>
                </div>

                <div class="bg-white p-4 shadow-sm rounded">
                    <h4 class="mb-3">👋 About</h4>
                    <p class="mb-0">This is a simple, elegant blog built with Bootstrap. You can customize it for your personal or professional needs.</p>
                </div>
                @auth
                <div class="bg-white p-4 shadow-sm rounded">
                    <h4 class="mb-3">My Operations</h4>
                    <ul>
                        <a href="{{route('viewspec')}}"><li class="list-unstyled">My Posts</li></a>
                    </ul>
                </div>
                @endauth
            </div>

        </div>
    </main>
@endsection
