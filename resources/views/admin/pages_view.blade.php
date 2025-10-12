@extends('layouts.app')
@section('title', $meta_title ?? 'PagesView - Admin')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h4>View Post</h4>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('admin.pages.store') }}" method="POST">
                    @csrf

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title"
                            value="{{ $pages->title ?? '' }}" disabled>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea style="height: 100px;" name="description" class="form-control" id="summernote" disabled>{{ old('description', preg_replace('/<[^>]+>/', "\n", $pages->description ?? '')) }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
            </div>

            <!-- Card Footer -->
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success">Save Post</button>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection
