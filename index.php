<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Logger</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .icon-large {
      font-size: 1.5em;
    }
  </style>
</head>

<body class="bg-light">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm mb-5">
    <div class="container">
      <a class="navbar-brand" href="index.php">Data <strong>Logger</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data.php">Tabel Data</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container col-md-6 my-5">
    <h2>Realtime Data</h2>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Realtime Data</li>
      </ol>
    </nav>

    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <div class="card mb-3 p-3 shadow-sm border-0 rounded-5 bg-primary text-white">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Jumlah Data</h5>
              <p class="card-text" id="data-id">Memuat...</p>
            </div>
            <div>
              <i class="bi bi-clipboard-data icon-large"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card mb-3 p-3 shadow-sm border-0 rounded-5 bg-warning text-dark">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Nilai Sensor</h5>
              <p class="card-text" id="data-nilai-sensor">Memuat...</p>
            </div>
            <div>
              <i class="bi bi-bar-chart icon-large"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card mb-3 p-3 shadow-sm border-0 rounded-5 bg-success text-white" id="lampu-card">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Status Lampu</h5>
              <p class="card-text" id="data-status-lampu">Memuat...</p>
            </div>
            <div>
              <i class="bi bi-lightbulb icon-large"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card mb-3 p-3 shadow-sm border-0 rounded-5 bg-warning">
          <div class="card-body d-flex justify-content-between align-items-center">
            <div>
              <h5 class="card-title">Terakhir Diperbarui</h5>
              <p class="card-text" id="data-waktu">Memuat...</p>
            </div>
            <div>
              <i class="bi bi-clock icon-large"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  <script src="scripts.js"></script>
</body>
</html>
