@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Tambah Data Santri</h1>
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
                            <input type="number" class="form-control form-control-solid" placeholder="NIS"
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
                            <input type="date" class="form-control form-control-solid" placeholder="Tanggal Lahir"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Kamar</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih Kamar" name="target_assign">
                                <option value="">Select Kamar...</option>
                                <option value="1">Ali</option>
                                <option value="2">Umar</option>
                                <option value="3">Ustman</option>
                                <option value="4">Abu Bakar</option>
                                <option value="5">Hurairah</option>
                            </select>
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
                            <label class="required fs-6 fw-bold mb-2">Pendidikan</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih Pendidikan" name="target_assign">
                                <option value="">Select Pendidikan...</option>
                                <option value="1">MI</option>
                                <option value="2">SD</option>
                                <option value="3">Stanawiyah</option>
                                <option value="4">SMP</option>
                                <option value="5">Aliyah</option>
                                <option value="6">SMA</option>
                            </select>
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
                                <span class="required">No HP</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="No Hp"
                                name="card_name" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="col-lg-6">
                         <!--begin::Input group-->
                         <div class="d-flex flex-column mb-7 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Jenis Kelamin</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih Jenis Kelamin" name="target_assign">
                                <option value="">Select Jenis Kelamin...</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">Alamat</span>
                            </label>
                            <!--end::Label-->
                            <div class="form-floating">
                                <textarea class="form-control form-control-solid" placeholder="Alamat" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                </div>
                <div class="mt-5 d-flex justify-content-end w-100">
                    <button class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
