@extends('layouts.app')
@section('title', $meta_title ?? 'ServicesCreate - Admin')
@section('content')
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4>Create Post</h4>
        </div>

        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Icon -->
                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon') }}">
                    @error('icon')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Sub Title -->
                <div class="mb-3">
                    <label class="form-label">Sub Title</label>
                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title') }}">
                    @error('sub_title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="summernote">{{ old('description') }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success">Save Post</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200, // editor height in pixels
                placeholder: 'Write your content here...' // optional
            });
        });
    </script>
@endsection
