@extends('layouts.app')
@section('title', $meta_title ?? 'ServicesView - Admin')
@section('content')
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4>View Post</h4>
        </div>

        <form>
            <div class="card-body">
                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $service->title ?? '') }}"
                        disabled>
                </div>

                <!-- Icon -->
                <div class="mb-3">
                    <label class="form-label">Icon</label>
                    <input type="text" name="icon" class="form-control"
                        value="{{ old('icon', $service->icon ?? '') }}" disabled>
                </div>

                <!-- Sub Title -->
                <div class="mb-3">
                    <label class="form-label">Sub Title</label>
                    <input type="text" name="sub_title" class="form-control"
                        value="{{ old('sub_title', $service->sub_title ?? '') }}" disabled>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea style="height: 100px;" name="description" class="form-control" id="summernote" disabled>{{ old('description', preg_replace('/<[^>]+>/', "\n", $service->description ?? '')) }}</textarea>
                </div>
            </div>

            <div class="card-footer text-end">
                <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
@endsection
