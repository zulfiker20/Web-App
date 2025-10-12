@extends('layouts.app')
@section('title', $meta_title ?? 'Teams - Admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Teams</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Team</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end align-items-center p-3">
                        <a href="{{ route('admin.teams.create') }}" class="btn btn-primary rounded-0">
                            <i class="fa fa-plus"></i> Add Team
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                                <tr>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->designation }}</td>
                                    <td>
                                        @if ($team->image)
                                            <img style="width: 50px" src="{{ asset($team->image) }}"
                                                alt="{{ $team->name }}" class="img-thumbnail" width="100">
                                        @endif
                                    </td>

                                    <td>
                                        <!-- View Button -->
                                        <a href="{{ route('admin.teams.show', $team->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('admin.teams.delete', $team->id) }}" method="POST"
                                            style="display:inline-block">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
