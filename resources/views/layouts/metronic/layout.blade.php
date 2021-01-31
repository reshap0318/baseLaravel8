
<!--begin::Main-->

@include('partials._header-mobile')
<div class="d-flex flex-column flex-root">

    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

            @include('partials._header')

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                {{-- jangan lupa tambahkan class subheader-enabled pada body
                @include('partials._subheader') --}}

                {{-- @include('partials._content') --}}
                
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">

                    <!--begin::Container-->
                    <div class="container">

                        @if (!Auth::user()->email_verified_at)
                            <div class="alert alert-white alert-shadow fade show gutter-b" role="alert">
                                Verify Your Email Address : {{ Auth::user()->email }}
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                            </div>
                        @endif

                        {{ $slot }}
                    </div>

                    <!--end::Container-->
                </div>

                <!--end::Entry-->
            </div>

            <!--end::Content-->

            @include('partials._footer.compact')
        </div>

        <!--end::Wrapper-->
    </div>

    <!--end::Page-->
</div>

<!--end::Main-->