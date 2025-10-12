@extends('layouts.app')
@section('title', $meta_title ?? 'AboutCreate - Admin')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h4>Create Post</h4>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title"
                            value="{{ old('title') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
            </div>

            <!-- Card Footer -->
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success">Save Post</button>
                <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection
