<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Task | 5026241145</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
      body {
          background: linear-gradient(180deg, #ffffff 0%, #cbdcf7 100%);
          background-attachment: fixed;
          font-family: 'Roboto', sans-serif;
          color: #333;
          min-height: 100vh;
      }
      .header-section {
          background: rgba(255, 255, 255, 0.8);
          backdrop-filter: blur(5px);
          padding: 40px 0;
          margin-bottom: 40px;
          box-shadow: 0 2px 4px rgba(0,0,0,0.05);
          /* Garis oren dihapus */
      }
      .card-menu {
          border: none;
          border-radius: 8px;
          transition: all 0.3s ease;
          box-shadow: 0 4px 6px rgba(0,0,0,0.07);
          border-left: 5px solid #013880;
          background-color: #ffffff;
      }
      .card-menu:hover {
          transform: translateY(-5px);
          box-shadow: 0 8px 15px rgba(0,0,0,0.1);
          border-left: 5px solid #4abaf2;
      }
      .card-title {
          color: #013880;
          font-weight: 700;
          font-size: 1.1rem;
      }
      .btn-its {
          background-color: #013880;
          color: white;
          border-radius: 20px;
          padding: 5px 20px;
          font-size: 0.8rem;
          text-transform: uppercase;
      }
      .footer-text {
          color: #555;
          font-size: 0.9rem;
      }
  </style>
</head>

<body>

<div class="header-section text-center">
    <div class="container">
        <h1 class="font-weight-bold" style="color: #013880;">All Task</h1>
        <p class="lead text-muted">5026241145 - Athallah Hilman Hilalazka</p>
    </div>
</div>

<div class="container">
  <div class="row">

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pert1') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Pertemuan 1</h5>
                      <p class="text-muted small mb-3">Intro HTML</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pert2') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Pertemuan 2</h5>
                      <p class="text-muted small mb-3">Web Berita</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pert3') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Pertemuan 3</h5>
                      <p class="text-muted small mb-3">Responsive Design</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('task-tm3') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Task TM 3</h5>
                      <p class="text-muted small mb-3">Latihan Bootstrap</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pert4') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Pertemuan 4</h5>
                      <p class="text-muted small mb-3">Page Client</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pert5') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Pertemuan 5</h5>
                      <p class="text-muted small mb-3">Bootstrap Arsha</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('linktree') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Tugas Linktree</h5>
                      <p class="text-muted small mb-3">Cloning Linktree</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('dosen') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Dosen Controller</h5>
                      <p class="text-muted small mb-3">Laravel</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('biodata') }}" class="text-decoration-none">
              <div class="card card-menu h-100 p-3">
                  <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                      <h5 class="card-title mb-2">Biodata</h5>
                      <p class="text-muted small mb-3">Laravel</p>
                      <div class="btn btn-its">Buka Tugas</div>
                  </div>
              </div>
          </a>
      </div>

  </div>

  <footer class="text-center mt-5 mb-4">
      <p class="footer-text font-weight-bold">Institut Teknologi Sepuluh Nopember - Sistem Informasi - Pemrogaman Web</p>
  </footer>
</div>

</body>
</html>
