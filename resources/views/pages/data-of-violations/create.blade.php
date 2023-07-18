@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Tambah Data Pelanggar</h1>
        <div class="card mt-lg-6">
            <form action="{{ route('data-of-violations.store') }}" method="post">
                @csrf
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
                                        <option data-bs-offset="-39600" value="{{ $item->id }}">
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
                                        <option value="{{ $item->id }}">{{ $item->keterangan_pelanggaran }}</option>
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
                                        <option value="{{ $item->id }}">{{ $item->keterangan_sanksi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end w-100">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
