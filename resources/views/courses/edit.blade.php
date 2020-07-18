@extends('layouts.landing.app')
@section('content')
    <div class="bg-gradient-primary border-bottom-white py-32pt">
        <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
            <img src="assets/images/illustration/teacher/128/white.svg" width="104" class="mr-md-32pt mb-32pt mb-md-0"
                 alt="instructor">
            <div class="flex mb-32pt mb-md-0">
                <h2 class="text-white mb-0">Elijah Murray</h2>
                <p class="lead text-white-50 d-flex align-items-center">Instructor <span
                        class="ml-16pt d-flex align-items-center"><i class="material-icons icon-16pt mr-4pt">opacity</i> 2,300 IQ</span>
                </p>
            </div>
            <a href="student-edit-account.html" class="btn btn-outline-white">Edit account</a>
        </div>
    </div>

    <div class="navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 ">
        <div class="container page__container">

            <!-- Navbar toggler -->
            <button class="navbar-toggler ml-n16pt" type="button" data-toggle="collapse" data-target="#navbar-submenu2">
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
                                <a class="dropdown-item" href="instructor-courses.html">Courses</a>
                                <a class="dropdown-item" href="instructor-quizzes.html">Quizzes</a>
                                <a class="dropdown-item active" href="instructor-edit-course.html">Edit Course</a>
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


    <div class="page-section bg-white border-bottom-2">
        <div class="container page__container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4>Course title</h4>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Course title"
                               value="Javascript Basics">
                    </div>

                    <h4>Description</h4>
                    <textarea class="form-control" rows="3" placeholder="Course description goes here.."></textarea>
                </div>
                <div class="col-md-4">
                    <div class="card m-0">
                        <div class="card-header text-center">
                            <a href="#" class="btn btn-accent">Save changes</a>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex">
                                <a class="flex" href="#"><strong>Save Draft</strong></a>
                                <i class="material-icons text-muted">check</i>
                            </div>
                            <div class="list-group-item">
                                <a href="#" class="text-danger"><strong>Delete Course</strong></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container page__container page-section">
        <div class="row">
            <div class="col-md-8">

                <div class="mb-heading d-flex align-items-center">
                    <h4 class="flex mb-0">Sections</h4>
                    <a href="#" class="text-underline">Change order</a>
                </div>
                <div class="card stack">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Overview</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Quick Overview</li>
                        <li class="list-group-item">Basic Setup</li>
                        <li class="list-group-item">Browserify: Writing Modular Javascript</li>
                    </ul>
                </div>
                <div class="card stack">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Structure</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Quick Overview</li>
                        <li class="list-group-item">Basic Setup</li>
                        <li class="list-group-item">Browserify: Writing Modular Javascript</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-outline-secondary mb-24pt mb-sm-0">Add Section</a>
            </div>
            <div class="col-md-4">

                <div class="mb-heading d-flex align-items-center">
                    <h4 class="flex mb-0">Main Video</h4>
                    <a href="#" class="text-underline">Edit</a>
                </div>

                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                                src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                allowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="mb-heading d-flex align-items-center">
                    <h4 class="flex mb-0">Course Options</h4>
                    <a href="#" class="text-underline">Add</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control custom-select">
                                <option value="vuejs">VueJs</option>
                                <option value="vuejs">Angular</option>
                                <option value="vuejs">React</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group form-inline">
                                        <span class="input-group-prepend"><span class="input-group-text">$</span></span>
                                        <input type="text" class="form-control" value="24">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <input type="text" name="tags" class="form-control" placeholder="enter, badges, here">
                            <small class="form-text text-muted">Separate tags with space or comma.</small>
                        </div>

                        <small class="text-muted">Your tags:</small>
                        <a href="#" class="float-right"><small>Clear all</small></a>
                        <div class="clearfix"></div>
                        <span class="badge badge-primary badge-filter">
                                    <a href="#"><i class="material-icons">close</i></a> Basic Angular
                                </span>
                        <span class="badge badge-primary badge-filter">
                                    <a href="#"><i class="material-icons">close</i></a> Guide
                                </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

