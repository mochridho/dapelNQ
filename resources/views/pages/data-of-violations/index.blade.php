@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <h1>Data Pelanggar</h1>
        <div class="row">
            <!--begin::Col-->
            <div class="col-xl-12">
                <div class="card card-flush mt-6 mt-xl-9">
                    <!--begin::Card header-->
                    <div class="card-header mt-5">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                            <h3 class="fw-bolder mb-1">List Data Pelanggar</h3>
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar my-1">
                            <!--begin::Select-->
                            @if (Auth::user()->roles == 'admin' || Auth::user()->roles == 'penyidik')
                                <div class="me-6 my-1">
                                    <a href="{{ route('data-of-violations.create') }}">
                                        <button class="btn btn-success btn-sm">Tambah Data Pelanggar</button>
                                    </a>
                                </div>
                            @endif
                            <!--end::Select-->
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-3 position-absolute ms-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <form action="" method="get">
                                    <input type="text" name="q" value="{{ request()->q }}" id="kt_filter_search"
                                        class="form-control form-control-solid form-select-sm w-150px ps-9"
                                        placeholder="Search Order" />
                                </form>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table id="kt_profile_overview_table"
                                class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                                <!--begin::Head-->
                                <thead class="fs-7 text-gray-400 text-uppercase">
                                    <tr>
                                        <th class="min-w-30px">No</th>
                                        <th class="min-w-90px">NIS</th>
                                        <th class="min-w-150px">Nama Santri</th>
                                        <th class="min-w-200px">Keterangan Pelanggaran</th>
                                        <th class="min-w-230px">Sanksi</th>
                                        <th class="min-w-130px">Status</th>
                                        @if (Auth::user()->roles == 'admin' || Auth::user()->roles == 'penyidik')
                                            <th class="min-w-270px">Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <!--end::Head-->
                                <!--begin::Body-->
                                <tbody class="fs-6">
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-capitalize">{{ $item->santri->nis }}</td>
                                            <td class="text-capitalize">{{ $item->santri->nama_santri }}</td>
                                            <td class="text-capitalize">{{ $item->violation->keterangan_pelanggaran }}</td>
                                            <td class="text-capitalize">{{ $item->sanction->keterangan_sanksi }}</td>
                                            <td>
                                                <span
                                                    class="badge border {{ $item->status == 'selesai' ? 'border-success bg-success-subtle text-success' : 'border-warning bg-warning-subtle text-warning' }}">{{ $item->status }}</span>
                                            </td>
                                            @if (Auth::user()->roles == 'admin' || Auth::user()->roles == 'penyidik')
                                                <td>
                                                    <div class="text-start d-inline-flex gap-1">
                                                        <a href="{{ route('data-of-violations.edit', $item->id) }}"
                                                            class="btn btn-success btn-sm">Edit</a>
                                                        <form onsubmit="return confirm('apakah anda yakin?')"
                                                            action="{{ route('data-of-violations.destroy', $item->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <!--end::Body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Col-->
        </div>
    </div>
@endsection
