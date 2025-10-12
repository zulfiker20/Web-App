@extends('layouts.app')
@section('title', $meta_title ?? 'ArticleEdit - Admin')
@section('content')
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4>Edit Post</h4>
        </div>

        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $article->title) }}">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <!-- Current Image -->
                    @if ($article->image)
                        <div class="mb-2">
                            <img src="{{ asset($article->image) }}" alt="Current Image" style="max-width: 200px;">
                        </div>
                    @endif

                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="summernote">{{ old('description', $article->description) }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success">Update Post</button>
                <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                placeholder: 'Write your content here...'
            });
        });
    </script>
@endsection
