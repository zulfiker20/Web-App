@extends('layouts.app')
@section('title', $meta_title ?? 'Articles - Admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Articles</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Articles</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-end align-items-center p-3">
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary rounded-0">
                            <i class="fa fa-plus"></i> Add Article
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
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>
                                        @if ($article->image)
                                            <img style="width: 50px" src="{{ asset($article->image) }}"
                                                alt="{{ $article->title }}" class="img-thumbnail" width="100">
                                        @endif
                                    </td>
                                    <td>
                                        <!-- View Button -->
                                        <a href="{{ route('admin.articles.show', $article->id) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.articles.edit', $article->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('admin.articles.delete', $article->id) }}" method="POST"
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
