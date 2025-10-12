@extends('layouts.app')
@section('title', $meta_title ?? 'Banner - Admin')

@section('content')
    <div class="container mt-4">
        <h1 class="mt-4">Banner</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Banner</li>
        </ol>
        <div class="card shadow-lg">

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('admin.banner.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            placeholder="Enter title" value="{{ old('title', $banner->title ?? '') }}">
                    </div>

                    <!-- Subtitle -->
                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"
                            placeholder="Enter subtitle" value="{{ old('subtitle', $banner->subtitle ?? '') }}">
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        @if (isset($banner) && $banner->img)
                            <div class="mb-2 img-thumbnail">
                                <img src="{{ asset('uploads/' . $banner->img) }}" alt="Current Image"
                                    style="max-width: 200px; height: auto;">
                            </div>
                        @endif
                        <input type="file" name="img">
                    </div>
            </div>

            <!-- Card Footer -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
            </form>
        </div>
    </div>
@endsection
