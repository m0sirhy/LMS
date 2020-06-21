@extends('layouts.dashboard.instructors.app')
@section('content')

<!-- Body Start -->
<div class="wrapper">
    <div class="sa4d25">
        <div class="container-fluid">			
            <div class="row">
                <div class="col-lg-12">	
                    <h2 class="st_title"><i class="uil uil-star"></i> All Review</h2>
                </div>					
            </div>				
            <div class="row">
                <div class="col-12">						
                    <div class="student_reviews">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="reviews_left">
                                    <h3>My All Feedback</h3>
                                    <div class="total_rating">
                                        <div class="_rate001">4.6</div>														
                                        <div class="rating-box">
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star half-star"></span>
                                        </div>
                                        <div class="_rate002">All Rating</div>	
                                    </div>
                                    <div class="_rate003">
                                        <div class="_rate004">
                                            <div class="progress progress1">
                                                <div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-box">
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                            </div>
                                            <div class="_rate002">70%</div>
                                        </div>
                                        <div class="_rate004">
                                            <div class="progress progress1">
                                                <div class="progress-bar w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-box">
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star empty-star"></span>
                                            </div>
                                            <div class="_rate002">40%</div>
                                        </div>
                                        <div class="_rate004">
                                            <div class="progress progress1">
                                                <div class="progress-bar w-5" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-box">
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star empty-star"></span>
                                                <span class="rating-star empty-star"></span>
                                            </div>
                                            <div class="_rate002">5%</div>
                                        </div>
                                        <div class="_rate004">
                                            <div class="progress progress1">
                                                <div class="progress-bar w-2" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-box">
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star empty-star"></span>
                                                <span class="rating-star empty-star"></span>
                                                <span class="rating-star empty-star"></span>
                                            </div>
                                            <div class="_rate002">1%</div>
                                        </div>
                                        <div class="_rate004">
                                            <div class="progress progress1">
                                                <div class="progress-bar w-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="rating-box">
                                                <span class="rating-star full-star"></span>
                                                <span class="rating-star empty-star"></span>
                                                <span class="rating-star empty-star"></span>
                                                <span class="rating-star empty-star"></span>
                                                <span class="rating-star empty-star"></span>
                                            </div>
                                            <div class="_rate002">1%</div>
                                        </div>
                                    </div>
                                </div>												
                            </div>
                            <div class="col-lg-7">
                                <div class="review_right">
                                    <div class="review_right_heading">
                                        <h3>My All Reviews</h3>
                                        <div class="review_search">
                                            <input class="rv_srch" type="text" placeholder="Search reviews...">
                                            <button class="rvsrch_btn"><i class="uil uil-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="review_all120">
                                    <div class="review_item_course_title">
                                        <a href="#">Course Title Here</a>
                                    </div>
                                    <div class="review_item">
                                        <div class="review_usr_dt">
                                            <img src="images/left-imgs/img-1.jpg" alt="">
                                            <div class="rv1458">
                                                <h4 class="tutor_name1">John Doe</h4>
                                                <span class="time_145">2 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="rating-box mt-20">
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star half-star"></span>
                                        </div>
                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                    </div>
                                </div>
                                <div class="review_all120 mt-30">
                                    <div class="review_item_course_title">
                                        <a href="#">Course Title Here</a>
                                    </div>
                                    <div class="review_item">
                                        <div class="review_usr_dt">
                                            <img src="images/left-imgs/img-1.jpg" alt="">
                                            <div class="rv1458">
                                                <h4 class="tutor_name1">John Doe</h4>
                                                <span class="time_145">2 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="rating-box mt-20">
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star half-star"></span>
                                        </div>
                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                    </div>
                                </div>
                                <div class="review_all120 mt-30">
                                    <div class="review_item_course_title">
                                        <a href="#">Course Title Here</a>
                                    </div>
                                    <div class="review_item">
                                        <div class="review_usr_dt">
                                            <img src="images/left-imgs/img-1.jpg" alt="">
                                            <div class="rv1458">
                                                <h4 class="tutor_name1">John Doe</h4>
                                                <span class="time_145">5 hour ago</span>
                                            </div>
                                        </div>
                                        <div class="rating-box mt-20">
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star full-star"></span>
                                            <span class="rating-star half-star"></span>
                                        </div>
                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-40">
        <div class="container-fluid">
            <div class="row">					
                <div class="col-lg-12">
                    <div class="item_f1">
                        <a href="terms_of_use.html">Copyright Policy</a>
                        <a href="terms_of_use.html">Terms</a>
                        <a href="terms_of_use.html">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="footer_bottm">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="fotb_left">
                                    <li>
                                        <a href="index.html">
                                            <div class="footer_logo">
                                                <img src="images/logo1.svg" alt="">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="edu_social_links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>				
        </div>
    </footer>
</div>
<!-- Body End -->
@endsection