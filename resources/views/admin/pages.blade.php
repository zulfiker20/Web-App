@extends('layouts.app')
@section('title', $meta_title ?? 'Pages - Admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pages</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pages</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end align-items-center p-3">
                        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary rounded-0">
                            <i class="fa fa-plus"></i> Add Page
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
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>
                                    <td>{{ $page->title }}</td>


                                    <td>
                                        <!-- View Button -->
                                        <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('admin.pages.delete', $page->id) }}" method="POST"
                                            style="display:inline-block">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure?')">
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
