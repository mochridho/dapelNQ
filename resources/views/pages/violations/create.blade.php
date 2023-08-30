@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Tambah Data Pelanggaran</h1>
        <div class="card mt-lg-6">
            <form action="{{ route('master.violations.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Kategori Pelanggaran</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                            data-placeholder="Select kategori pelanggaran..." name="kategori_pelanggaran">
                            <option value="">Select kategori pelanggaran...</option>
                            <option value="ringan">ringan</option>
                            <option value="berat">berat</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Keterangan Pelanggaran</span>
                        </label>
                        <!--end::Label-->
                        <div class="form-floating">
                            <textarea name="keterangan_pelanggaran" class="form-control form-control-solid" placeholder="Keterangan"
                                id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
