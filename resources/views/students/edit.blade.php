@extends('layouts.landing.app')
@section('content')

    <div class="bg-gradient-primary border-bottom-white py-32pt">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <img src="assets/images/illustration/student/128/white.svg" width="104" class="mr-md-32pt mb-32pt mb-md-0" alt="student">
            <div class="flex mb-32pt mb-md-0">
                <h2 class="text-white mb-0">Alexander Watson</h2>
                <p class="lead text-white-50 d-flex align-items-center">Student <span class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span></p>
            </div>
            <a href="student-edit-account.html" class="btn btn-outline-white">Edit account</a>
        </div>
    </div>

    <div class="navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 mb-0">
        <div class="container page__container">

            <!-- Navbar toggler -->
            <button class="navbar-toggler ml-n16pt" type="button" data-toggle="collapse" data-target="#navbar-submenu2">
                <span class="material-icons">people_outline</span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-submenu2">
                <div class="navbar-collapse__content pb-16pt pb-sm-0">
                    <ul class="nav navbar-nav">

                        <li class="nav-item">
                            <a href="student-dashboard.html" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-my-courses.html" class="nav-link">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-discussions.html" class="nav-link">Discussions</a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="student-profile.html" class="nav-link">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>










    <div class="navbar navbar-expand navbar-submenu navbar-light p-sm-0">
        <div class="container page__container px-sm-24pt">

            <!-- Navbar toggler -->
            <button class="navbar-toggler ml-n16pt" type="button" data-toggle="collapse" data-target="#navbar-submenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-submenu">
                <div class="navbar-collapse__content">
                    <ul class="nav navbar-nav">

                        <li class="nav-item active">
                            <a href="student-edit-account.html" class="nav-link">Edit Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="student-billing.html" class="nav-link">Billing</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="container page__container">
        <form action="student-edit-account.html">
            <div class="row">
                <div class="col-lg-9">

                    <div class="page-section">
                        <h4>Profile &amp; Privacy</h4>
                        <div class="list-group list-group-form">
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Your photo</label>
                                    <div class="col-sm-9 media align-items-center">
                                        <a href="" class="media-left mr-16pt">
                                            <img src="assets/images/people/110/guy-3.jpg" alt="people" width="56" class="rounded-circle" />
                                        </a>
                                        <div class="media-body">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">Tutorio profile name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="Tutorio.com/alexander" placeholder="Your profile name ...">
                                        <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-sm-3">About you</label>
                                    <div class="col-sm-9">
                                        <textarea rows="3" class="form-control" placeholder="About you ..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Display your real name on your profile</label>
                                    <small class="form-text text-muted">If unchecked, your profile name will be displayed instead of your full name.</small>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Allow everyone to see your profile</label>
                                    <small class="form-text text-muted">If unchecked, your profile will be private and no one except you will be able to view it.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 page-nav">
                    <div class="page-section pt-lg-112pt">
                        <nav class="nav page-nav__menu">
                            <a class="nav-link" href="student-edit-account.html">Basic Information</a>
                            <a class="nav-link active" href="student-edit-account-profile.html">Profile &amp; Privacy</a>
                            <a class="nav-link" href="student-edit-account-notifications.html">Email Notifications</a>
                            <a class="nav-link" href="student-edit-account-password.html">Change Password</a>
                        </nav>
                        <div class="page-nav__content">
                            <button type="submit" class="btn btn-accent">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>





    @endsection
