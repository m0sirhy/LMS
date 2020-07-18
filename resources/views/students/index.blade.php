@extends('layouts.landing.app')
@section('content')
    <div class="mdk-header-layout__content page-content ">

        <div class="bg-gradient-primary border-bottom-white py-32pt">
            <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                <img src="{{asset('assets/images/illustration/teacher/128/white.svg')}}" width="104" class="mr-md-32pt
                mb-32pt mb-md-0" alt="instructor">
                <div class="flex mb-32pt mb-md-0">
                    <h2 class="text-white mb-0">Elijah Murray</h2>
                    <p class="lead text-white-50 d-flex align-items-center">Instructor <span
                            class="ml-16pt d-flex align-items-center"><i
                                class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span></p>
                </div>
                <a href="student-edit-account.html" class="btn btn-outline-white">Edit account</a>
            </div>
        </div>

        <div class="navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 ">
            <div class="container page__container">

                <!-- Navbar toggler -->
                <button class="navbar-toggler ml-n16pt" type="button" data-toggle="collapse"
                        data-target="#navbar-submenu2">
                    <span class="material-icons">people_outline</span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-submenu2">
                    <div class="navbar-collapse__content pb-16pt pb-sm-0">
                        <ul class="nav navbar-nav">

                            <li class="nav-item">
                                <a href="instructor-dashboard.html" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="instructor-courses.html">Courses</a>
                                    <a class="dropdown-item" href="instructor-quizzes.html">Quizzes</a>
                                    <a class="dropdown-item" href="instructor-edit-course.html">Edit Course</a>
                                    <a class="dropdown-item" href="instructor-edit-quiz.html">Edit Quiz</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="instructor-earnings.html">Earnings</a>
                                    <a class="dropdown-item" href="instructor-statement.html">Statement</a>
                                </div>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="instructor-profile.html" class="nav-link">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container page__container page-section">
            <div class="mb-heading d-flex align-items-center">
                <h4 class="flex m-0">Manage Courses</h4>
                <a href="{{route('student.create')}}" class="btn btn-accent">Add Student</a>
            </div>

            <div class="table-responsive" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                <div class="search-form search-form--light mb-3">
                    <input type="text" class="form-control search" placeholder="Search">
                    <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                </div>
                <table class="table table-flush">
                    <thead>
                    <tr>

                        <th style="width: 18px;">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff" id="customCheckAll">
                                <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                            </div>
                        </th>

                        <th> <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-employee-name">Employee</a></th>


                        <th style="width: 100px;"> <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-last-active">Active</a></th>
                        <th style="width: 51px;">Earnings</th>
                        <th style="width: 24px;"></th>
                    </tr>
                    </thead>
                    <tbody class="list" id="staff">

                    <tr class="selected">

                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_1">
                                <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                            </div>
                        </td>

                        <td>

                            <div class="media align-items-center">
                                <div class="avatar avatar-sm mr-3">
                                    <img src="assets/images/people/256/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">

                                    <span class="js-lists-values-employee-name">Kalum Atherton</span>

                                </div>
                            </div>

                        </td>


                        <td><small class=" js-lists-values-last-active text-muted ">3 days ago</small></td>
                        <td>&dollar;12,402</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>

                    <tr>

                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_2">
                                <label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
                            </div>
                        </td>

                        <td>

                            <div class="media align-items-center">
                                <div class="avatar avatar-sm mr-3">
                                    <img src="assets/images/people/256/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">

                                    <span class="js-lists-values-employee-name">Helen Mcdaniel</span>

                                </div>
                            </div>

                        </td>


                        <td><small class="text-muted js-lists-values-last-active">2 days ago</small></td>
                        <td>&dollar;48,108</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>

                    <tr>

                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_3">
                                <label class="custom-control-label" for="customCheck1_3"><span class="text-hide">Check</span></label>
                            </div>
                        </td>

                        <td>

                            <div class="media align-items-center">
                                <div class="avatar avatar-sm mr-3">
                                    <img src="assets/images/people/256/256_rsz_karl-s-973833-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">

                                    <span class="js-lists-values-employee-name">Karim Hicks</span>

                                </div>
                            </div>

                        </td>


                        <td><small class="text-muted js-lists-values-last-active">1 hour ago</small></td>
                        <td>&dollar;11,802</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>

                    <tr>

                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_4">
                                <label class="custom-control-label" for="customCheck1_4"><span class="text-hide">Check</span></label>
                            </div>
                        </td>

                        <td>

                            <div class="media align-items-center">
                                <div class="avatar avatar-sm mr-3">
                                    <img src="assets/images/people/256/256_rsz_90-jiang-640827-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">

                                    <span class="js-lists-values-employee-name">Clifford Burgess</span>

                                </div>
                            </div>

                        </td>


                        <td><small class="text-muted js-lists-values-last-active">2 hours ago</small></td>
                        <td>&dollar;84,401</td>
                        <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                    </tr>

                    </tbody>
                </table>
            </div>


        </div>
    <!-- // END course Content -->
@endsection
