@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Reservation</h1>
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
          <form action="{{ route('reservation.update', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" value="{{ $item->user->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="travel_paket">Travel Paket</label>
                <input type="text" class="form-control" name="travel_paket" value="{{ $item->travel_paket }}" readonly>
            </div>
            <div class="form-group">
                <label for="participant_count">Participant Count</label>
                <input type="text" class="form-control" name="participant_count" value="{{ $item->participant_count }}" readonly>
            </div>
            <div class="form-group">
                <label for="travel_price">Travel Price</label>
                <input type="text" class="form-control" name="travel_price" value="{{ $item->travel_price }}" readonly>
            </div>
            <div class="form-group">
                <label for="travel_url">Travel Url</label>
                <input type="travel_url" class="form-control" name="travel_url" placeholder="travel_url" value="{{ $item->travel_url }}" readonly>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <input type="text" class="form-control" name="note" value="{{ $item->note }}" readonly>
            </div>
            <div class="form-group">
                <label for="travel_date">Travel Date</label>
                <input type="text" class="form-control" name="travel_date" value="{{ $item->travel_date }}" readonly>
            </div>
            <div class="form-group">
                <label for="status">Status</label><br>
                <select name="status">
                    <option value="0">Pending Payment</option>
                    <option value="1">Waiting Confirmation</option>
                    <option value="2">Package Active</option>
                    <option value="3">Package Non Active</option>
                    <option value="4">Package Rejected</option>
                </select>
            </div>
            <div class="form-group">
                <label for="note_rejected">Note Rejected</label>
                <input type="text" class="form-control" name="note_rejected" value="{{ $item->note_rejected }}">
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