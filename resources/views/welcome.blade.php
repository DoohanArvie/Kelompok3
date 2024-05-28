<DOCTYPE HTML>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Kelompok 3 Godzilla FullStack 4">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <title>Gym and Court App</title>

  <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-training-studio.css') }}">

    <style>
.star {color:orange;
}
.scroll-container {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    scrollbar-width: none; /* For Firefox */
    }

    .scroll-container::-webkit-scrollbar {
        display: none; /* For Chrome, Safari, and Opera */
    }

    .review-card {
        flex: 0 0 auto; /* Prevent flex items from shrinking */
        margin-right: 10px; /* Adjust spacing between cards if needed */
    }
</style>

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
                        <a href="{{ url('/dashboard') }}" class="logo">Godzilla<em>GYM</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#features">Layanan Kami</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Kelas</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Jadwal</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Kontak</a></li> 
                            <li class="main-button"><a href="{{ route('login') }}">Login</a></li>
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
                    <a href="{{ route('register') }}">Daftar member</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="gym-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Profile <em>Gym</em></h2>
                    <img src="{{ asset('images/line-dec.png') }}" alt="waves">
                    <p>Kami didirikan pada tahun 2010 dengan tujuan menyediakan fasilitas kebugaran terbaik bagi komunitas kami. Kami menawarkan berbagai layanan yang dirancang untuk membantu Anda mencapai tujuan kesehatan dan kebugaran Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            <img src="{{ asset('images/features-first-icon.png') }}" alt="Basic Fitness">
                        </div>
                        <div class="right-content">
                            <h4>Basic Fitness</h4>
                            <p>Layanan dasar untuk kebugaran tubuh, mencakup penggunaan peralatan gym modern dan area latihan bebas.</p>
                            <p><strong>Fasilitas:</strong> Ruang gym luas, peralatan kebugaran terbaru, loker, dan ruang ganti.</p>
                            <a href="#" class="text-button">Discover More</a>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{ asset('images/features-first-icon.png') }}" alt="New Gym Training">
                        </div>
                        <div class="right-content">
                            <h4>New Gym Training</h4>
                            <p>Program latihan gym terbaru dengan panduan dari pelatih profesional, dirancang untuk pemula dan mereka yang ingin memulai gaya hidup sehat.</p>
                            <p><strong>Fasilitas:</strong> Sesi konsultasi dengan pelatih, program latihan personal, dan dukungan nutrisi.</p>
                            <a href="#" class="text-button">Discover More</a>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{ asset('images/features-first-icon.png') }}" alt="Basic Muscle Course">
                        </div>
                        <div class="right-content">
                            <h4>Basic Muscle Course</h4>
                            <p>Kursus dasar untuk pembentukan otot dengan panduan intensif dari instruktur berpengalaman.</p>
                            <p><strong>Fasilitas:</strong> Area angkat beban, peralatan canggih, dan kelas kelompok kecil.</p>
                            <a href="#" class="text-button">Discover More</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{ asset('images/features-first-icon.png') }}" alt="Advanced Muscle Course">
                        </div>
                        <div class="right-content">
                            <h4>Advanced Muscle Course</h4>
                            <p>Program lanjutan untuk pembentukan otot yang lebih intensif dengan teknik latihan terbaru.</p>
                            <p><strong>Fasilitas:</strong> Sesi pelatihan intensif, pengawasan ketat dari instruktur, dan program diet khusus.</p>
                            <a href="#" class="text-button">Discover More</a>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{ asset('images/features-first-icon.png') }}" alt="Yoga Training">
                        </div>
                        <div class="right-content">
                            <h4>Yoga Training</h4>
                            <p>Kelas yoga untuk berbagai tingkat keahlian yang membantu meningkatkan fleksibilitas dan keseimbangan.</p>
                            <p><strong>Fasilitas:</strong> Studio yoga dengan suasana tenang, matras yoga, dan instruktur berpengalaman.</p>
                            <a href="#" class="text-button">Discover More</a>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{ asset('images/features-first-icon.png') }}" alt="Body Building Course">
                        </div>
                        <div class="right-content">
                            <h4>Body Building Course</h4>
                            <p>Program khusus untuk bodybuilding dengan pelatihan intensif dan panduan nutrisi lengkap.</p>
                            <p><strong>Fasilitas:</strong> Area angkat beban berat, sesi pelatihan personal, dan konsultasi gizi.</p>
                            <a href="#" class="text-button">Discover More</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
        <!-- ***** Fitness Section Starts ***** -->
<section class="section" id="sewa-alat">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Sewa Alat</h2>
                    <img src="{{ asset('images/line-dec.png') }}" alt="waves">
                    <p>Kami menyediakan berbagai peralatan olahraga berkualitas tinggi untuk disewa.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Alat 1 Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/treadmil.jpg') }}" alt="Treadmill">
                    <div class="card-body">
                        <h5 class="card-title">Paket 2 Jam</h5>
                        <p class="card-text">Harga: 30k per jam</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Alat 2 Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/dumbell.jpg') }}" alt="Dumbbell Set">
                    <div class="card-body">
                        <h5 class="card-title">Paket 3 Jam</h5>
                        <p class="card-text">Harga: 40k per jam</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Alat 3 Card -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/bikes.jpg') }}" alt="Exercise Bike">
                    <div class="card-body">
                        <h5 class="card-title">Paket 5 Jam</h5>
                        <p class="card-text">Harga: 50k per jam</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Fitness Section End ***** -->



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
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><em>Kelas</em> Kami</h2>
                        <img src="{{ asset('images/line-dec.png') }}" alt="">
                        <p>Bentuk tubuhmu dan mulai hidup sehat sekarang</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="{{ asset('images/tabs-first-icon.png') }}" alt="">Fitness Class</a></li>
                  <li><a href='#tabs-2'><img src="{{ asset('images/tabs-first-icon.png') }}" alt="">Body Building</a></a></li>
                  <li><a href='#tabs-3'><img src="{{ asset('images/tabs-first-icon.png') }}" alt="">Yoga Training</a></a></li>
                  <div class="main-rounded-button"><a href="#schedule">Lihat Jadwal</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="{{ asset('images/training-image-03.jpg') }}" alt="First Class">
                    <h4>Fitness Class</h4>
                    <p>Kelas ini bertujuan untuk membangun fisik dan jiwa yang sehat, dengan berbagai latihan fisik dan pembimbingan cara hidup dan nutrisi dari trainer berpengalaman</p>
                    <div class="main-button">
                        <a href="#">Daftar Kelas</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="{{ asset('images/training-image-01.jpg') }}" alt="Third Class">
                    <h4>Body Building Class</h4>
                    <p>Kelas ini bertujuan untuk membentuk tubuh impian anda, dengan berbagai latihan fisik yang terstruktur dan dibimbing oleh trainer berpengalaman</p>
                    <div class="main-button">
                        <a href="#">Daftar Kelas</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="{{ asset('images/training-image-04.jpg') }}" alt="Fourth Training">
                    <h4>Yoga Training Class</h4>
                    <p>Kelas ini bertujuan meningkatkan kekuatan tubuh, mengurangi stres, menjaga berat badan ideal dan menjaga kesehatan diri</p>
                    <div class="main-button">
                        <a href="#">Daftar Kelas</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

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


    <!-- ***** Testimonials Starts ***** -->
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
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Ulasan Section Starts ***** -->
    <section class="section" id="ulasan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">Ulasan</h2>
                </div>
            </div>
            <div class="row">
                <div class="scroll-container">
                    @foreach($ulasan as $ulasan)
                    <div class="col-lg-4 review-card">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Rating: 
                                    @for ($i = 0; $i < $ulasan->rating; $i++)
                                        <i class="bx bxs-star star"></i>
                                    @endfor
                                </h5>
                                <p><b>Pengulas: {{ $ulasan->user->name }}</b></p>
                                <p class="card-text">{{ $ulasan->ulasan }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </section>

    <!-- ***** Ulasan Section Ends ***** -->

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
                        <form id="contact" action="https://formspree.io/f/mrgnddaw" method="post">
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

    <script>
          document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.scroll-container');
    let scrollAmount = 0;
    const scrollStep = 1; // Adjust this value to change the scrolling speed

    function scrollHorizontally() {
        scrollAmount += scrollStep;
        if (scrollAmount >= scrollContainer.scrollWidth - scrollContainer.clientWidth) {
            scrollAmount = 0;
        }
        scrollContainer.scrollLeft = scrollAmount;
        requestAnimationFrame(scrollHorizontally);
    }

    scrollHorizontally();
});
    </script>
</body>
</DOCTYPE>