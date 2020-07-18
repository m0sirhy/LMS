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
                <a href="instructor-edit-course.html" class="btn btn-accent">Add Course</a>
            </div>
            <div class="row">


                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal "
                         data-partial-height="40" data-toggle="popover" data-trigger="click">
                        <a href="instructor-edit-course.html" class="js-image" data-position="">
                            <img src="{{asset('assets/images/paths/angular_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        Edit course
                                    </span>
                                </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt" href="instructor-edit-course.html">Learn Angular
                                            fundamentals</a>
                                    </div>
                                    <a href="instructor-edit-course.html"
                                       class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/angular_40x40@2x.png')}}" width="40" height="40"
                                alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Learn Angular fundamentals</div>
                                <p class="lh-1">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to
                            create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with
                                        Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular
                                        applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency
                                        Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span
                                        class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="instructor-edit-course.html" class="btn btn-primary">Edit course</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal "
                         data-partial-height="40" data-toggle="popover" data-trigger="click">
                        <a href="instructor-edit-course.html" class="js-image" data-position="">
                            <img src="{{asset('assets/images/paths/swift_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        Edit course
                                    </span>
                                </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt" href="instructor-edit-course.html">Build an iOS
                                            Application in Swift</a>
                                    </div>
                                    <a href="instructor-edit-course.html"
                                       class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/swift_40x40@2x.png')}}" width="40" height="40"
                                alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Build an iOS Application in Swift</div>
                                <p class="lh-1">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to
                            create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with
                                        Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular
                                        applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency
                                        Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span
                                        class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="instructor-edit-course.html" class="btn btn-primary">Edit course</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal "
                         data-partial-height="40" data-toggle="popover" data-trigger="click">
                        <a href="instructor-edit-course.html" class="js-image" data-position="">
                            <img src="{{asset('assets/images/paths/wordpress_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        Edit course
                                    </span>
                                </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt" href="instructor-edit-course.html">Build a
                                            WordPress Website</a>
                                    </div>
                                    <a href="instructor-edit-course.html"
                                       class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/wordpress_40x40@2x.png')}}" width="40"
                                height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Build a WordPress Website</div>
                                <p class="lh-1">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to
                            create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with
                                        Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular
                                        applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency
                                        Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span
                                        class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="instructor-edit-course.html" class="btn btn-primary">Edit course</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-xl-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal "
                         data-partial-height="40" data-toggle="popover" data-trigger="click">
                        <a href="instructor-edit-course.html" class="js-image" data-position="left">
                            <img src="{{asset('assets/images/paths/react_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                    <span class="overlay__action d-flex flex-column text-center">
                                        Edit course
                                    </span>
                                </span>
                        </a>
                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title mb-4pt" href="instructor-edit-course.html">Become a React
                                            Native Developer</a>
                                    </div>
                                    <a href="instructor-edit-course.html"
                                       class="ml-4pt material-icons text-black-20 card-course__icon-favorite">edit</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span
                                                class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/react_40x40@2x.png')}}" width="40" height="40"
                                alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Become a React Native Developer</div>
                                <p class="lh-1">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to
                            create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with
                                        Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular
                                        applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency
                                        Injection</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Testing with Angular</small></p>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4pt">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">access_time</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>6 hours</small></p>
                                </div>
                                <div class="d-flex align-items-center mb-4pt">
                                    <span
                                        class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="instructor-edit-course.html" class="btn btn-primary">Edit course</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- Pagination -->
            <ul class="pagination justify-content-center pagination-sm">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                        <span>Prev</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#" aria-label="1">
                        <span>1</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="1">
                        <span>2</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span>Next</span>
                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>
        </div>


    </div>
    <!-- // END course Content -->
@endsection
