@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Tambah Data Pelanggar</h1>
        <div class="card mt-lg-6">
            <div class="card-body">
                <div class="row mb-lg-6">
                    <div class="col-6">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-4 fw-bold form-label mb-2">
                                <span>Cari data santri</span>
                            </label>
                            <!--end::Label-->
                            <div class="d-flex gap-2">
                                <input type="text" class="form-control form-control-solid" placeholder="Cari Data Santri"
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
                                <td>Besuki-Situbondo</td>
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
                            <label class="required fs-6 fw-bold mb-2">Keterangan Pelanggaran</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Pelanggaran" name="target_assign">
                                <option value="">Select pelanggaran...</option>
                                <option value="1">Ghoshop</option>
                                <option value="2">Mengkonsumsi Bahan Terlarang</option>
                                <option value="3">Telat Balek Pesantren</option>
                                <option value="4">Tidak Mengikuti Kegiatan Ubudiyah</option>
                                <option value="5">Berkelahi</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Keterangan Sanksi</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Pilih Sanksi" name="target_assign">
                                <option value="">Select sanksi...</option>
                                <option value="1">Brdiri Di Halaman Pesantren</option>
                                <option value="2">Pemberian Surat Kepada Orang Tua</option>
                                <option value="3">Membayar Denda</option>
                                <option value="4">Berdiri Di Halaman Pesantren</option>
                                <option value="5">Kartu Kuning Berdiri Di Halaman Pesantren</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mb-7 w-100">
                            <button class="btn btn-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
