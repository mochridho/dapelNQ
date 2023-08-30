@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Laporan Data Pelanggar</h1>
        <div class="card mt-lg-6">
            <form action="{{ route('master.pelanggaran-report') }}" method="get">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">
                                    <span>Cari tanggal pelanggaran</span>
                                </label>
                                <!--end::Label-->
                                <input type="date"
                                    class="form-control form-control-solid @error('tgl_pelanggaran') is-invalid @enderror"
                                    placeholder="Tanggal Lahir" name="tgl_pelanggaran" value="{{ date('Y-m-d') }}" />
                                @error('tgl_pelanggaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-4">
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Keterangan Pelanggaran</label>
                                <input type="date"
                                    class="form-control form-control-solid @error('tgl_lahir') is-invalid @enderror"
                                    placeholder="Tanggal Lahir" name="tgl_lahir" />
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="d-flex justify-content-start w-100">
                            <button type="submit" class="btn btn-success">Cari</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
