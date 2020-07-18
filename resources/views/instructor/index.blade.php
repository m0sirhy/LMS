@extends('layouts.landing.app')
@section('content')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content page-content ">

        <div class="bg-gradient-primary border-bottom-white py-32pt">
            <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                <img src="{{asset('assets/images/illustration/teacher/128/white.svg')}}" width="104"
                     class="mr-md-32pt mb-32pt mb-md-0" alt="instructor">
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

                            <li class="nav-item active">
                                <a href="instructor-dashboard.html" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="instructor-courses.html">Courses</a>
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


        <div class="py-24pt bg-white border-bottom-2">
            <div class="container page__container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="border-1 border-left-3 border-left-accent rounded text-70 text-center mb-lg-0">
                            <div class="card-body">
                                Earnings this month
                                <p class="lead text-body mb-0"><strong>$1,569.00</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border rounded text-70 text-center mb-lg-0">
                            <div class="card-body">
                                Account Balance
                                <p class="lead text-body mb-0"><strong>$3,917.80</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border rounded text-70 text-center mb-lg-0">
                            <div class="card-body">
                                Total Sales
                                <p class="lead text-body mb-0"><strong>$10,211.50</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container page__container page-section">

            <div class="mb-heading d-flex align-items-end">
                <div class="flex">
                    <h4 class="card-title">Earnings</h4>
                    <p class="card-subtitle">Last Week vs. Previous Week</p>
                </div>
                <a href="instructor-earnings.html" class="text-underline">View Earnings</a>
            </div>
            <div class="card p-24pt mb-32pt">
                <div class="chart" style="height: 320px;">
                    <canvas id="earningsChart" class="chart-canvas"></canvas>
                </div>
            </div>

            <div class="row mb-8pt">
                <div class="col-lg-6">

                    <div class="mb-heading d-flex align-items-end">
                        <div class="flex">
                            <h4 class="card-title">Transactions</h4>
                            <p class="card-subtitle">Latest Transactions</p>
                        </div>
                        <a href="instructor-statement.html" class="text-underline">Statement</a>
                    </div>
                    <div class="card">
                        <div data-toggle="lists" data-lists-values='[
            "js-lists-values-course",
            "js-lists-values-document",
            "js-lists-values-amount",
            "js-lists-values-date"
          ]' data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" class="table-responsive">
                            <table class="table table-flush table-nowrap">
                                <thead>
                                <tr>
                                    <th colspan="2">
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Course</a>
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-document">Document</a>
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-amount">Amount</a>
                                        <a href="javascript:void(0)" class="sort"
                                           data-sort="js-lists-values-date">Date</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="list">


                                <tr>
                                    <td>
                                        <div class="d-flex flex-nowrap align-items-center">
                                            <a href="instructor-edit-course.html"
                                               class="avatar avatar-4by3 avatar-sm mr-3">
                                                <img src="{{asset('assets/images/paths/angular_routing_200x168.png')}}"
                                                     alt="course" class="avatar-img rounded">
                                            </a>
                                            <div class="flex">
                                                <a class="text-body js-lists-values-course"
                                                   href="instructor-edit-course.html"><strong>Angular Routing
                                                        In-Depth</strong></a><br>
                                                <small class="text-muted mr-1">
                                                    Invoice
                                                    <a href="invoice.html" style="color: inherit;"
                                                       class="js-lists-values-document">#8734</a> -
                                                    &dollar;<span class="js-lists-values-amount">89</span> USD
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <small class="text-muted text-uppercase js-lists-values-date">12 Nov
                                            2018</small>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-nowrap align-items-center">
                                            <a href="instructor-edit-course.html"
                                               class="avatar avatar-4by3 avatar-sm mr-3">
                                                <img src="{{asset('assets/images/paths/angular_testing_200x168.png')}}"
                                                     alt="course" class="avatar-img rounded">
                                            </a>
                                            <div class="flex">
                                                <a class="text-body js-lists-values-course"
                                                   href="instructor-edit-course.html"><strong>Angular Unit
                                                        Testing</strong></a><br>
                                                <small class="text-muted mr-1">
                                                    Invoice
                                                    <a href="invoice.html" style="color: inherit;"
                                                       class="js-lists-values-document">#8735</a> -
                                                    &dollar;<span class="js-lists-values-amount">89</span> USD
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <small class="text-muted text-uppercase js-lists-values-date">13 Nov
                                            2018</small>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-nowrap align-items-center">
                                            <a href="instructor-edit-course.html"
                                               class="avatar avatar-4by3 avatar-sm mr-3">
                                                <img src="{{asset('assets/images/paths/typescript_200x168.png')}}"
                                                     alt="course" class="avatar-img rounded">
                                            </a>
                                            <div class="flex">
                                                <a class="text-body js-lists-values-course"
                                                   href="instructor-edit-course.html"><strong>Introduction to
                                                        TypeScript</strong></a><br>
                                                <small class="text-muted mr-1">
                                                    Invoice
                                                    <a href="invoice.html" style="color: inherit;"
                                                       class="js-lists-values-document">#8736</a> -
                                                    &dollar;<span class="js-lists-values-amount">89</span> USD
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <small class="text-muted text-uppercase js-lists-values-date">14 Nov
                                            2018</small>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-nowrap align-items-center">
                                            <a href="instructor-edit-course.html"
                                               class="avatar avatar-4by3 avatar-sm mr-3">
                                                <img src="{{asset('assets/images/paths/angular_200x168.png')}}"
                                                     alt="course" class="avatar-img rounded">
                                            </a>
                                            <div class="flex">
                                                <a class="text-body js-lists-values-course"
                                                   href="instructor-edit-course.html"><strong>Learn Angular
                                                        Fundamentals</strong></a><br>
                                                <small class="text-muted mr-1">
                                                    Invoice
                                                    <a href="invoice.html" style="color: inherit;"
                                                       class="js-lists-values-document">#8737</a> -
                                                    &dollar;<span class="js-lists-values-amount">89</span> USD
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <small class="text-muted text-uppercase js-lists-values-date">15 Nov
                                            2018</small>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="mb-heading d-flex align-items-center">
                        <div class="flex">
                            <h4 class="card-title">Comments</h4>
                            <p class="card-subtitle">Latest comments</p>
                        </div>
                        <div class="d-flex align-items-center text-right">
                            <a href="#" class="btn btn-outline-secondary btn-sm"><i class="material-icons">keyboard_arrow_left</i></a>
                            <a href="#" class="btn btn-outline-secondary btn-sm ml-8pt"><i class="material-icons">keyboard_arrow_right</i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="avatar avatar-sm">
                                        <img src="{{asset('assets/images/people/110/guy-9.jpg')}}" alt="Guy"
                                             class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="media-body d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <a href="profile.html" class="text-body"><strong>Laza Bogdan</strong></a>
                                        <small class="ml-auto text-muted">27 min ago</small><br>
                                    </div>
                                    <span class="text-muted">on <a href="instructor-edit-course.html" class="text-50"
                                                                   style="text-decoration: underline;">Data Visualization With Chart.js</a></span>
                                    <p class="mt-1 mb-0 text-70">How can I load Charts on a page?</p>
                                </div>
                            </div>
                            <div
                                class="media ml-sm-32pt mt-3 border rounded p-3 bg-light d-inline-flex measure-paragraph-max">
                                <div class="media-left">
                                    <a href="#" class="avatar avatar-sm">
                                        <img src="{{asset('assets/images/people/110/guy-6.jpg')}}" alt="Guy"
                                             class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <a href="profile.html" class="text-body"><strong>FrontendMatter</strong></a>
                                        <small class="ml-auto text-muted">just now</small>
                                    </div>
                                    <p class="mt-1 mb-0 text-70">Hi Bogdan,<br> Thank you for purchasing our course!
                                        <br><br>Please have a look at the charts library documentation <a href="#"
                                                                                                          class="text-underline">here</a>
                                        and follow the instructions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="#" id="message-reply">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control form-control-appended" required=""
                                           placeholder="Quick Reply">
                                    <div class="input-group-append">
                                        <div class="input-group-text pr-2">
                                            <button class="btn btn-flush" type="button"><i class="material-icons">tag_faces</i>
                                            </button>
                                        </div>
                                        <div class="input-group-text pl-0">
                                            <div class="custom-file custom-file-naked d-flex"
                                                 style="width: 24px; overflow: hidden;">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" style="color: inherit;"
                                                       for="customFile">
                                                    <i class="material-icons">attach_file</i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group-text pl-0">
                                            <button class="btn btn-flush" type="button"><i
                                                    class="material-icons">send</i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- <div class="mb-heading">
    <h4 class="card-title">Sales today</h4>
    <p class="card-subtitle">by course</p>
  </div>

  <div class="card">
    <ul class="list-group list-group-flush mb-0">
      <li class="list-group-item">
        <div class="media align-items-center">
          <div class="media-body">
            <a href="instructor-edit-course.html" class="text-body"><strong>Basics of HTML</strong></a>
          </div>
          <div class="media-right">
            <div class="text-center">
              <span class="badge badge-pill badge-primary">15</span>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="media align-items-center">
          <div class="media-body">
            <a href="instructor-edit-course.html" class="text-body"><strong>Angular in Steps</strong></a>
          </div>
          <div class="media-right">
            <div class="text-center">
              <span class="badge badge-pill badge-success">50</span>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="media align-items-center">
          <div class="media-body">
            <a href="instructor-edit-course.html" class="text-body"><strong>Bootstrap Foundations</strong></a>
          </div>
          <div class="media-right">
            <div class="text-center">
              <span class="badge badge-pill badge-warning">14</span>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="media align-items-center">
          <div class="media-body">
            <a href="instructor-edit-course.html" class="text-body"><strong>GitHub Basics</strong></a>
          </div>
          <div class="media-right">
            <div class="text-center">
              <span class="badge badge-pill badge-danger ">14</span>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div> -->

                </div>
            </div>

        </div>


    </div>
    <!-- // END Header Layout Content -->


@endsection
