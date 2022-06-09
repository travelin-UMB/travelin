@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Guest Book</h1>
        {{-- <a href="{{route('user.create')}}" class="btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah User
        </a> --}}
      </div>

      <div class="row">
        <div class="card-body">
          <div class="table-responsive">
            <table id="guest" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 0 ?>
                @forelse ($items as $item)
                <?php $i++?>
                    <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->phone }}</td>
                      <td>{{ $item->subject }}</td>
                      <td>{{ $item->message }}</td>
                      <td>
                        {{-- <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a> --}}
                        <form action="{{ route('guest.destroy', $item->id) }}" method="post" class="d-inline">
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
                      <td colspan="7" class="text-center">
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
@section('js')
  <script>
    $('#guest').DataTable();
  </script>
@endsection