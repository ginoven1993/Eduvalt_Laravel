@extends('layouts.template')

@section('title')
Courses details
@endsection

@section('content')
        <section class="courses__breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" >
                        <div class="courses__breadcrumb-content">
                            <a href="#" class="category">{{$details->Nom_Categorie}}</a>
                            <h3 class="title">{{$details->titre}}</h3>
                            <p>{{$details->firstDescrip}}</p>
                            <ul class="courses__item-meta list-wrap">
                                <li>
                                    <div class="author">
                                        <a href="#">
                                            <img src='{{asset('assets2/lms/authors/'.$details->author_image)}}' style='width:70px; height:70px;'>
                                        </a>
                                        <a href="#">{{$details->Nom_formateur}}</a>
                                    </div>
                                </li>
                                <li><i class="flaticon-file"></i>{{$details->chapitre}}</li>
                                <li><i class="flaticon-timer"></i>{{$details->heure}}</li>
                                <li><i class="flaticon-user-1"></i>{{$details->studentLesson}}</li>
                                <li>
                                    <div class="rating">
                                        <img src='{{asset('assets2/lms/rate/'.$details->rate)}}' style='width:150px; height:30px;'>
                                        <span class="rating-count">({{ $details->ratenote }})</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

        <section class="courses-details-area section-pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="courses__details-wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">Aperçu</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    <div class="courses__details-content">

                                        <h3 class="title"></h3>
                                        <p>{{$details->Descriptionc}}</p>
                                        <div class="courses__details-inner">
                                            <h3 class="title">Méthodologie</h3>
                                            <p>{{$details->Descriptiond}}</p>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="courses__details-instructors">
                                        <h4 class="title"></h4>
                                        <div class="courses__instructors-list">
                                            <div class="courses__instructors-item">
                                                <div class="courses__instructors-thumb">
                                                       <img src="{{asset('assets2/lms/rate/'.$details->rate)}}">
                                                </div>
                                                <div class="courses__instructors-content">
                                                    <h5 class="name"><a href="instructor-details.html">{{$details->Nom_formateur}}</a></h5>
                                                    <span class="designation">{{$details->formateur_title}}</span>
                                                    <ul class="meta list-wrap d-flex flex-wrap">
                                                        <li><i class="flaticon-user-1"></i> {{$details->studentTeacher}} Apprenants</li>
                                                    </ul>
                                                    <p> {{$details->long_bio}}</p>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="courses__details-curriculum">
                                        <h4 class="title"></h4>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Introduction
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul class="list-wrap">
                                                            @if (isset($details->chapterone)&& ($details->timeone)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chapterone}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timeone}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if (isset($details->chaptertwo)&& ($details->timetwo)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chaptertwo}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timetwo}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if (isset($details->chapterthree)&& ($details->timethree)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chapterthree}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timethree}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if (isset($details->chapterfour)&& ($details->timefour)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chapterfour}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timefour}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>                                               
                                                            @endif
                                                            @if (isset($details->chapterfive)&& ($details->timefive)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chapterfive}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timefive}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            
                                                            @endif
                                                            @if (isset($details->chaptersix)&& ($details->timesix)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chaptersix}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timesix}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>                                              
                                                            @endif
                                                            @if (isset($details->chapterseven)&& ($details->timeseven)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chapterseven}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timeseven}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if (isset($details->chaptereight)&& ($details->timeeight)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chaptereight}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timeeight}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if (isset($details->chapternine)&& ($details->timenine)) 
                                                                <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chapternine}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timenine}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                            @if (isset($details->chapterten)&& ($details->timeten)) 
                                                            <li class="course-item">
                                                                    <a href="#" class="course-item-link">
                                                                        <span class="item-name">{{$details->chapterten}}</span>
                                                                        <div class="course-item-meta">
                                                                            <span class="item-meta duration">{{$details->timeten}}</span>
                                                                            <span class="item-meta course-item-status">
                                                                                <img src="assets/img/icons/lock.svg" alt="icon">
                                                                            </span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4">
                        <aside class="courses__details-sidebar">
                            <div class="event-widget">
                                <div class="thumb">
                                    <img src="{{asset('assets2/lms/img/'.$details->image)}}">
                                    <a class="popup-video" href="{{asset('assets2/lms/videos/'.$details->video)}}"><video src="" controls><i class="fas fa-play"></i></video></a>
                                </div>
                                <div class="event-cost-wrap">
                                    <h4 class="price"><strong>Prix:</strong>{{$details->prix}} CFA</h4>
                                    <a  class="btn" href="{{route('add_to_cart', $details->ID_Formation)}}">Joindre ce cours</a>
                                    <div class="event-information-wrap">
                                        <ul class="list-wrap">
                                            <li><i class="flaticon-timer"></i>Durée <span>{{$details->heure}}</span></li>
                                            <li><i class="flaticon-file"></i>Chapitre <span>{{$details->chapitre}}</span></li>
                                            <li><i class="flaticon-user-1"></i>Etudiants <span>{{$details->studentLesson}}</span></li>
                                            <li><i class="flaticon-bars"></i>Langue <span>{{$details->langue}}</span></li>
                                            <li><i class="flaticon-flash"></i>Categorie <span>{{$details->Nom_Categorie}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-widget">
                                <h4 class="widget-title">Related Courses</h4>
                                @foreach ($relates as $relate)
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="course-details.html">
                                                <img src="{{asset('assets2/lms/img/'.$relate->image)}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h4 class="title"><a href="course-details.html">{{$relate->titre}}</a></h4>
                                            <span class="price">{{$relate->prix}} FCFA</span>
                                        </div>
                                    </div>
                                @endforeach                             
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

@endsection