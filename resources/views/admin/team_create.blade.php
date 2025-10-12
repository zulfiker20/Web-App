@extends('layouts.app')
@section('title', $meta_title ?? 'TeamsCreate - Admin')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h4>Create Post</h4>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name"
                            value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Designation -->
                    <div class="mb-3">
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" placeholder="Enter designation"
                            value="{{ old('designation') }}">
                        @error('designation')
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
                    <!-- Facebook -->
                    <div class="mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook URL"
                            value="{{ old('facebook') }}">
                        @error('facebook')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Twitter -->
                    <div class="mb-3">
                        <label class="form-label">Twitter</label>
                        <input type="text" name="twitter" class="form-control" placeholder="Enter Twitter URL"
                            value="{{ old('twitter') }}">
                        @error('twitter')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Instagram -->
                    <div class="mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" name="instagram" class="form-control" placeholder="Enter Instagram URL"
                            value="{{ old('instagram') }}">
                        @error('instagram')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

            </div>

            <!-- Card Footer -->
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success">Save Post</button>
                <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary">Back</a>
            </div>
            </form>
        </div>
    </div>
@endsection
