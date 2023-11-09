@extends('layouts.template')
@section('title')
Upload Courses
@endsection
@section('content')

  <!-- breadcrumb-area -->
  <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h3 class="title">Contact With Us</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index-2.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Contact</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<section class="contact-area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info-wrap">
                    <h2 class="title">Keep In Touch With Us</h2>
                    <p>Neque convallis cras semper auctor. Libero id faucibus getnvallis.id faucibus nisl tincidunt egetnvallis.</p>
                    <ul class="list-wrap">
                        <li>
                            <div class="icon">
                                <i class="flaticon-pin-1"></i>
                            </div>
                            <div class="content">
                                <p>68 Street Holakt Street world <br> 10002 New York</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="content">
                                <a href="tel:0123456789">+123 555 69090</a>
                                <a href="tel:0123456789">+123 555 69090</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="content">
                                <a href="mailto:info@gmail.com">info@gmail.com</a>
                                <a href="mailto:info@gmail.com">info@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-wrap">
                    <h4 class="title">Get in Touch</h4>
                    <form  action="{{route('store.courses')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <select id="formateur" name="ID_Formateur">
                                        @foreach ($formateurs as $formateur)    
                                                <option value="{{$formateur->ID_Formateur}}">{{$formateur->Nom_formateur}}</option>   
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="Titre" type="text" placeholder="Titre *" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="Heure" type="text" placeholder="Durée*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapitre" type="text" placeholder="Nombre de chapitre *" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="Prix" type="text" placeholder="Prix *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="langue" type="text" placeholder="Langue *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <select id="category" name="ID_Categorie">
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->ID_Categorie}}">{{$categorie->Nom_Categorie}}</option>         
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="Descriptionp" type="text" placeholder="Description *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="images" type="file" placeholder="Image *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="videos" type="file" placeholder="video *" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grp">
                                    <input name="authors" type="file" placeholder="auth *" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grp">
                                    <input name="rates" type="file" placeholder="auth *" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grp">
                                    <input name="ratenote" type="text" placeholder="Note*" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="studentLesson" type="text" placeholder="Apprenants du cours*" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="studentTeacher" type="text" placeholder="Apprenants du prof*" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapterone" type="text" placeholder="1er chapitre*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timeone" type="text" placeholder="Temps *" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chaptertwo" type="text" placeholder="2eme chapitre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timetwo" type="text" placeholder="Temps*" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapterthree" type="text" placeholder="3eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timethree" type="text" placeholder="Temps*" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapterfour" type="text" placeholder="4eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timefour" type="text" placeholder="Temps*" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapterfive" type="text" placeholder="5eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timefive" type="text" placeholder="Temps*" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chaptersix" type="text" placeholder="6eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timesix" type="text" placeholder="Temps*" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapterseven" type="text" placeholder="7eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timeseven" type="text" placeholder="Temps*" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chaptereight" type="text" placeholder="8eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timeeight" type="text" placeholder="Temps*" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapternine" type="text" placeholder="9eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timenine" type="text" placeholder="Temps*" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="chapterten" type="text" placeholder="10eme chapitre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <input name="timeten" type="text" placeholder="Temps*" >
                                </div>
                            </div>
                        </div>
                        <div class="form-grp">
                            <textarea name="Descriptionc" placeholder="first descrip" required></textarea>
                        </div>

                        <div class="form-grp">
                            <textarea name="Descriptiond" placeholder="2eme descrip" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="form-grp">
                                <input name="courses_video" type="file" placeholder="Deposesr le fichier zip de votre formation" required>
                            </div>
                        </div>

                        <button type="submit" class="btn" name="submit">Soumettre</button>
                    </form>
                    <p class="ajax-response mb-0"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

<!-- contact-map -->
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48409.69813174607!2d-74.05163325136718!3d40.68264649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1684309529719!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- contact-map-end -->


@endsection