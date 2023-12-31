@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Edit Data Pelanggaran</h1>
        <div class="card mt-lg-6">
            <div class="card-body">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="required fs-6 fw-bold mb-2">Skala Pelanggaran</label>
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Pelanggaran" name="target_assign">
                        <option value="">Select pelanggaran...</option>
                        <option value="1">Ringan</option>
                        <option value="2">Sedang</option>
                        <option value="3">Berat</option>
                    </select>
                </div>
                <div class="d-flex flex-column mb-7 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">Keterangan Pelanggaran</span>
                    </label>
                    <!--end::Label-->
                    <div class="form-floating">
                        <textarea class="form-control form-control-solid" placeholder="Keterangan Pelanggaran" id="floatingTextarea2" style="height: 100px"></textarea>
                      </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button class="btn btn-danger">Batal</button>
                    <button class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
