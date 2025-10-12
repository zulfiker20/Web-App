@extends('layouts.app')
@section('title', $meta_title ?? 'TeamsView - Admin')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg">
            <!-- Card Header -->
            <div class="card-header bg-primary text-white">
                <h4>View Team Member</h4>
            </div>

            <!-- Card Body -->
            <div class="card-body col-md-6 justify-content-center">
                <form>
                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $team->name }}" disabled>
                    </div>

                    <!-- Designation -->
                    <div class="mb-3">
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" value="{{ $team->designation }}"
                            disabled>
                    </div>

                    <!-- Facebook -->
                    <div class="mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="{{ $team->facebook }}" disabled>
                    </div>
                    <!-- Twitter -->
                    <div class="mb-3">
                        <label class="form-label">Twitter</label>
                        <input type="text" name="twitter" class="form-control" value="{{ $team->twitter }}" disabled>
                    </div>

                    <!-- Instagram -->
                    <div class="mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" name="instagram" class="form-control" value="{{ $team->instagram }}" disabled>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        @if ($team->image)
                            <div class="mb-2">
                                <img class="img-fluid" style="max-width: 200px;" src="{{ asset($team->image) }}"
                                    alt="Team Image">
                            </div>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Back Button -->
            <div class="card-footer text-end">
                <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
