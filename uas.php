<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bus Pariwisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="css/jquery.bxslider.css" rel="stylesheet"> <!-- ✅ bxSlider CSS -->
</head>
<body>

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"><i class="bi bi-bus-front-fill"></i> Bus Pariwisata</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#form">Formulir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tabel">Daftar Bus</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="bg-image text-white text-center py-5" id="home">
  <div class="container">
    <h1 class="display-5 fw-bold"><i class="bi bi-bus-front-fill"></i> Bus Pariwisata</h1>
    <p class="lead">Formulir Pendaftaran dan Daftar Keberangkatan Bus Wisata</p>
  </div>
</header>

<div class="container my-5">

  <!-- ✅ Slider Gambar Bus (Bootstrap) -->
  <div id="carouselBus" class="carousel slide mb-5 shadow rounded overflow-hidden">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.pinimg.com/736x/8f/00/35/8f003504131f16df7a0818b29cdfc7ba.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Bus 1">
      </div>
      <div class="carousel-item">
        <img src="https://i.pinimg.com/736x/02/2c/25/022c2546a6c0c780a9c00a9182bd329f.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Bus 2">
      </div>
      <div class="carousel-item">
        <img src="https://i.pinimg.com/736x/97/59/a5/9759a5b246e2068c587a1b5ba2a3bb61.jpg" class="d-block w-100" style="height: 500px; object-fit: cover;" alt="Bus 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBus" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBus" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>


  <!-- Penjelasan -->
  <div class="card shadow-lg mb-4">
    <div class="card-body bg-light">
      <h5 class="text-success fw-bold"><i class="bi bi-info-circle-fill"></i> Tentang Layanan Bus Pariwisata</h5>
      <p class="mb-0 text-dark">
        Layanan Bus Pariwisata kami dirancang untuk memberikan pengalaman perjalanan yang aman, nyaman, dan menyenangkan bagi para wisatawan. Sistem ini dibuat untuk membantu pengelolaan data keberangkatan bus secara digital, mulai dari pendaftaran hingga pencatatan jumlah penumpang.
        <br><br>
        Web ini sangat cocok digunakan oleh agen travel, perusahaan otobus (PO), maupun instansi pendidikan yang sering mengadakan kegiatan wisata. Dengan antarmuka yang sederhana namun elegan, pengelolaan jadwal bus menjadi lebih efisien dan cepat tanpa ribet.
      </p>
    </div>
  </div>

  <!-- Kutipan Wisata -->
  <div class="text-center mb-5">
    <i class="bi bi-globe2 display-1 text-success"></i>
    <blockquote class="blockquote mt-3">
      <p class="mb-0">“Perjalanan bukan tentang tujuan, tetapi tentang kenangan.”</p>
      <footer class="blockquote-footer">Bus Pariwisata Indonesia</footer>
    </blockquote>
  </div>

<!-- === GALERI ARMADA & HARGA SEWA === -->
<section class="armada-section text-center py-5">
  <div class="container">
    <h2 class="fw-bold mb-4">Pilihan Armada & Harga Sewa</h2>

    <div class="d-flex justify-content-center flex-wrap gap-3 mb-5">
    <a class="btn btn-outline-primary" href="#bigbus">BIG BUS &gt;</a>
    <a class="btn btn-outline-info" href="#mediumbus">MEDIUM BUS &gt;</a>
    <a class="btn btn-outline-danger" href="#hiace">HIACE &gt;</a>
    <a class="btn btn-outline-success" href="#elf">ELF &gt;</a>
  </div>


    <div class="row g-4">
      <!-- Big Bus SHD -->
      <div class="col-md-6 col-lg-4" id="bigbus">
        <div class="card shadow h-100">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRYRYo61iHOdSw1dMBkzEaLz-t8Z3D4sZ53w&s" class="card-img-top" alt="Big Bus SHD">
          <div class="card-body text-start">
            <h5 class="fw-bold">Big Bus SHD</h5>
            <p class="mb-2"><strong>Fasilitas:</strong><br>
              50 seat, Full AC, TV LED, charger HP, android YouTube, Karaoke full music, Reclening seat
            </p>
            <p>
              3 jam = Rp. 1.800.000<br>
              6 jam = Rp. 2.000.000<br>
              9 jam = Rp. 2.400.000<br>
              12 jam = Rp. 2.700.000<br>
              18 jam = Rp. 3.000.000
            </p>
          </div>
        </div>
      </div>

      <!-- Big Bus 50 Seat -->
      <div class="col-md-6 col-lg-4" id="mediumbus">
        <div class="card shadow h-100">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdgGCE8lH0z4ALxOS-OE1g7ZcYZbhSJ-YLqQ&s" class="card-img-top" alt="Big Bus 50 Seat">
          <div class="card-body text-start">
            <h5 class="fw-bold">Big Bus 50 Seat</h5>
            <p class="mb-2"><strong>Fasilitas:</strong><br>
              50 seat, Full AC, TV LED, charger HP, android YouTube, Karaoke full music, Reclening seat
            </p>
            <p>
              3 jam = Rp. 1.500.000<br>
              6 jam = Rp. 1.700.000<br>
              9 jam = Rp. 2.000.000<br>
              12 jam = Rp. 2.300.000<br>
              18 jam = Rp. 2.600.000
            </p>
          </div>
        </div>
      </div>

      <!-- Toyota Hiace Premio -->
      <div class="col-md-6 col-lg-4" id="hiace">
        <div class="card shadow h-100">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6pnoY0aNx-ameGsX84_xjwirQD32m1Gyk6A&s" class="card-img-top" alt="Hiace Premio">
          <div class="card-body text-start">
            <h5 class="fw-bold">Toyota Hiace Premio</h5>
            <p class="mb-2"><strong>Fasilitas:</strong><br>
              13-14 seat, Full AC, charger HP, android YouTube, full music, Reclening seat
            </p>
            <p>
              3 jam = Rp. 700.000<br>
              6 jam = Rp. 900.000<br>
              9 jam = Rp. 1.100.000<br>
              12 jam = Rp. 1.200.000<br>
              18 jam = Rp. 1.400.000
            </p>
          </div>
        </div>
      </div>

      <!-- Elf Long 19 Seat -->
      <div class="col-md-6 col-lg-4" id="elf">
        <div class="card shadow h-100">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_q3o6t3GNb9tjQzMtudcCEbPiYKPKptnUMA&s" class="card-img-top" alt="Elf Long">
          <div class="card-body text-start">
            <h5 class="fw-bold">Elf Long 19 Seat</h5>
            <p class="mb-2"><strong>Fasilitas:</strong><br>
              19 seat, Full AC, TV LED, charger HP, android YouTube, Karaoke full music, Reclening seat
            </p>
            <p>
              3 jam = Rp. 600.000<br>
              6 jam = Rp. 800.000<br>
              9 jam = Rp. 1.000.000<br>
              12 jam = Rp. 1.100.000<br>
              18 jam = Rp. 1.300.000
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Formulir -->
  <div class="card shadow-lg mb-5" id="form">
    <div class="card-header bg-success text-white text-center">
      <h4><i class="bi bi-pencil-square"></i> Form Pendaftaran Bus</h4>
    </div>
    <div class="card-body">
      <form action="simpan.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label>Nama Bus</label>
            <input type="text" class="form-control" name="nama_bus" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Tujuan Wisata</label>
            <input type="text" class="form-control" name="tujuan" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Tanggal Keberangkatan</label>
            <input type="date" class="form-control" name="tanggal" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Jumlah Penumpang</label>
            <input type="number" class="form-control" name="jumlah_penumpang" required>
          </div>
        </div>
        <button type="submit" class="btn btn-success w-100"><i class="bi bi-send"></i> Simpan Data</button>
      </form>
    </div>
  </div>

  <!-- Tabel Data -->
  <div class="card shadow-lg mb-5" id="tabel">
    <div class="card-header bg-dark text-white text-center">
      <h4><i class="bi bi-table"></i> Daftar Bus Terdaftar</h4>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama Bus</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>Jumlah Penumpang</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = $koneksi->query("SELECT * FROM bus ORDER BY id DESC");
          $no = 1;
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama_bus']}</td>
                    <td>{$row['tujuan']}</td>
                    <td>{$row['tanggal']}</td>
                    <td>{$row['jumlah_penumpang']}</td>
                  </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- Footer -->
<footer class="text-center bg-success text-white py-3 mt-5">
  <p class="mb-0">© <?= date('Y'); ?> Bus Pariwisata. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- ✅ bxSlider JS -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script>
  $(document).ready(function(){
    $('.bxslider').bxSlider({
      auto: true,
      pause: 3000,
      mode: 'fade',
      captions: true
    });
  });
</script>

</body>
</html>