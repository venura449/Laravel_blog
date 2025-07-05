@extends('layouts.Main')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4">Update Your Post</h2>

                        <form action="{{ Route('update',$posts->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="form-label fw-semibold">Title</label>
                                <input type="text"
                                       class="form-control form-control-lg"
                                       name="title"
                                       id="title"
                                       value="{{ $posts->title }}"
                                       placeholder="Enter your post title"
                                       required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">Description</label>
                                <textarea class="form-control"
                                          name="description"
                                          id="description"
                                          rows="10"
                                          placeholder="Enter post Description"
                                          required>{{ $posts->description }}</textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg py-2">
                                    <i class="bi bi-upload me-2"></i> Submit
                                </button>
                            </div>
                            <input type="file" name="image" accept="image/*" class="form-control">

                        </form>


                        <!-- Back Button -->
                        <div class="text-center mt-4">
                            <a href="{{url()->previous()}}" class="btn btn-outline-secondary">
                                ← Back
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
