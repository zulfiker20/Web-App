@extends('layouts.app')
@section('title', $meta_title ?? 'ArticleView - Admin')
@section('content')
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4>View Post</h4>
        </div>

        <div class="card-body">
            <!-- Title -->
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ $article->title }}" disabled>
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label class="form-label">Image</label>
                @if ($article->image)
                    <div class="mb-2">
                        <img class="img-fluid" style="max-width: 200px;" src="{{ asset($article->image) }}"
                            alt="Article Image">
                    </div>
                @endif
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" value="{{ $article->category->title ?? '' }}" disabled>
            </div>

            <!-- Author -->
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" value="{{ $article->author ?? '' }}" disabled>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea style="height: 100px;" name="description" class="form-control" id="summernote" disabled>{{ old('description', preg_replace('/<[^>]+>/', "\n", $article->description ?? '')) }}</textarea>
            </div>
        </div>

        <div class="card-footer text-end">
            <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
