@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Reservation</h1>
        </div>


        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama</th>
                                <th>Travel Paket</th>
                                <th>Participant</th>
                                <th>Price</th>
                                <th>URL</th>
                                <th>Note</th>
                                <th>Travel Date</th>
                                <th>Status</th>
                                <th>Bukti Bayar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @forelse ($items as $item)
                            <?php $i++?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->travel_paket}}</td>
                                    <td>{{ $item->participant_count }}</td>
                                    <td>${{ $item->travel_price }}</td>
                                    <td>{{ $item->travel_url }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>{{ $item->travel_date }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->buktibayar }}</td>
                                    <td>
                                        <a href="{{ route('reservation.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('reservation.destroy', $item->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->
@endsection
