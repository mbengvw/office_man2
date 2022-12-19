@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-xs-6">
            <div class="container mt-5">
                <h2 class="mb-4">Rekap Kuisioner Kepuasan Pelayanan</h2>
                <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 20%">Nama</th>
                                <th style="width: 5%">Usia</th>
                                <th style="width: 15%">Pendidikan</th>
                                <th style="width: 10%">Pekerjaan</th>
                                <th style="width: 10%">Tingkat Kepuasan (%)</th>
                                <th style="width: 35%">Saran</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection

@section('script')
    <script>
        const app_path = {
            base_path: "{{ route('admin.index') }}",
        };
    </script>

    <script src="{{ asset('js/kuisioner_admin.js') }}" defer></script>
@endsection
