<!--
Nama : Athallah Hilman Hilalazka
NRP : 5026241145
Kelas : PWEB(A)
JS Button saya terapkan pada pilihan "Jenjang Pendaftaran" (Sarjana, Vokasi, dan Pascasarjana)
yang menggunakan kode $('.btn').button(); agar tombol berubah menjadi status aktif/terpilih saat diklik.
Pada web ini, saya meniru web dari myITS Admission.
-->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>5026241145 - Athallah Hilman Hilalazka</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://admission.its.ac.id/assets/img/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #e6f2ff;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .jumbotron {
            background-image: url("https://admission.its.ac.id/assets/img/admission/Admisi-ITS-Seleksi-Nasional-2024.png");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 25px;
        }

        .formatgambar {
            border-radius: 15px;
            box-shadow: 0px 4px 10px 2px rgba(0, 0, 0, 0.2);
            width: 100%;
        }
        .jalur-selection {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            margin-top: -50px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://admission.its.ac.id/assets/img/admission/myits-admission-blue.svg" height="40">
            </a>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 style="font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Penerimaan Mahasiswa <br>Baru ITS 2026</h1>
        <p class="lead">Wujudkan mimpimu di Kampus Pahlawan</p>
    </div>

    <div class="container">
        <div class="jalur-selection text-center">
            <h5 class="mb-4">Pilih Jenjang Pendaftaran:</h5>

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-primary btn-lg">
                    <input type="radio" name="options" id="option1"> Sarjana (S1)
                </label>
                <label class="btn btn-outline-primary btn-lg">
                    <input type="radio" name="options" id="option2"> Vokasi (D4)
                </label>
                <label class="btn btn-outline-primary btn-lg">
                    <input type="radio" name="options" id="option3"> Pascasarjana
                </label>
            </div>

            <p class="mt-4 text-muted" style="font-size: small;">Klik salah satu untuk memilih jenjang studi Anda.</p>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <h2 style="color: rgb(55, 95, 223);">Kenapa ITS?</h2>
                <p>ITS adalah kampus teknologi terbaik yang siap mencetak generasi unggul di bidang AI, Robotika, dan Inovasi Global.</p>
            </div>
            <div class="col-md-6">
                <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2026/03/kerjasama-robodog-2-1024x682.jpeg" class="formatgambar">
            </div>
        </div>
    </div>

    <footer class="text-center bg-white py-4 border-top">
        <p style="font-size: small;">&copy; 2026 Institut Teknologi Sepuluh Nopember</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.btn').button();
        });
    </script>

</body>
</html>
