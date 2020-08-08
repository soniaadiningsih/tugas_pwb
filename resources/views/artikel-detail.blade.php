<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail-Artikel</title>


    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/artikel-detail.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- slick -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    <!-- fancybox css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>
<body class="bg-light">
    
    <!-- header -->
    <section class="header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="media">
                    <img src="{{ asset('img/navbar.png') }}" class="mr-3" alt="...">
                    <div class="media-body">
                      <p class="mb-0">Madrasah Ibtidaiyah</p>
                      <h5 class="mt-0">At-Taqwa Bondowoso</h5>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('index') }}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('galeri') }}">Galeri</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('artikel') }}">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <!-- hero -->
    <section class="hero" id="hero">
        <img src="{{ asset('img/hero.png') }}" alt="..." class="img-fluid">
    </section>


    <!-- detail -->
    <section class="detail" id="detail">
        <div class="container">
            <div class="row">
                <div class="badge badge-success">24 Maret<br><span>2020</span></div>
                <h2>Bersiwak dalam pandangan <br> agama dan medis</h2>
            </div>
            <div class="row sosial">
                <small class="user"><i class="fas fa-user mr-2"></i> Azam Najib</small>
                <img src="{{ asset('img/facebook.png') }}" alt="...">
                <img src="{{ asset('img/twitter.png') }}" alt="...">
                <img src="{{ asset('img/link.png') }}" alt="...">
            </div>
            <div class="desc">
                <p>
                    Ida Jamal* <br>

                    Bersiwak termasuk perkara yang disunnahkan dalam agama, karena ia merupakan usaha membersihkan mulut dan orang yang melakukannya akan mendapat keridhaan Allah. Nabi Muhammad saw. bersabda, <br> <br>

                    السِّوَاكُ مُطَهَّرَةٌ لِلْفَمِ مَرْضَاةٌ لِلرَّبِّ­ <br> <br>

                    “Bersiwak adalah membersihkan mulut dan memperoleh keridhaan Allah.” <br> <br>

                    “keutamaan sholat dengan memakai sifak itu 70 kali sebanding dengan sholat tidak memakai siwak” Hadist Riwayat Imam Ahmad <br><br>

                    Sebagian fuqaha mengatakan bahwa para ulama telah satu pendapat, bahwa bersiwak adalah sunnah mu’akkad, karena syara’ sangat menganjurkannya. Rasulullah saw. juga mengamalkannya secara berterusan, serta menganjurkan dan mendorong umatnya untuk melakukannya. <br><br>

                    Bersiwak juga sunnah dilakukan pada waktu berwudhu, yaitu setelah membasuh kedua tangan dan sebelum berkumur, juga bau pada waktu bau mulut atau gigi berubah disebabkan karena tidur, makan, lapar, tidak berbicara pada waktu yang lama, ataupun karena banyak berbicara. Hal ini berdasakan hadits Hudzaifah yang bermaksud,”Apabila Rasulullah saw bangun malam, beliau menggosok mulutnya dengan siwak.” Keadaan lain yang dapat mengubah bau mulut bisa diqiyaskan dengan tidur ini. <br><br>

                    Sebagaimana bersiwak ini sangat perlu jika hendak mendirikan sholat atau disebabkan karena bau mulut yang berubah ataupun disebabkan karena gigi berubah menjadi kuning, maka ia juga sangat perlu jika seseorang itu hendak membaca Al Qur’an, berbicara tentang agama, mempelajari ilmu syara’, berdzikir menyebut nama Allah, bangun tidur, memasuki rumah, ketika dan pada waktu menghadapi kematian(bersiwak dapat memudahkan keluarnya roh, dalam kitab Assyarkhus Shoghir, jilid 1,hlm 126)pada waktu sahur, setelah makan, setelah witir, dan bagi mereka yang berpuasa (untuk melakukannya) sebelum waktu zhuhur (Fathul Qodir,jilid 1 hlm 15) <br><br>

                    <b>Cara bersiwak dan alatnya</b> <br><br>

                    Seseorang boleh bersiwak dengan tangan kanannya dengan memulai dari sebelah kanan yang meliputi gigi sebelah luar dan dalam. Ia digosok secara melintang melintang dari gigi depan, hingga ke gigi geraham. Setelah itu, ke bagian tengah dan sebelah kiri, kemudian digosok juga secara membujur ke bagian lidah. Cara ini berdasakan hadits sayyidah Aisyah, <br><br>

                    أَنَ النَّبِيَّ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ كَانَ يُحِبُّ التَّيَامُنَ فِي تَنَعُّلِهِ وَتَرَجُّلِهِ وَطُهُوْرِهِ وَفِي شَأْنِ كُلِّهِ <br><br>

                    “Nabi Muhammad saw. Sangat suka melakukan sesuatu dari sebelah kanan, baik pada waktu memakai sepatu atau menyisir rambut, dalam bersucidan dalam segala perbuatannya.” <br><br>

                    <b>Faedah Bersiwak</b> <br><br>

                    Para ulama menyebutkan bahwa diantara faedah bersiwak adalah ia dapat membersihkan mulut, mendapatkan keridhaan Allah, memutihakan gigi, mewangikan mulut, mengukuhkan gusi, melambatkan uban, mempercantik rupa, meningkatkankecerdasan, melipatgandakan pahala, memudahkan tercabutnya roh, dapat menyebut kalimat syahadat pada waktu kematian, dan sebagainya yang telah disebutkan oleh al-Hafizh Ibnu Hajar yang berjumlah sebanyak tiga puluh sembilan faedah. <br>

                    Pada masa sekarang, para dokter  juga menasihatkan supaya menggunakan siwak untuk tujuan mengelakkan kerusakan serta kuning gigi, bengkak mulut dan gusi, mengelakkan dari kerusakan yang melibatkan saraf, mata, dan pernafasan. Bahkan, bersiwak juga dapat menghalang dari terjadinya lemah ingatan dan lambat berpikir serta akhlak yang buruk.</p>
                <img src="{{ asset('img/artikel_detail.png') }}" alt="..." class="img-fluid">
                <p>
                <b>Kandungan Kimia Batang Kayu Siwak</b><br><br>

                    Al-Lafi dan Ababneh (1995) melakukan penelitian terhadap kayu siwak dan melaporkan bahwa siwak mengandung mineral-mineral alami yang dapat membunuh dan menghambat pertumbuhan bakteri mengikis plaque, mencegah gigi berlubang serta memelihara gusi. Siwak memiliki kandungan kimiawi yang bermanfaat, meliputi Antibacterial Acids, seperti astringents, abrasive dan detergent yang berfungsi untuk membunuh bakteri, mencegah infeksi, menghentikan pendarahan pada gusi. Penggunaan kayu siwak yang segat pertama kali, akan terasa agak pedas dan sedikit membakar, karena terdapat kandungan serupa mustard yang merupakan substansi antibacterial acid tersebut. Kandungan kimiawi seperti Klorida, Potasium, Sodium Bicarbonate, Fluorida, Silika, Sulfur, Vitamin C, Trimetilamin, Salvadorin, Tannin dan beberapa mineral lainnya yang berfungsi untuk membersihkan gigi, memutihkan dan menyehatkan gigi dan gusi. Bahan-bahan ini sering diekstrak sebagai bahan penyusun pasta gigi. <br><br>

                    Minyak aroma alami yang memliki rasa dan bau yang segar, yang dapat menyegarkan mulut dan menghilangkan bau tidak sedap. Enzim yang mencegah pembentukan plak yang merupakan penyebab radang gusi dan penyebab utama tanggalnya gigi secara prematur. Anti Decay Agent (Zat anti pembusukan) dan Antigermal System, yang bertindak seperti Penicilin menurunkan jumlah bakteri di mulut dan mencegah terjadinya proses pembusukan. Siwak juga turut merangsang produksi saliva, dimana saliva sendiri merupakan organic mulut yang melindungi dan membersihkan mulut. <br><br>

                    Menurut laporan Lewis (1982), pendidikan kimiawi terhadap tanaman ini telah dilakukan semenjak abad ke-19, dan ditemukan sejumlah besar klorida, fluor, trimetilamin dan resin. Kemudian dari hasil penelitian Farooqi dan Srivastava (1990) ditemukan silika, sulfur, dan vitamin C. kandungan kimia tersebut sangat bermanfaat bagi kesehatan gigi mulut dimana trimetilamin dan vitamin C membantu penyebuhan dan perbaikan jaringan gusi. Klorida bermanfaat untuk menghilangkan noda pada gigi, sedangkan silica dapat bereaksi sebagai penggosok. Kemudian keberadaan sulfur dikenal dengan rasa hangat dan baunya yang khas, adapun flourida berguna bagi kesehatan gigi sebagai pencegah terjadinya karies dengan memperkuat lapisan email dan mengurangi larutnya terhadap  asam yang dihasilkan oleh bakteri. <br><br>
                    
                    Beberapa Hujjah Hadits tentang Siwak <br><br>

                    لِقَوْلِهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ : لَوْلَا أَنْ اَشُقَّ عَلَى اُمَّتِي لَأَمَرْتُهُمْ بِالسِّوَاكِ عِنْدَ كُلِّ صَلَاةٍ  وَفِى رِوَايَةٍ لِأَحْمَدَ لَأَمَرْتُهُمْ بِالسِّوَاكِ مَعَ كُلِّ   <br><br>وُضُوْءٍ  رَوَاهُ الْجَمَاعَةُ

                    Berdasarkan hadits Nabi Muhammad saw. “Jika tidak karena (khawatir) memberatkan umatku, maka niscaya aku perintah mereka untuk bersiwak pada setiap hendak melaksanakan sholat.” Imam Ahmad meriwayatkan dengan perkataan yang bermaksud, “Niscaya aku memerintahkan mereka untuk bersiwak dalam setiap hendak wudhu.” Riwayat Jama’ah. <br><br>

                    عَنْ عَائِشَةَ : كَانَ النَّبِيُّ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ إِذَا دَخَلَ بَيْتَهُ بَدَأَ بِالسِّوَاكِ <br><br>

                    Dari Aisyah r.a. dia berkata, “Apabila Nabi Muhammad saw. memasuki rumah, maka Rasul memulakannya dengan bersiwak.” <br><br>

                    وَعَنْ عَائِشَةَ : كَانَ رَسُوْلُ اللهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ لَا يَرْقُدُ مِنْ لَيْلٍ اَوْ نَهَارٍ, فَيَسْتَيْقَظَ, إِلَّا تَسَوَّكَ, قَبْلَ اَنْ يَتَوَضَّأَ رَوَاهُ اَحْمَدُ وَأَبُوْ دَاوُدَ <br><br>

                    Dari Aisyah, ia juga menyebut “Bahwa Rosulullah saw. setiap bangun dari tidurnya baik malam atau siang, beliau tetap bersiwak sebelum berwudhu.” Riwayat Imam Ahmad dan Abu Dawud. <br><br>

                    وَقَوْلُ النَّبِيِّ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ : مِنْ خَيْرِ خِصَالِ الصَّائِمِ السِّوَاكُ  رَوَاهُ ابْنُ مَاجَة عَنْ عَائِشَةَ <br><br>

                    Berdasarkan hadits Nabi Muhammad saw. “Diantara sifat orang berpuasa yang baik adalah bersiwak” Riwayat Ibnu Majah dari Aisyah. <br><br></p>
            </div>
        </div>
    </section>

    <section class="detail-card" id="detail-card">
        <div class="container">
            <h2>Artikel Menarik Lainnya</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card mb-3">
                        <img src="{{ asset('img/card1.png') }}" alt="..." class="img-fluid card-img-top">
                        <div class="card-body">
                            <small class="text-muted mt-0">2020-01-21 16:02:03</small><br>
                            <a href="detail-page.html" class="card-title">Menggabungkan Puasa Rajab dan Puasa Qadla</a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur.</p>
                            <a href="detail-page.html" class="card-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card mb-3">
                        <img src="{{ asset('img/card2.png') }}" alt="..." class="img-fluid card-img-top">
                        <div class="card-body">
                            <small class="text-muted">2020-01-21 16:02:03</small><br>
                            <a href="detail-page.html" class="card-title">Etika Mencari Rizqi</a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id justo pretium, efficitur velit id, gravida massa.</p>
                            <a href="detail-page.html" class="card-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card mb-3">
                        <img src="{{ asset('img/card3.png') }}" alt="..." class="img-fluid card-img-top">
                        <div class="card-body">
                            <small class="text-muted">2020-01-21 16:02:03</small><br>
                            <a href="detail-page.html" class="card-title">Pentingnya Kebersihan</a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id justo pretium, efficitur velit.</p>
                            <a href="detail-page.html" class="card-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card mb-3">
                        <img src="{{ asset('img/card4.png') }}" alt="..." class="img-fluid card-img-top">
                        <div class="card-body">
                            <small class="text-muted">2020-01-21 16:02:03</small><br>
                            <a href="detail-page.html" class="card-title">Amalan 10 Hari Akhir Ramadhan</a>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam fugiat.</p>
                            <a href="detail-page.html" class="card-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 button">
                    <button class="btn btn-success btn-block">Tampilkan Lebih</button>
                </div>
            </div>
        </div>
    </section>

    

    <!-- footer -->
    <section class="footer" id="footer">
        <p >© 2020, Madrasah Ibtidaiyah At-Taqwa, All rights reserved.</p>
    </section>


    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- fancybox js -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    <!-- slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</body>
</html>