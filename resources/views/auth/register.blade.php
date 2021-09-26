@extends('backend.layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Register')

@section('content')
<!-- begin register -->
<div class="register register-with-news-feed">
    <!-- begin news-feed -->
    <div class="news-feed">
        <div class="news-image" style="background-image: url(/assets/img/login-bg/login-bg-15.jpg)"></div>
        <div class="news-caption">
            <h4 class="caption-title"><b>Color</b> Admin App</h4>
            <p>
                As a Color Admin app administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
            </p>
        </div>
    </div>
    <!-- end news-feed -->
    <!-- begin right-content -->
    <div class="right-content">
        <!-- begin register-header -->
        <h1 class="register-header">
            Sign Up
            <small>Create your Color Admin Account. It’s free and always will be.</small>
        </h1>
        <!-- end register-header -->
        <!-- begin register-content -->
        <div class="register-content">
            <form method="POST" action="{{ route('register') }}" class="margin-bottom-0">
                @csrf
                <label class="control-label">Name <span class="text-danger">*</span></label>
                <div class="row row-space-10">
                    <div class="col-md-6 m-b-15">
                        <input type="text" name="name" class="form-control"  required />
                    </div>
                </div>
                <label class="control-label">Phone Number <span class="text-danger">*</span></label>
                <div class="row row-space-10">
                    <div class="col-md-6 m-b-15">
                        <input type="text" name="no_hp" class="form-control"  required />
                    </div>
                </div>
                <label class="control-label">Plat Number <span class="text-danger">*</span></label>
                <div class="row row-space-10">
                    <div class="col-md-6 m-b-15">
                        <input type="text" name="no_kendaraan" class="form-control" required />
                    </div>
                </div>
                <label class="control-label">Email <span class="text-danger">*</span></label>
                <div class="row m-b-15">
                    <div class="col-md-12">
                        <input type="text" name="email" class="form-control" required />
                    </div>
                </div>
                <label class="control-label">Password <span class="text-danger">*</span></label>
                <div class="row m-b-15">
                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control" required />
                    </div>
                </div>
                <div class="register-buttons">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                </div>
                <div class="m-t-30 m-b-30 p-b-30">
                    Already a member? Click <a href="/login">here</a> to login.
                </div>
                <hr />
                <p class="text-center mb-0">
                    &copy; Color Admin All Right Reserved 2020
                </p>
            </form>
        </div>
        <!-- end register-content -->
    </div>
    <!-- end right-content -->
</div>
<!-- end register -->

@endsection
