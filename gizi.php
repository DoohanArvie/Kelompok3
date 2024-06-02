<!DOCTYPE HTML>
<html lang="en">

<head>

  <style>
     /* CSS untuk overlay background */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        /* CSS untuk kotak alert */
        .alert-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

         /* CSS untuk tombol */
         button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }
        
  </style>
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
  <h1 align="center">Program Diet</h1>
  <h2 align="center">30 Hari</h2>
  <h2 align="center">Mulailah hidup sehat dari sekarang!</h2>
  <div class="btn-group" align="center">
  <button type="button" class="btn btn-primary" onclick="showAlert('day1')">Day 1</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day2')">Day 2</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day3')">Day 3</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day4')">Day 4</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day5')">Day 5</button>
</div>

<div class="btn-group" align="center">
  <button type="button" class="btn btn-primary" onclick="showAlert('day6')">Day 6</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day7')">Day 7</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day8')">Day 8</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day9')">Day 9</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day10')">Day 10</button>
</div>

<div class="btn-group" align="center">
  <button type="button" class="btn btn-primary" onclick="showAlert('day11')">Day 11</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day12')">Day 12</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day13')">Day 13</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day14')">Day 14</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day15')">Day 15</button>
</div>

<div class="btn-group" align="center">
  <button type="button" class="btn btn-primary" onclick="showAlert('day16')">Day 16</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day17')">Day 17</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day18')">Day 18</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day19')">Day 19</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day20')">Day 20</button>
</div>

<div class="btn-group" align="center">
  <button type="button" class="btn btn-primary" onclick="showAlert('day21')">Day 21</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day22')">Day 22</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day23')">Day 23</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day24')">Day 24</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day25')">Day 25</button>
</div>

<div class="btn-group" align="center">
  <button type="button" class="btn btn-primary" onclick="showAlert('day26')">Day 26</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day27')">Day 27</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day28')">Day 28</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day29')">Day 29</button>
  <button type="button" class="btn btn-primary" onclick="showAlert('day30')">Day 30</button>
</div>

<div class="overlay" id="overlay"></div>

<div class="alert-box" id="day1">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Kacang pohon apa saja tanpa garam</li>
    <li>1 potong keju (asin atau rendah lemak leih baik)</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>2 potong roti panggang gandum utuh dengan sayuran (bawang bombai,tomat, daun selada,dan sebagainya)</li>
    <li>daging tanpa lemak apa saja(panggang atau rebus)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Selada Ayam (dada ayam,panggang atau rebus, dengan buah atau sayuran)</li>
  </ul>
  <button onclick="closeAlert('day1')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day2">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering(rendah gula atau bebas gula akan lebih baik)</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>selada sayuran(wortel,tomat,paprika,mentimun dan lainnya)</li>
    <li>Yoghurt(rendah lemak atau gula lebih baik)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Sup sayuran tanpa garam</li>
    <li>Seafood apa saja(panggang atau rebus)</li>
  </ul>
  <button onclick="closeAlert('day2')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day3">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt(rendah lemak atau gula akan lebih baik)</li>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Nasi merah atau mie rebus</li>
    <li>Sayuran matang atau rebus(asparagus,brokoli, kembang kol,zukini dan lainnya)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>3 kentang panggang atau rebus.</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day3')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day4">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>2 potong roti panggang gandum utuh dengan sayuran</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt bebas lemak atau susu dengan buah buni</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Blueberry, arbei, rasberi, blackberry</li>
    <li>Seafood yang dipanggang atau direbus</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Jagung rebus.</li>
    <li>Selada Ayam(dada ayam, panggang atau rebus dengan buah atau sayuran)</li>
  </ul>
  <button onclick="closeAlert('day4')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day5">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>2 telur orak arik(tanpa mentega atau minyak)</li>
    <li>1 potong roti panggang gandum utuh</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>kacang pohon tanpa garam</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>1 jeruk</li>
    <li>kacang panggang(kedelai,lentil,merah dan sebagainya)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>smoothie atau yoghurt rendah lemak.</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day5')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day6">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt bebas lemak atau susu dengan buah buni</li>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>2 potong roti panggang dengan sayuran</li>
    <li>sayuran rebus(bayam jepang, asparagus, brokoli dan lain lain)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>salad buah.</li>
    <li>seafood panggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day6')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day7">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>jagung rebus dengan sayuran</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering bebas gula</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>telur dadar (3 pcs) dan sayuran</li>
    <li>yoghurt rendah lemak dan gula</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>salad sayur</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day7')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day8">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>2 potong roti panggang dengan sayuran</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt bebas lemak atau susu dengan buah buni</li>
    <li>1 potong keju rendah lemak atau asin lebih baik</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Nasi merah atau mie rebus</li>
    <li>3 kentang panggang atau rebus.</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>sup sayur tanpa garam.</li>
    <li>Kacang panggang(kacang kedelai, kacang lentil, kacang hitam dan sebagainya)</li>
  </ul>
  <button onclick="closeAlert('day8')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day9">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering rendah gula atau bebas gula lebih baik</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>salad sayur</li>
    <li>daging tanpa lemak yang direbus atau dipanggang.</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>salad ayam(dada ayam yang dipanggang, dengan buah atau sayuran)</li>
  </ul>
  <button onclick="closeAlert('day9')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day10">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>1 jagung rebus dengan sayuran apapun yang anda suka</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>smoothie atau yoghurt rendah lemak</li>
    <li>Kacang panggang(kacang kedelai, kacang lentil, kacang hitam dan sebagainya)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>1 porsi buah(apel, pir, pisang, jeruk)</li>
    <li>Seafood yang dipanggang atau direbus</li>
  </ul>
  <button onclick="closeAlert('day10')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day11">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>2 telur orak arik tanpa mentega tau minyak</li>
    <li>2 potong roti panggang dengan sayuran</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt(rendah lemak atau gula akan lebih baik)</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Blueberry,arbei, rasberi, blackberry</li>
    <li>Sayuran matang atau rebus(asparagus,brokoli, kembang kol,zukini dan lainnya)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>1 kue kering rendah gula atau bebas gula akan lebih baik</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day11')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day12">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
    <li> 2 telur orak arik tanpa minyak atau mentega</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Kacang pohon tanpa garam</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Nasi merah atau mie rebus</li>
    <li>Sup sayur tanpa garam</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>1 pisang atau jeruk</li>
    <li>Salad ayam(dada ayam yang direbus atau dipanggang, dengan buah atau sayuran).</li>
  </ul>
  <button onclick="closeAlert('day12')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day13">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>telur dadar dari 3 buah telur dan sayuran</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering yang rendag gula</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>smoothie atau yoghurt rendah lemak</li>
    <li>Sayuran matang atau rebus(asparagus,brokoli, kembang kol,zukini dan lainnya)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Sup sayur tanpa garam</li>
    <li>Seafood yang dipanggang atau direbus</li>
  </ul>
  <button onclick="closeAlert('day13')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day14">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Kacang pohon tanpa garam</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Yoghurt rendah lemak</li>
    <li>Salad ayam(dada ayam panggang atau rebus, dengan buah atau sayur)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>telur dadar dari 3 buah telur dan sayuran</li>
    <li>3 kentang panggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day14')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day15">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu.</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering rendah gula</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>havermut dengan susu bebas lemak.</li>
    <li>smoothie atau yoghurt yang rendah lemak</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>yoghurt rendah lemak.</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day15')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day16">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>1 potong roti panggang</li>
    <li>1 buah pisang atau jeruk</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt bebas lemak atau susu dengan buah buni</li>
    <li>1 kue kering rendah gula</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>havermut dengan susu bebas lemak</li>
    <li>kacang panggang.</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>sup sayur tanpa garam</li>
    <li>salad ayam(dada ayam yang dipanggang atau rebus, dengan buah atau sayuran)</li>
  </ul>
  <button onclick="closeAlert('day16')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day17">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>Telur dadar dari 3 buah telur dan sayuran</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering rendah gula</li>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Nasi merah atau mie rebus</li>
    <li>sayur rebus(asparagus, brokoli, zukini, bayam jepang)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>salad buah(apel, pir, pisang, jeruk)</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day17')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day18">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>havermut dengan susu bebas lemak.</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>jagung rebus.</li>
    <li>kacang pohon tanpa garam</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>bubur havermut</li>
    <li>blueerry, arbei, rasberi, blackberry</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>salad sayur.</li>
    <li>seafood yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day18')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day19">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>jagung rebus dengan sayuran apa saja</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt(rendah lemak atau gula akan lebih baik)</li>
    <li>1 potong keju rendah lemak</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>telur dadar dari 3 buah telur dan sayuran</li>
    <li>Daging tanpa lemak yang dipanggang atau direbus</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Sayur rebus(asparagus, brokoli, zukini, bayam jepang).</li>
    <li>Yoghurt bebas lemak atau susu dengan buah buni.</li>
  </ul>
  <button onclick="closeAlert('day19')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day20">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>2 telur orak arik tanpa minyak atau mentega</li>
    <li>havermut dengan susu bebas lemak</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Bubur havermut</li>
    <li>1 kue kering rendah gula.</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>3 kentang panggang atau rebus.</li>
    <li>Salad ayam( dada ayam panggang atau rebus, dengan buah atau sayuran)</li>
  </ul>
  <button onclick="closeAlert('day20')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day21">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>Jagung rebus dengan sayuran apa saja</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>2 potong roti panggang dengan sayuran.</li>
    <li>Salad buah</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Yoghurt bebas lemak atau susu dengan buah buni.</li>
    <li>seafood yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day21')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day22">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Kacang pohon tanpa garam</li>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Havermut dengan susu bebas lemak.</li>
    <li>Salad ayam( dada ayam yang dipanggang atau rebus, dengan buah atau sayur)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>1 buah pisang atau jeruk</li>
    <li>salad sayur(wortel, tomat, paprika, mentimun)</li>
    <li>Yoghurt rendah lemak</li>
  </ul>
  <button onclick="closeAlert('day22')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day23">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>2 telur orak arik tanpa minyak atau mentega</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering rendah gula</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Jagung rebus dengan sayuran apa saja.</li>
    <li>Blueberry, arbei, rasberi,blackberry</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Jagung rebus.</li>
    <li>Seafood yang dipanggang atau direbus.</li>
  </ul>
  <button onclick="closeAlert('day23')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day24">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>Havermut dengan susu bebas lemak</li>
    <li>1 buah pisang atau jeruk</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt(rendah lemak atau gula akan lebih baik)</li>
    <li>1 potong keju asin atau rendah lemak</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Nasi merah atau mie rebus</li>
    <li>2 potong roti gandum utuh dengan sayuran</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>salad buah.</li>
    <li>Sayur rebus(asparagus, brokoli, bayam jepang, zukini)</li>
  </ul>
  <button onclick="closeAlert('day24')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day25">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>havermut dengan susu bebas lemak.</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Kacang pohon tanpa garam</li>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>1 buah pisang atau jeruk</li>
    <li>Sayuran matang atau rebus(asparagus,brokoli, kembang kol,zukini dan lainnya)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Smoothie atau yoghurt rendah lemak</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day25')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day26">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>telur dadar dari 3 buah telur dan sayuran.</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering rendah gula</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Nasi merah atau mie rebus</li>
    <li>3 kentang panggang atau rebus.</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>blueberry, arbei, rasberi, blackberry.</li>
    <li>Seafood yang dipanggang atau direbus.</li>
  </ul>
  <button onclick="closeAlert('day26')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day27">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>bubur havermut (oatmeal)</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Yoghurt(rendah lemak atau gula akan lebih baik)</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Havermut dengan susu tanpa lemak</li>
    <li>Daging tanpa lemak yang dipanggang atau direbus</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Salad buah.</li>
    <li>Kacang Panggang(kacang kedelai, kacang lentil, kacang hitam dan sebagainya)</li>
  </ul>
  <button onclick="closeAlert('day27')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day28">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>1 potong roti panggang</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>1 kue kering rendah gula</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Salad buah</li>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>sup sayuran apa saja tanpa garam.</li>
    <li>Salad ayam(dada ayam yang direbus atau dipanggang, dengan buah atau sayuran).</li>
  </ul>
  <button onclick="closeAlert('day28')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day29">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau kopi hitam tanpa gula dan susu</li>
    <li>telur dadar dari 3 buah telur dan sayuran</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Kacang pohon tanpa garam</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Nasi merah atau mie rebus</li>
    <li>Sayuran matang atau rebus(asparagus,brokoli, kembang kol,zukini dan lainnya)</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>1 porsi buah(apel, pir, pisang, jeruk, nanas)</li>
    <li>Daging tanpa lemak yang dipanggang atau rebus.</li>
  </ul>
  <button onclick="closeAlert('day29')">Saya Mengerti</button>
</div>

<div class="alert-box" id="day30">
  <ul>
    <h4>Menu Sarapan</h4>
    <li>1 cangkir teh atau cokelat panas tanpa gula dan susu</li>
    <li>2 telur orak arik tanpa minyak atau mentega</li>
    <li>Havermut dengan susu tanpa lemak</li>
  </ul>
  <ul>
    <h4>Cemilan</h4>
    <li>Jagung rebus</li>
    <li>Hummus atau kentang tumbuk</li>
  </ul>
  <ul>
    <h4>Makan Siang</h4>
    <li>Bubur havermut</li>
    <li>Blueberry, arbei, rasberi, blackberry</li>
  </ul>
  <ul>
    <h4>Makan Malam</h4>
    <li>Sup sayur apa saja tanpa garam.</li>
    <li>Seafood yang dipanggang atau direbus.</li>
  </ul>
  <button onclick="closeAlert('day30')">Saya Mengerti</button>
</div>

<script>
  function showAlert(dayId) {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById(dayId).style.display = 'block';
    }

    function closeAlert(dayId) {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById(dayId).style.display = 'none';
    }
</script>
    
</body>
</html>
