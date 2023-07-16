@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Edit Data Pelanggar</h1>
        <div class="card mt-lg-6">
            <div class="card-body">
                <div class="row mt-lg-6">
                    <div class="col-6">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-4 fw-bold form-label mb-2">
                                <span>Cari data santri</span>
                            </label>
                            <!--end::Label-->
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control form-control-solid" placeholder="Search"
                                    name="card_name" />
                                <button class="btn btn-success">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 border-end">
                        <table class="fs-4 lh-lg">
                            <tr>
                                <td class="w-125px">NIS</td>
                                <td>:</td>
                                <td>34524532</td>
                            </tr>
                            <tr>
                                <td>Nama Santri</td>
                                <td>:</td>
                                <td>Abdul</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>Besuki Situbondo</td>
                            </tr>
                            <tr>
                                <td>Kamar</td>
                                <td>:</td>
                                <td>G2-L1-Ar-Rohman</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>:</td>
                                <td>SMA</td>
                            </tr>
                            <tr>
                                <td>Nama Wali</td>
                                <td>:</td>
                                <td>Mandalaaa</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Jenis Pelanggaran</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Pelanggaran" name="target_assign">
                                <option value="">Select pelanggaran...</option>
                                <option value="1">Colli</option>
                                <option value="2">Colmex</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Jenis Sanksi</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Sanksi" name="target_assign">
                                <option value="">Select sanksi...</option>
                                <option value="1">Colli</option>
                                <option value="2">Colmex</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-4 fw-bold form-label mb-2">
                                <span>Status</span>
                            </label>
                            <!--end::Label-->
                            <div class="fv-row">
                                <!--begin::Radio group-->
                                <div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success active" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="1" />
                                    <!--end::Input-->
                                    PROSES</label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success " data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" checked="checked" value="2" />
                                    <!--end::Input-->
                                    SELESAI</label>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-6 w-100 gap-2">
                            <button class="btn btn-danger">Batal</button>
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
