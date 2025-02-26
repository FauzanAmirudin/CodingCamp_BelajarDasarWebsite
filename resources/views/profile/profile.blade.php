<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    {{-- <link rel="stylesheet" href="assets/style/style.css"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Profile</title>
    <style> 
    body {
        font-family: "Poppins", serif;
    }
    </style>

</head>
<body>
    <nav class="p-3">
        <h1 class="font-bold text-6xl mb-3">Bandung</h1>
        <p>Kota Metropolitan terbesar di Provinsi Jawa Barat, sekaligus menjadi ibu kota provinsi tersebut</p>
            <li class="hover:underline"><a href="">Sejarah</a></li>
            <li class="hover:underline"><a href="">Geografis</a></li>
            <li class="hover:underline"><a href="">Wisata</a></li>
    </nav>

    <div class="p-3">
        <article class="text-center mb-12 justify-content-center align-items-center">
            <h2 id="sejarah">Sejarah</h2>
            <img src="assets/img/bandung.jpg" alt="sejarah" />
            <p>
                Kata Bandung berasal dari kata bendung atau bendungan karena terbendungnya sungai Citarum oleh
                lava Gunung Tangkuban Parahu yang lalu membentuk telaga. Legenda yang diceritakan oleh
                orang-orang tua di Bandung mengatakan bahwa nama Bandung diambil dari sebuah kendaraan air
                yang terdiri dari dua perahu yang diikat berdampingan yang disebut perahu bandung yang
                digunakan oleh Bupati Bandung, R.A. Wiranatakusumah II, untuk melayari Ci Tarum dalam mencari
                tempat kedudukan kabupaten yang baru untuk menggantikan ibu kota yang lama di Dayeuhkolot.
            </p>

            <p>
                Berdasarkan filosofi Sunda, kata Bandung juga berasal dari kalimat Nga-Bandung-an Banda
                Indung, yang merupakan kalimat sakral dan luhur karena mengandung nilai ajaran Sunda.
                Nga-Bandung-an artinya menyaksikan atau bersaksi. Banda adalah segala sesuatu yang berada di
                alam hidup yaitu di bumi dan atmosfer, baik makhluk hidup maupun benda mati. Sinonim dari
                banda adalah harta. Indung berarti Ibu atau Bumi, disebut juga sebagai Ibu Pertiwi tempat
                Banda berada.
            </p>
        </article>

        <article>
            <h2 id="geografis">Geografis</h2>
            <img src="assets/img/bandung.jpg" alt="sejarah" />
            <p>
                Kota Bandung dikelilingi oleh pegunungan, sehingga bentuk morfologi wilayahnya bagaikan sebuah
                mangkok raksasa,[9] secara geografis kota ini terletak di tengah-tengah provinsi Jawa Barat,
                serta berada pada ketinggian ±768 m di atas permukaan laut, dengan titik tertinggi di berada
                di sebelah utara dengan ketinggian 1.050 meter di atas permukaan laut dan sebelah selatan
                merupakan kawasan rendah dengan ketinggian 675 meter di atas permukaan laut.
            </p>

            <p>
                Kota Bandung dialiri dua sungai utama, yaitu Sungai Cikapundung dan Sungai Citarum beserta
                anak-anak sungainya yang pada umumnya mengalir ke arah selatan dan bertemu di Sungai Citarum.
                Dengan kondisi yang demikian, Bandung selatan sangat rentan terhadap masalah banjir terutama
                pada musim hujan.
            </p>
        </article>

        <article>
            <h2 id="wisata">Wisata</h2>
            <p>
                Sejak dibukanya Jalan Tol Cipularang, kota Bandung telah menjadi tujuan utama dalam menikmati
                liburan akhir pekan terutama dari masyarakat yang berasal dari Jakarta sekitarnya. Selain
                menjadi kota wisata belanja, kota Bandung juga dikenal dengan sejumlah besar bangunan lama
                berarsitektur peninggalan Belanda.
            </p>

            <section>
                <h3>Farm House Lembang</h3>
                <img src="assets/img/bandung.jpg" alt="sejarah" />
                <p>
                    Berada di jalur utama Bandung-Lembang, Farm House menjadi objek wisata yang tidak pernah
                    sepi pengunjung. Selain karena letaknya strategis, kawasan ini juga menghadirkan nuansa
                    wisata khas Eropa. Semua itu diterapkan dalam bentuk spot swafoto Instagramable.
                </p>
            </section>

            <section>
                <h3>Observatorium Bosscha</h3>
                <img src="assets/img/bandung.jpg" alt="sejarah" />
                <p>
                    Memiliki beberapa teleskop, antara lain, Refraktor Ganda Zeiss, Schmidt Bimasakti, Refraktor
                    Bamberg, Cassegrain GOTO, dan Teleskop Surya. Refraktor Ganda Zeiss adalah jenis teleskop
                    terbesar untuk meneropong bintang. Benda ini diletakkan pada atap kubah sehingga saat
                    teropong digunakan, atap tersebut harus dibuka. Observatorium Bosscha boleh dikunjungi oleh
                    siapapun, tanpa tiket. Namun, bagi yang ingin menggunakan teleskop Zeiss, wajib mendaftarkan
                    diri. Untuk instansi atau lembaga pendidikan, diberikan jadwal hari Selasa sampai Jumat.
                    Sementara itu, kunjungan individu dibuka setiap hari Sabtu.
                </p>
            </section>
        </article>

        <table border="1">
            <tr>
                <th>Tahun</th>
                <th>Juara 1</th>
                <th>Juara 2</th>
                <th>Juara 3</th>
            </tr>
            <tr>
                <td>2018</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
            </tr>
            <tr>
                <td>2019</td>
                <td>E</td>
                <td colspan="2">F</td>
            </tr>
        </table>

        <Div style="margin-top: 10px;">Text : <input type="text"></Div>
        <Div>email : <input type="email"></Div>
        <Div>password : <input type="password"></Div>
        
        <form style="margin-top: 30px;">
            <div>
              <label for="fullName">Nama</label>
              <input id="fullName" name="fullName" required />
            </div>
           
            <div>
              <label for="checkIn">Tanggal Check-In</label>
              <input type="date" id="checkIn" name="checkIn" required />
            </div>
           
            <div>
              <label for="checkOut">Tanggal Check-Out</label>
              <input type="date" id="checkOut" name="checkOut" required />
            </div>
           
            <button type="submit">Submit</button>
          </form>
    </div>

    <!-- Konten samping -->
    <aside style="padding: 100px;">
        <h2>Kota Bandung</h2>
        <p>Kota Kembang Paris van Java</p>
        <figure>
            <img src="assets/img/bandung.jpg" alt="sejarah" />
            <figcaption>Lambang</figcaption>
        </figure>
    </aside>
</body>
</html>