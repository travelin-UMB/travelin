@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit user {{ $item->name }}</h1>
      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('user.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $item->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $item->email }}">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" class="form-control" name="phone" placeholder="phone" value="{{ $item->phone }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Ubah
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection