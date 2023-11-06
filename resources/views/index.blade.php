@extends('layouts.template')

@section('title')
Online Courses & Education Template
@endsection

@section('content')

<!-- banner-area -->
<section class="banner-area-two banner-bg-two" data-background="assets/img/banner/banner_bg02.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner__content-two">
                    <img src="assets/img/banner/banner_shape02.png" alt="shape" class="shape" data-aos="zoom-in-right" data-aos-delay="1200">
                    <h3 class="title tg-svg">Explore Your <span class="position-relative"><span class="svg-icon" id="svg-2" data-svg-icon="assets/img/icons/title_shape.svg"></span>Skills</span> With Varieties of Courses</h3>
                    <div class="banner__search-form">
                        <form action="#">
                            <input type="text" placeholder="Search For Course . . .">
                            <button><i class="flaticon-searching fa-flip-horizontal"></i></button>
                        </form>
                        <p><a href="courses.html">You can access 7,900+ different courses</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner__images-two">
                    <img src="assets/img/banner/banner_shape03.png" alt="shape" class="shape" data-aos="zoom-in-down" data-aos-delay="800">
                    <img src="assets/img/banner/banner_shape04.png" alt="shape" class="shape" data-aos="zoom-in-left" data-aos-delay="1200">
                    <div class="banner__images-grid">
                        <div class="banner__images-col" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/banner/banner_img01.png" alt="img">
                        </div>
                        <div class="banner__images-col">
                            <img src="assets/img/banner/banner_img02.png" alt="img" data-aos="fade-left" data-aos-delay="300">
                            <img src="assets/img/banner/banner_img03.png" alt="img" data-aos="fade-left" data-aos-delay="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/img/banner/banner_shape01.png" alt="shape" class="banner__two-shape alltuchtopdown">
</section>
<!-- banner-area-end -->



<!-- fact-area -->
<section class="fact-area position-relative section-pt-120 section-pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="fact__item text-center" style="background-color: #F6F8FC;">
                    <div class="fact__content">
                        <h3 class="count"><span class="odometer" data-count="12"></span>K+</h3>
                        <p>Experience Tutors</p>
                    </div>
                    <div class="fact__img">
                        <img src="assets/img/others/fact_img01.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="fact__item text-center" style="background-color: #FCF6F6;">
                    <div class="fact__content">
                        <h3 class="count"><span class="odometer" data-count="15"></span>M+</h3>
                        <p>Enrolled Students</p>
                    </div>
                    <div class="fact__img">
                        <img src="assets/img/others/fact_img02.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="fact__item text-center" style="background-color: #EAF8ED;">
                    <div class="fact__content">
                        <h3 class="count"><span class="odometer" data-count="10"></span>K+</h3>
                        <p>Qualified Courses</p>
                    </div>
                    <div class="fact__img">
                        <img src="assets/img/others/fact_img03.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fact__shapes">
        <div class="categories__shapes-item rotateme">
            <img src="assets/img/objects/categories_shape01.png" alt="shape">
        </div>
    </div>
</section>
<!-- fact-area-end -->


<section class="courses-area section-pt-120 section-pb-90">
    <div class="container">
        <div class="section__title-wrap">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="section__title text-center text-lg-start">
                        <span class="sub-title">10,000+ Unique Online Courses</span>
                        <h2 class="title tg-svg">Our <span class="position-relative"><span class="svg-icon" id="svg-4" data-svg-icon="assets/img/icons/title_shape.svg"></span>Featured</span> Courses</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="courses__nav-active">
                        <button class="active" data-filter="*">All Courses <span>New</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row courses-active row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1">
            @foreach ($formations as $formation)     
                <div class="col grid-item cat-two cat-three">
                            <div class="courses__item-two shine__animate-item">
                                <div class="courses__item-two-thumb">
                                    <a href="/courses-details/{{$formation->ID_Formation}}" class="shine__animate-link">
                                        <img src='{{asset('assets2/lms/img/'.$formation->image)}}'>
                                    </a>
                                    <div class="course__price">
                                        <svg viewBox="0 0 104 34" fill="none" x="0px" y="0px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.5689 2.56089L0 34H99C101.761 34 104 31.7614 104 29V0H21.9336C20.1223 0 18.4525 0.979667 17.5689 2.56089Z" fill="currentColor"/>
                                        </svg>
                                        <h3 class="price">{{$formation->prix}} CFA</h3>
                                    </div>
                                </div>
                                <div class="courses__item-two-content">
                                    <a href="#" class="courses__item-tag" style="background-color: #E8F9EF; color: #04BC53;">{{$formation->Nom_Categorie}}</a>
                                    <h5 class="title"><a href="/courses-details/{{$formation->ID_Formation}}"> <strong>{{$formation->titre}}</strong></a></h5>
                                    <ul class="courses__item-meta list-wrap">
                                        <li><i class="flaticon-file"></i>{{$formation->chapitre}}</li>
                                        <li><i class="flaticon-timer"></i>{{$formation->heure}}</li>
                                        <li><i class="flaticon-user-1"></i>{{$formation->studentLesson}}</li>
                                    </ul>
                                    <div class="courses__item-bottom">
                                        <div class="author">
                                            <a href="#">
                                                <img src='{{asset('assets2/lms/authors/'.$formation->author_image)}}'>
                                            </a>
                                            <a href="#">{{ $formation->Nom_formateur }}</a>
                                        </div>
                                        <div class="courses__item-rating">
                                            <i class="fas fa-star"></i>
                                            <span class="rating-count">({{ $formation->ratenote }})</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                @endforeach
        </div>
    </div>
</section>

    </div>
    <div class="courses__shapes">
        <div class="courses__shapes-item alltuchtopdown"><img src="assets/img/courses/course_shape01.png" alt="shape"></div>
        <div class="courses__shapes-item alltuchtopdown"><img src="assets/img/courses/course_shape02.png" alt="shape"></div>
    </div>
</section>
<!-- course-area-end -->


    <!-- testimonial-area -->
    <section class="testimonial-area position-relative section-pt-120 section-pb-57">
        <div class="container">
            <div class="testimonial__wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-8">
                        <div class="section__title text-center">
                            <span class="sub-title">Our Testimonials</span>
                            <h2 class="title tg-svg">What’s Our <span class="position-relative"><span class="svg-icon" id="testimonial-svg" data-svg-icon="assets/img/icons/title_shape.svg"></span>Student</span> Think</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11">
                        <div class="testimonial-active">
                            <div class="testimonial__item">
                                <div class="testimonial__quote">
                                    <img src="assets/img/icons/quote02.png" alt="icon">
                                </div>
                                <div class="testimonial__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“ when an unknown printer took a galley type and scrambled atype specimen book. It has survived not centuries leapelectronic types essentially unchanged. “</p>
                                <div class="testimonial__avatar">
                                    <h4 class="name">Parker Robert</h4>
                                    <span class="designation">UI Designer</span>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__quote">
                                    <img src="assets/img/icons/quote02.png" alt="icon">
                                </div>
                                <div class="testimonial__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>“ when an unknown printer took a galley type and scrambled atype specimen book. It has survived not centuries leapelectronic types essentially unchanged. “</p>
                                <div class="testimonial__avatar">
                                    <h4 class="name">Harry Protar</h4>
                                    <span class="designation">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__avatars">
                    <img src="assets/img/others/testi01.png" alt="img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/others/testi02.png" alt="img" data-aos="zoom-in" data-aos-delay="300">
                    <img src="assets/img/others/testi03.png" alt="img" data-aos="zoom-in" data-aos-delay="400">
                    <img src="assets/img/others/testi04.png" alt="img" data-aos="zoom-in" data-aos-delay="500">
                    <img src="assets/img/others/testi05.png" alt="img" data-aos="zoom-in" data-aos-delay="600">
                    <img src="assets/img/others/testi06.png" alt="img" data-aos="zoom-in" data-aos-delay="700">
                </div>
            </div>
        </div>
        <div class="testimonial__shapes-two">
            <img class="object" src="assets/img/objects/blog_shape01.png" width="97" alt="Object">
            <img class="object rotateme" src="assets/img/objects/blog_shape02.png" width="66" alt="Object">
        </div>
    </section>
    <!-- testimonial-area-end -->

    <div class="brand-area-two">
        <div class="container">
            <div class="row brand-active">
                <div class="col">
                    <div class="brand__item">
                        <a href="#"><img src="assets/img/brand/brand01.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item">
                        <a href="#"><img src="assets/img/brand/brand02.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item">
                        <a href="#"><img src="assets/img/brand/brand03.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item">
                        <a href="#"><img src="assets/img/brand/brand04.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item">
                        <a href="#"><img src="assets/img/brand/brand05.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item">
                        <a href="#"><img src="assets/img/brand/brand06.png" alt="brand"></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item">
                        <a href="#"><img src="assets/img/brand/brand07.png" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- cta-area -->
<section class="cta-area-three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta__wrapper">
                    <div class="section__title white-title">
                        <h2 class="title tg-svg">Join us & <span class="position-relative"><span class="svg-icon" id="svg-9" data-svg-icon="assets/img/icons/title_shape.svg"></span>Spread</span> Experiences</h2>
                    </div>
                    <div class="cta__desc">
                        <p>Borem ipsum dolor sit amet, consectetur adipiscing eliawe awUt elit ellus, luctus nec ullamcorper mattisBorem</p>
                    </div>
                    <div class="tg-button-wrap justify-content-center justify-content-md-end">
                        <a href="contact.html" class="btn white-btn tg-svg"><span class="text">Become an Instructor</span> <span class="svg-icon" id="cta-btn" data-svg-icon="assets/img/icons/btn-arrow.svg"></span></a>
                    </div>
                    <img class="object" src="assets/img/objects/cta_shape01.svg" style="left: 25px; top: -35px;" alt="Object" data-aos="fade-down" data-aos-delay="400">
                    <img class="object" src="assets/img/objects/cta_shape02.svg" style="right: -20px; bottom: -80px;" alt="Object" data-aos="fade-up" data-aos-delay="400">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-area-end -->

@endsection