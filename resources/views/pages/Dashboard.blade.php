@extends('layouts.appLayout')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="row g-5 g-xl-8">
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="{{ route('master.violations.index') }}" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M3.78307 2.82598L12 1L20.2169 2.82598C20.6745 2.92766 21 3.33347 21 3.80217V13.7889C21 15.795 19.9974 17.6684 18.3282 18.7812L12 23L5.6718 18.7812C4.00261 17.6684 3 15.795 3 13.7889V3.80217C3 3.33347 3.32553 2.92766 3.78307 2.82598ZM12 11C13.3807 11 14.5 9.88071 14.5 8.5C14.5 7.11929 13.3807 6 12 6C10.6193 6 9.5 7.11929 9.5 8.5C9.5 9.88071 10.6193 11 12 11ZM7.52746 16H16.4725C16.2238 13.75 14.3163 12 12 12C9.68372 12 7.77619 13.75 7.52746 16Z">
                            </path>
                        </svg>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{ $violations }} Jenis</div>
                        <div class="fw-bold text-white">Jumlah Jenis Pelanggaran</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="{{ route('master.sanctions.index') }}" class="card bg-info hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M5.32894 3.27158C6.56203 2.8332 7.99181 3.10749 8.97878 4.09446C9.96603 5.08171 10.2402 6.51202 9.80129 7.74535L20.646 18.5902L18.5247 20.7115L7.67887 9.86709C6.44578 10.3055 5.016 10.0312 4.02903 9.04421C3.04178 8.05696 2.76761 6.62665 3.20652 5.39332L5.44325 7.63C6.02903 8.21578 6.97878 8.21578 7.56457 7.63C8.15035 7.04421 8.15035 6.09446 7.56457 5.50868L5.32894 3.27158ZM15.6963 5.15512L18.8783 3.38736L20.2925 4.80157L18.5247 7.98355L16.757 8.3371L14.6356 10.4584L13.2214 9.04421L15.3427 6.92289L15.6963 5.15512ZM8.62523 12.9333L10.7465 15.0546L5.7968 20.0044C5.21101 20.5902 4.26127 20.5902 3.67548 20.0044C3.12415 19.453 3.09172 18.5793 3.57819 17.99L3.67548 17.883L8.62523 12.9333Z">
                                </path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{ $sanctions }} Sanksi</div>
                        <div class="fw-bold text-white">Jumlah Sanksi</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="{{ route('data-of-violations.index') }}"
                    class="card bg-primary hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M19.3788 15.1057C20.9258 11.442 19.5373 7.11425 16.0042 5.07444C13.4511 3.6004 10.4232 3.69359 8.03452 5.05554L7.04216 3.31873C10.028 1.61633 13.8128 1.49984 17.0042 3.34239C21.4949 5.93507 23.2139 11.4848 21.1217 16.1119L22.4635 16.8866L18.2984 19.1007L18.1334 14.3866L19.3788 15.1057ZM4.62961 8.89962C3.08263 12.5633 4.47116 16.891 8.00421 18.9308C10.5573 20.4049 13.5851 20.3117 15.9737 18.9499L16.9661 20.6866C13.9803 22.389 10.1956 22.5054 7.00421 20.6629C2.51357 18.0702 0.794565 12.5205 2.88672 7.89336L1.54492 7.11867L5.70999 4.90457L5.87505 9.61867L4.62961 8.89962ZM13.4184 14.8311L10.59 12.0026L7.76157 14.8311L6.34736 13.4169L10.59 9.17422L13.4184 12.0026L16.2469 9.17422L17.6611 10.5884L13.4184 14.8311Z">
                                </path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $proses }} Proses</div>
                        <div class="fw-bold text-gray-100">Jumlah Proses Penanganan Pelanggaran</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="{{ route('data-of-violations.index') }}"
                    class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M9 18H4V10H9V18ZM15 18H10V6H15V18ZM21 18H16V2H21V18ZM22 22H3V20H22V22Z"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $dataPelanggaran }} pelanggar</div>
                        <div class="fw-bold text-gray-100">Jumlah Data Pelanggar</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
        </div>
    </div>
@endsection
