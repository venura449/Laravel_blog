@extends('layouts.Admin')

@section('content1')
    <body>
    <nav class="navbar navbar-dark bg-dark px-4">
        <span class="navbar-brand mb-0 h1">🛠️ Admin Dashboard</span>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Manage Blog Posts</h3>
            <a href="#" class="btn btn-success">➕ Add New Post</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mastering Time Management</td>
                        <td>Learn seven proven habits to boost productivity and focus without burnout.</td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>The Beginner’s Guide to Investing</td>
                        <td>Step-by-step advice to grow wealth—even with a small budget.</td>
                        <td><span class="badge bg-warning text-dark">Draft</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mental Health Matters</td>
                        <td>Simple daily tips to reduce anxiety and build emotional strength.</td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hidden Gems in Sri Lanka</td>
                        <td>Explore waterfalls, hikes, and secret getaways away from crowds.</td>
                        <td><span class="badge bg-danger">Archived</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
@endsection
