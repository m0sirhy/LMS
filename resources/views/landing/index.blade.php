@extends('layouts.landing.app')
@section('content')
    <div class="mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0" data-effects="parallax-background blend-background">
        <div class="mdk-box__bg">
            <div class="mdk-box__bg-front" style="background-image: url({{asset('assets/images/1280_work-station-straight-on-view.jpg')}});"></div>
        </div>
        <div class="mdk-box__content">
            <div class="container page__container py-64pt py-md-112pt">
                <div class="row align-items-center text-center text-md-left">
                    <div class="col-md-6 col-lg-5 order-1 order-md-0">
                        <h1 class="text-white">Learn <span class="d-block d-md-inline-block text-scramble js-text-scramble">Development</span></h1>
                        <p class="lead mb-32pt mb-lg-48pt text-white">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>
                        <a href="library.html" class="btn btn-lg btn-white btn--raised mb-16pt">Browse Courses</a>
                        <p class="mb-0"><a href="" class="text-white-70 text-underline"><strong>Are you a teacher?</strong></a></p>
                    </div>
                    <div class="col-md-6 col-lg-7 order-0 order-md-1 text-center mb-32pt mb-md-0">
                        <img src="{{asset('assets/images/macbook.png')}}" alt="macbook" class="home-macbook">
                    </div>
                </div>
            </div>
            <!-- <div class="hero container text-center py-112pt">
<h1 class="text-white">Learn to Code</h1>
<p class="lead measure-hero-lead mx-auto mb-48pt text-white">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>
<a href="library.html" class="btn btn-lg btn-outline-white">Browse Courses</a>
</div> -->
        </div>
    </div>

    <div class="bg-white border-bottom-2 py-16pt py-sm-24pt py-md-32pt ">
        <div class="container page__container">
            <div class="row align-items-center">
                <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                    <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                        <i class="material-icons text-primary-light">subscriptions</i>
                    </div>
                    <div class="flex">
                        <p class="mb-0"><strong>8,000+ Courses</strong></p>
                        <p class="text-black-70 mb-0">Explore a wide range of skills.</p>
                    </div>
                </div>
                <div class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0">
                    <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                        <i class="material-icons text-primary-light">verified_user</i>
                    </div>
                    <div class="flex">
                        <p class="mb-0"><strong>By Industry Experts</strong></p>
                        <p class="text-black-70 mb-0">Professional development from the best people.</p>
                    </div>
                </div>
                <div class="d-flex col-md align-items-center">
                    <div class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt">
                        <i class="material-icons text-primary-light">update</i>
                    </div>
                    <div class="flex">
                        <p class="mb-0"><strong>Unlimited Access</strong></p>
                        <p class="text-black-70 mb-0">Unlock Library and learn any topic with one subscription.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section border-bottom-2">
        <div class="container page__container">
            <div class="row align-items-end mb-16pt mb-md-32pt">
                <div class="col-md-auto mb-32pt mb-md-0">
                    <div class="page-headline page-headline--title text-center text-md-left p-0">
                        <h2>Top Courses</h2>
                    </div>
                </div>
                <div class="col-md text-center text-md-right d-flex justify-content-md-end align-items-center flex-wrap" style="white-space: nowrap;">
                    <h5 class="mr-24pt mb-md-0 d-md-inline-block">Popular topics</h5>
                    <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-secondary">Development</a>
                    <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary">Design</a>
                    <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary">Photography</a>
                    <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary d-md-none d-lg-inline-flex">Business</a>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="center">
                            <img src="{{asset('assets/images/paths/angular_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">NEW</span>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Learn Angular fundamentals</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/angular_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Learn Angular fundamentals</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="center">
                            <img src="{{asset('assets/images/paths/swift_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Build an iOS Application in Swift</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-accent card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/swift_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Build an iOS Application in Swift</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="center">
                            <img src="{{asset('assets/images/paths/wordpress_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Build a WordPress Website</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/wordpress_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Build a WordPress Website</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="left">
                            <img src="{{asset('assets/images/paths/react_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Become a React Native Developer</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/react_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Become a React Native Developer</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="center">
                            <img src="{{asset('assets/images/paths/redis_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Become a Redis Developer</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/redis_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Become a Redis Developer</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="left">
                            <img src="{{asset('assets/images/paths/typescript_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Introduction to Typescript</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/typescript_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Introduction to Typescript</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="center">
                            <img src="{{asset('assets/images/paths/devops_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Become a DevOps Engineer</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/devops_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Become a DevOps Engineer</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal " data-partial-height="40" data-toggle="popover" data-trigger="click">


                        <a href="course.html" class="js-image" data-position="left">
                            <img src="{{asset('assets/images/paths/angular_testing_430x168.png')}}" alt="course">
                            <span class="overlay__content">
                                        <span class="overlay__action d-flex flex-column text-center">
                                            <i class="material-icons">play_circle_outline</i>
                                            <small>Preview course</small>
                                        </span>
                                    </span>
                        </a>

                        <div class="mdk-reveal__content">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex">
                                        <a class="card-title" href="course.html">Angular Unit Testing</a>
                                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                                    </div>
                                    <a href="course.html" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                </div>
                                <div class="d-flex">
                                    <div class="rating flex">
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star</span></span>
                                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                                    </div>
                                    <small class="text-50">6 hours</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popoverContainer d-none">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{asset('assets/images/paths/angular_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="rounded">
                            </div>
                            <div class="media-body">
                                <div class="card-title mb-0">Angular Unit Testing</div>
                                <p class="lh-1 mb-0">
                                    <span class="text-black-50 small">with</span>
                                    <span class="text-black-50 small font-weight-bold">Elijah Murray</span>
                                </p>
                            </div>
                        </div>

                        <p class="my-16pt text-black-70">Learn the fundamentals of working with Angular and how to create basic applications.</p>

                        <div class="mb-16pt">
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Fundamentals of working with Angular</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Create complete Angular applications</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Working with the Angular CLI</small></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons icon-16pt text-black-50 mr-8pt">check</span>
                                <p class="flex text-black-50 lh-1 mb-0"><small>Understanding Dependency Injection</small></p>
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
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>12 lessons</small></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons icon-16pt text-black-50 mr-4pt">assessment</span>
                                    <p class="flex text-black-50 lh-1 mb-0"><small>Beginner</small></p>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="course.html" class="btn btn-primary">Watch trailer</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="pt-md-16pt text-center">
                <a href="library.html" class="btn btn-outline-secondary">Browse Courses</a>
            </div>
        </div>
    </div>

    <div class="page-section bg-white border-bottom-2">
        <div class="container page__container">
            <div class="page-headline text-center">
                <h2>Learning Paths</h2>
                <p class="lead text-black-70 measure-lead mx-auto">Stop guessing what to learn next and start making progress faster based on your current skill level and experience.</p>
            </div>

            <div class="row d-block js-mdk-carousel">
                <div class="mdk-carousel__content">


                    <div class="col-12 col-sm-6 col-md-4">

                        <a href="path.html" class="card stack stack--hidden-hover card-featured-path overlay js-overlay">
                                    <span class="card-featured-path__content">
                                        <span data-position="center" class="js-image" data-height="96">
                                            <img src="{{asset('assets/images/paths/angular_430x168.png')}}" alt="course">
                                        </span>
                                        <span class="overlay__content">
                                            <span class="overlay__action card-title mb-0">Angular</span>
                                        </span>
                                    </span>
                        </a>

                    </div>
                    <div class="col-12 col-sm-6 col-md-4">

                        <a href="path.html" class="card stack stack--hidden-hover card-featured-path overlay js-overlay">
                                    <span class="card-featured-path__content">
                                        <span data-position="left" class="js-image" data-height="96">
                                            <img src="{{asset('assets/images/paths/react_430x168.png')}}" alt="course">
                                        </span>
                                        <span class="overlay__content">
                                            <span class="overlay__action card-title mb-0">React Native</span>
                                        </span>
                                    </span>
                        </a>

                    </div>
                    <div class="col-12 col-sm-6 col-md-4">

                        <a href="path.html" class="card stack stack--hidden-hover card-featured-path overlay js-overlay">
                                    <span class="card-featured-path__content">
                                        <span data-position="center" class="js-image" data-height="96">
                                            <img src="{{asset('assets/images/paths/swift_430x168.png')}}" alt="course">
                                        </span>
                                        <span class="overlay__content">
                                            <span class="overlay__action card-title mb-0">Swift</span>
                                        </span>
                                    </span>
                        </a>

                    </div>

                </div>
            </div>

            <div class="row mt-16pt mt-lg-32pt">
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/angular_40x40@2x.png')}}" width="40" height="40" alt="Angular" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Angular</span>
                                    <span class="text-muted d-flex lh-1">24 courses</span>
                                </span>
                    </a>
                </div>
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/react_40x40@2x.png')}}" width="40" height="40" alt="React Native" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">React Native</span>
                                    <span class="text-muted d-flex lh-1">18 courses</span>
                                </span>
                    </a>
                </div>
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/swift_40x40@2x.png')}}" width="40" height="40" alt="Swift" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Swift</span>
                                    <span class="text-muted d-flex lh-1">22 courses</span>
                                </span>
                    </a>
                </div>
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/wordpress_40x40@2x.png')}}" width="40" height="40" alt="WordPress" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">WordPress</span>
                                    <span class="text-muted d-flex lh-1">13 courses</span>
                                </span>
                    </a>
                </div>
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/swift_40x40@2x.png')}}" width="40" height="40" alt="Swift" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Swift</span>
                                    <span class="text-muted d-flex lh-1">22 courses</span>
                                </span>
                    </a>
                </div>
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/wordpress_40x40@2x.png')}}" width="40" height="40" alt="WordPress" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">WordPress</span>
                                    <span class="text-muted d-flex lh-1">13 courses</span>
                                </span>
                    </a>
                </div>
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/devops_40x40@2x.png')}}" width="40" height="40" alt="Development Tools" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">Development Tools</span>
                                    <span class="text-muted d-flex lh-1">5 courses</span>
                                </span>
                    </a>
                </div>
                <div class="col-i8-6 col-md-3 mb-16pt">
                    <a href="path.html" class="media">
                        <img src="{{asset('assets/images/paths/react_40x40@2x.png')}}" width="40" height="40" alt="React Native" class="media-left rounded">
                        <span class="media-body">
                                    <span class="card-title text-body d-block mb-0">React Native</span>
                                    <span class="text-muted d-flex lh-1">18 courses</span>
                                </span>
                    </a>
                </div>
            </div>

            <div class="pt-8pt pt-md-32pt text-center">
                <a href="paths.html" class="btn btn-outline-secondary">Browse Learning Paths</a>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container page__container">
            <div class="page-headline text-center">
                <h2>Feedback</h2>
                <p class="lead measure-lead mx-auto text-black-70">What other students turned professionals have to say about us after learning with us and reaching their goals.</p>
            </div>

            <div class="position-relative carousel-card">
                <div class="row d-block js-mdk-carousel" id="carousel-feedback">
                    <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-feedback" role="button" data-slide="next">
                        <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="mdk-carousel__content">

                        <div class="col-12 col-md-6">
                            <div class="card card--elevated card-body">
                                <blockquote class="mb-0">
                                    <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('assets/images/people/110/guy-1.jpg')}}" width="40" alt="avatar" class="rounded-circle">
                                        </div>
                                        <div class="media-body media-middle">
                                            <p class="mb-0"><a href="" class="text-body"><strong>Umberto Kass</strong></a></p>
                                            <div class="rating">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card card--elevated card-body">
                                <blockquote class="mb-0">
                                    <p class="text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia distinctio reiciendis iusto id, doloribus optio soluta laborum nobis dolor tempore velit porro maiores eveniet voluptas officia ipsa magnam aliquam. Perferendis?</p>

                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{asset('assets/images/people/110/guy-2.jpg')}}" width="40" alt="avatar" class="rounded-circle">
                                        </div>
                                        <div class="media-body media-middle">
                                            <p class="mb-0"><a href="" class="text-body"><strong>Umberto Kass</strong></a></p>
                                            <div class="rating">
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
