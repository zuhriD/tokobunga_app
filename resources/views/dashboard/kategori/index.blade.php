@extends('dashboard.layouts.base')

@section('title')
    Kategori
@endsection

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>List Kategori Produk</h1>
            </div>
            @if (session('success'))
                <div class="col-sm-12 mt-2">
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @elseif(session('error'))
                <div class="col-sm-12 mt-2">
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

            {{-- buat tabel list project --}}
            <div class="col-sm-12">
                <div class="d-flex justify-content-between mt-2">
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addUserModal">Add</a>
                </div>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID Kategori Produk</th>
                            <th>Kategori Produk</th>
                            <th>Image</th>
                            <th>Banner</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                {{-- image --}}
                                <td><img src="{{ asset('assets/img/' . $item->image) }}" alt="image" width="100px"></td>
                                {{-- banner --}}
                                <td><img src="{{ asset('assets/img/' . $item->banner) }}" alt="banner" width="100px">
                                </td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-toggle="modal"
                                        data-target="#editUserModal" data-id="{{ $item->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('users.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure to delete this data?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- /.container-fluid -->

    {{-- Modal Add --}}
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('categories.store') }}" method="POST" class="row"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control form-control-solid" id="imageAdd" name="image">
                                <img id="imageAdd-preview" src="" alt="Preview"
                                    style="max-width: 100%; max-height: 200px;">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="banner">Banner</label>
                                <input type="file" class="form-control form-control-solid" id="bannerAdd" name="banner">
                                <img id="bannerAdd-preview" src="" alt="Preview"
                                    style="max-width: 100%; max-height: 200px;">
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal edit --}}
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" class="row" id="editForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="nameEdit" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control form-control-solid" id="imageEdit"
                                    name="image">
                                <img id="image-preview" src="" alt="Preview"
                                    style="max-width: 100%; max-height: 200px;">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Banner</label>
                                <input type="file" class="form-control form-control-solid" id="bannerEdit"
                                    name="banner">
                                <img id="banner-preview" src="" alt="Preview"
                                    style="max-width: 100%; max-height: 200px;">
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/category.js') }}"></script>
@endsection
