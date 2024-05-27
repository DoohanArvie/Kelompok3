<DOCTYPE HTML>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Kelompok 3 Godzilla FullStack 4">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>Gym and Court App</title>

  <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-training-studio.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Awal Area Header ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/dashboard') }}" class="logo">Training<em> Studio</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#features">Layanan Kami</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Kelas</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Jadwal</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Kontak</a></li> 
                            <li class="main-button"><a href="#">Login</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Akhir Area Header ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('images/gym-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Kekuatan, ketahanan, kebugaran</h6>
                <h2>Semua <em>disini</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Daftar member</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Pilih <em>Layanan</em></h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="waves">
                        <p>Nikmati berbagai program layanan kami untuk menunjang gaya hidup sehat anda</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Basic Fitness</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4>Basic Muscle Course</h4>
                                <p>Credit goes to <a rel="nofollow" href="https://www.pexels.com" target="_blank">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{ asset('images/features-first-icon.png') }}" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Body Building Course</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don't <em>think</em>, begin <em>today</em>!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Daftar Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Jadwal <em>Kelas</em></h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                        <p>Pilih waktu dan sesuaikan jadwal kelasmu dengan berbagai kegiatan harianmu</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li data-tsfilter="Senin">Senin</li>
                            <li data-tsfilter="Selasa">Selasa</li>
                            <li data-tsfilter="Rabu">Rabu</li>
                            <li data-tsfilter="Kamis">Kamis</li>
                            <li data-tsfilter="Jum'at">Jum'at</li>
                            <li data-tsfilter="Sabtu">Sabtu</li>
                            <li data-tsfilter="Minggu">Minggu</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <thead>
                                <tr class="text-center">
                                    <td>Kelas</td>
                                    <td>Trainer</td>
                                    <td>Waktu</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groupedClasses as $day => $classes)
                                    @foreach($classes as $class)                                       
                                            <tr>
                                                <td class="day-time">{{ $class->class_name }}</td>                                                                                  
                                                <td>{{ $class->trainer->name }}</td>
                                                <td class="{{ strtolower($day) }} ts-item carbon" style="border-right:none;">
                                                    {{ \Carbon\Carbon::parse($class->start_time)->format('g:iA') }} - {{ \Carbon\Carbon::parse($class->end_time)->format('g:iA') }}
                                                </td>   
                                            </tr>                                      
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Trainer ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Instruktur <em>Kami</em></h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                        <p>Kami memiliki Instruktur yang profesional dan berpengalaman di bidangnya, memastikan agar Anda mendapatkan kualitas pelatihan terbaik</p>
                    </div>
                </div>
            </div>
            <div class="row">              
                @foreach($trainers as $trainer)
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="{{ $trainer->picture ? asset('storage/trainers/' . $trainer->picture) : asset('images/default-trainer.jpg') }}" alt="">
                            </div>
                            <div class="down-content">
                                <span>{{ $trainer->category }}</span>
                                <h4>{{ $trainer->name }}</h4>
                                <p class="card-text">{{ $trainer->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach                  
            </div>
        </div>
    </section>
    <!-- ***** Trainer Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2024 Kelompok Godzilla
                FullStack 4 Gamelab Indonesia
                </p>
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>


    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
                    
    <!-- Plugins -->
    <!-- ScrollReveal -->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>

    <!-- Waypoints -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>

    <!-- CounterUp -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

    <!-- ImgFix -->
    <script src="{{ asset('js/imgfix.min.js') }}"></script>

    <!-- MixItUp -->
    <script src="{{ asset('js/mixitup.js') }}"></script>

    <!-- Accordions -->
    <script src="{{ asset('js/accordions.js') }}"></script>

   <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</DOCTYPE>