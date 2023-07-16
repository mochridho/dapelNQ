@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Edit Data User</h1>
        <div class="card mt-lg-6">
            <div class="card-body">
                <div class="row mt-5">
                    <div class="row mt-5">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Rule</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Rule"
                                name="card_name" />
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Username</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Username"
                                name="card_name" />
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Password</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Pasword"
                                name="card_name" />
                        </div>
                    </div>
                <div class="mt-5 d-flex justify-content-end w-100 gap-2">
                    <button class="btn btn-danger">Batal</button>
                    <button class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
