@extends('layouts.Main')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4">✍️ Add New Blog Post</h2>

                        <form action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Title -->
                            <div class="mb-4">
                                <label for="title" class="form-label fw-semibold">Title</label>
                                <input type="text"
                                       class="form-control form-control-lg"
                                       name="title"
                                       id="title"
                                       placeholder="Enter your post title"
                                       required>
                            </div>

                            <!-- Description -->
                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">Description</label>
                                <textarea class="form-control"
                                          name="description"
                                          id="content"
                                          rows="8"
                                          placeholder="Enter post description"
                                          required></textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-4">
                                <label for="image" class="form-label fw-semibold">Upload Image</label>
                                <input class="form-control" type="file" name="image" id="image" accept="image/*" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg py-2">
                                    <i class="bi bi-upload me-2"></i> Publish Post
                                </button>
                            </div>
                        </form>

                        <!-- Back Button -->
                        <div class="text-center mt-4">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                                ← Back
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
