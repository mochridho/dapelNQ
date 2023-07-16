@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Edit Data Santri</h1>
        <div class="card mt-lg-6">
            <div class="card-body">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">NIS</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="NIS"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Nama Santri</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Nama Santri"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Tanggal Lahir</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Tanggal Lahir"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Alamat</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Alamat"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Kamar</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Kamar"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Pendidikan</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Pendidikan"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Nama Wali</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Nama Wali"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">No HP</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="No Hp"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
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
