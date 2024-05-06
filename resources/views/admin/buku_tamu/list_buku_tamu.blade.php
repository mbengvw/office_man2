@extends('admin.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h2 class="mb-4">Buku Tamu</h2>
            <div class="table-responsive">
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Tujuan</th>
                            <th>Keperluan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const app_path = {
            base_path: "{{ route('admin.index') }}",
        };
    </script>

    <script src="{{ asset('js/buku_tamu_admin.js') }}" defer></script>
@endsection
