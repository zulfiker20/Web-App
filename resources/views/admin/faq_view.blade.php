@extends('layouts.app')
@section('title', $meta_title ?? 'FaqView - Admin')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h4>View Post</h4>
            </div>

            <!-- Card Body -->
            <div class="card-body col-md-6 justify-content-center">
                <form>
                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $faq->title }}" disabled>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3" disabled>{{ $faq->description }}</textarea>
                    </div>

                    <!-- Back Button -->
                    <div class="card-footer text-end">
                        <a href="{{ route('admin.faq.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>

            </div>
        </div>
    @endsection
