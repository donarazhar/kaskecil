@extends('layoutsberanda.default')
@section('title', 'Instansi')
@section('header-title', 'Instansi')

@section('content')
    <div class="card shadow mb-4 col-lg-6">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nama Instansi</dt>
                <dd class="col-sm-9">{{ $instansi->nama }}</dd>

                <dt class="col-sm-3">Alamat</dt>
                <dd class="col-sm-9">{{ $instansi->alamat }}</dd>
            </dl>
            <a href="" class="btn btn-primary">
                Ubah
            </a>
        </div>
    </div>
@endsection
@push('after-script')
    @include('sweetalert::alert')
@endpush
