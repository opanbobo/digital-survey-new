@extends('layout.main')

@section('content')
    <div class="d-flex" >
        <!--begin::Content-->
        <div style="width: 60%" class="login-image d-none d-xl-block">
            
        </div>
        <div class="d-flex flex-start flex-column flex-column-fluid">
            <!--begin::Logo-->
            <a href="#" class="mb-12 text-center pt-20">
                <h1 class="hs-1"><span style="color: #F2951C">Jingga</span> Teknologi<span style="color: #F2951C">.</span></h1>
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo1/dist/index.html" action="#">
                    <!--begin::Heading-->
                    <div class="text-left mb-10">
                        <!--begin::Title-->
                        <h2 class="text-dark mb-3">Sign In</h2>
                        <!--end::Title-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg" type="text" name="email" autocomplete="off" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack mb-2">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            <!--end::Label-->
                            <!--begin::Link-->
                            <a href="#" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Input-->
                        <input class="form-control form-control-lg" type="password" name="password" autocomplete="off" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                            Login
                        </button>
                        <!--end::Submit button-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-7">Don't Have an Account?
                            <a href="../../demo1/dist/authentication/layouts/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a>
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>

@endsection
