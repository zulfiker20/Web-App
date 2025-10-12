@extends('layouts.app')
@section('title', $meta_title ?? 'ServicesEdit - Admin')
@section('content')
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-white">
            <h4>Edit Post</h4>
        </div>

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Icon -->
                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon', $service->icon) }}">
                    @error('icon')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Sub Title -->
                <div class="mb-3">
                    <label class="form-label">Sub Title</label>
                    <input type="text" name="sub_title" class="form-control"
                        value="{{ old('sub_title', $service->sub_title) }}">
                    @error('sub_title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="summernote">{{ old('description', $service->description) }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Update Post</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                placeholder: 'Update your content here...'
            });
        });
    </script>
@endsection
