@extends('layouts.app')
@section('title', $meta_title ?? 'PagesEdit - Admin')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h4>Edit Post</h4>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('admin.pages.update', $pages->id) }}" method="POST">
                    @csrf

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title"
                            value="{{ $pages->title ?? '' }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea style="height: 100px;" name="description" class="form-control" id="summernote">{{ old('description', $pages->description ?? '') }}</textarea>
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
    <script>
        document.getElementById('title').addEventListener('keyup', function() {
            let val = this.value;

            let slug = val.toLowerCase()
                .replace(/ /g, '-')
                .replace(/[^\w\-অ-হ]/g, '');

            document.getElementById('slug').value = slug;
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200
            });
        });
    </script>
@endsection
