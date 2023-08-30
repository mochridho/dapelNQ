@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Edit Data Pelanggar : {{ $data->santri->nama_santri }} ( {{ $data->santri->nis }} )</h1>
        <div class="card mt-lg-6">
            <form action="{{ route('data-of-violations.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-bold mb-2">
                                    <span>Cari data santri</span>
                                </label>
                                <!--end::Label-->
                                <select name="santri_id" aria-label="Select a Timezone" data-control="select2"
                                    data-placeholder="Select a santri.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option value="">Select a santri..</option>
                                    @foreach ($santri as $item)
                                        <option data-bs-offset="-39600" value="{{ $item->id }}"
                                            {{ $item->id == $data->santri_id ? 'selected' : '' }}>
                                            {{ $item->nama_santri }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Keterangan Pelanggaran</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Pilih Pelanggaran" name="violation_id">
                                    <option value="">Select pelanggaran...</option>
                                    @foreach ($violations as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $data->violation_id ? 'selected' : '' }}>
                                            {{ $item->keterangan_pelanggaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column mb-7 fv-row">
                                <label class="required fs-6 fw-bold mb-2">Keterangan Sanksi</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                    data-placeholder="Pilih Sanksi" name="sanction_id">
                                    <option value="">Select sanksi...</option>
                                    @foreach ($sanctions as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $data->sanction_id ? 'selected' : '' }}>
                                            {{ $item->keterangan_sanksi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex col-5 m-auto flex-column mb-7 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">
                                <span>Status</span>
                            </label>
                            <!--end::Label-->
                            <div class="fv-row">
                                <!--begin::Radio group-->
                                <div class="btn-group w-100" data-kt-buttons="true"
                                    data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label
                                        class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success {{ $data->status == 'proses' ? 'active' : '' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="status" value="proses"
                                            {{ $data->status == 'proses' ? 'checked' : '' }} />
                                        <!--end::Input-->
                                        PROSES
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label
                                        class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success {{ $data->status == 'selesai' ? 'active' : '' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="status" value="selesai"
                                            {{ $data->status == 'selesai' ? 'checked' : '' }} />
                                        <!--end::Input-->
                                        SELESAI
                                    </label>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 w-100">
                            <a href="{{ route('data-of-violations.index') }}" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
