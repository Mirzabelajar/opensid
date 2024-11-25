@include('admin.layouts.components.asset_datatables')

@extends('admin.layouts.index')

@section('title')
    <h1>
        Detail Kepuasan
    </h1>
@endsection

@section('breadcrumb')
    <li><a href="{{ ci_route('buku_kepuasan') }}">Data Kepuasan</a></li>
    <li class="active">Detail Kepuasan</li>
@endsection

@section('content')
    @include('admin.layouts.components.notifikasi')
    <div class="box box-info">
        <div class="box-header with-border">
            <b>Pertanyaan : </b> {{ $pertanyaan }}
        </div>
        <div class="box-header with-border">
            @if (can('h'))
                <a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform', '{{ ci_route('buku_keperluan.delete') }}')" class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih"><i
                        class='fa fa-trash-o'></i> Hapus</a>
            @endif
        </div>
        {!! form_open(null, 'id="mainform" name="mainform"') !!}
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tabeldata">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="checkall" /></th>
                            <th class="padat">NO</th>
                            <th class="padat">AKSI</th>
                            <th class="padat">HARI / TANGGAL</th>
                            <th>NAMA</th>
                            <th class="padat">JAWABAN</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        </form>
    </div>

    @include('admin.layouts.components.konfirmasi_hapus')
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var TableData = $('#tabeldata').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: `{{ ci_route('buku_kepuasan/datatables_show/' . $id_pertanyaan) }}`,
                columns: [{
                        data: 'ceklist',
                        class: 'padat',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'DT_RowIndex',
                        class: 'padat',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'aksi',
                        class: 'aksi',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        searchable: true,
                        orderable: true,
                        class: 'padat'
                    },
                    {
                        data: 'tamu.nama',
                        name: 'tamu.nama',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'jawaban',
                        name: 'jawaban',
                        class: 'padat',
                        searchable: false,
                        orderable: false
                    },
                ],
                order: [
                    [3, 'asc']
                ]
            });

            if (hapus == 0) {
                TableData.column(0).visible(false);
            }

            if (ubah == 0) {
                TableData.column(2).visible(false);
            }
        });
    </script>
@endpush
