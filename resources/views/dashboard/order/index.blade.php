@extends('dashboard.layouts.base')

@section('title')
    Order
@endsection

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>List Order</h1>
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
                            <th>ID Order</th>
                            <th>User</th>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Alamat</th>
                            <th>Metode Pengiriman</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->user->username }}</td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->product->category->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->send_method }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-toggle="modal"
                                        data-target="#editUserModal" data-id="{{ $item->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('orders.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
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
                    <h5 class="modal-title" id="addUserModalLabel">Add Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('orders.store') }}" method="POST" class="row">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user_id">User</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    @foreach ($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_id">Produk</label>
                                <select name="product_id" id="product_id" class="form-control">
                                    @foreach ($products as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jumlah</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="send_method">Metode Pengiriman</label>
                                <input type="text" class="form-control" id="send_method" name="send_method" required>
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
                    <h5 class="modal-title" id="editUserModalLabel">Edit Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" class="row" id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user_id">User</label>
                                <select name="user_id" id="user_idEdit" class="form-control">
                                    @foreach ($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_id">Produk</label>
                                <select name="product_id" id="product_idEdit" class="form-control">
                                    @foreach ($products as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select name="category_id" id="category_idEdit" class="form-control">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jumlah</label>
                                <input type="text" class="form-control" id="quantityEdit" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="text" class="form-control" id="priceEdit" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="addressEdit" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="send_method">Metode Pengiriman</label>
                                <input type="text" class="form-control" id="send_methodEdit" name="send_method" required>
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
    <script src="{{ asset('js/order.js') }}"></script>
@endsection
