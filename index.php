<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>LINGKOQ RATU</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

html{
scroll-behavior:smooth;
}

body{
font-family:'Segoe UI',sans-serif;
background:#f8f9fa;
overflow-x:hidden;
}

.navbar{
box-shadow:0 2px 10px rgba(0,0,0,.15);
}

.logo-navbar{
width:55px;
height:55px;
border-radius:50%;
background:white;
padding:2px;
object-fit:cover;
}

.hero{
background:
linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
url('img/gambar.jpeg');
background-size:cover;
background-position:center;
min-height:90vh;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
}

.hero h1{
font-size:80px;
font-weight:800;
}

.hero h3{
font-weight:600;
}

.btn-custom{
padding:12px 35px;
border-radius:50px;
}

.section-title{
color:#198754;
font-weight:700;
text-align:center;
margin-bottom:40px;
position:relative;
}

.section-title::after{
content:'';
width:80px;
height:4px;
background:#198754;
display:block;
margin:10px auto;
border-radius:20px;
}

.card{
border:none;
border-radius:20px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
}

.icon{
font-size:55px;
}

.gallery img{
width:100%;
height:250px;
object-fit:cover;
border-radius:15px;
transition:.3s;
}

.gallery img:hover{
transform:scale(1.05);
}

footer{
background:#198754;
color:white;
padding:25px;
text-align:center;
margin-top:50px;
}

@media(max-width:768px){

.hero h1{
font-size:45px;
}

.hero h3{
font-size:22px;
}

}

</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
<div class="container">

<a class="navbar-brand d-flex align-items-center" href="#">

<img src="img/logo.png" class="logo-navbar me-2">

<div>
<div class="fw-bold">LINGKOQ RATU</div>
<small>Pendidikan & Pemberdayaan Masyarakat</small>
</div>

</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#tentang">Tentang</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#pendidikan">Pendidikan</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#pemberdayaan">Pemberdayaan</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#galeri">Galeri</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#kontak">Kontak</a>
</li>

</ul>

</div>

</div>
</nav>

<!-- HERO -->
<section class="hero">

<div class="container">

<h1>LINGKOQ RATU</h1>

<h3 class="mt-3">
Lembaga Pendidikan dan Pemberdayaan Masyarakat
</h3>

<p class="lead mt-3">
Membangun Generasi Qur'ani dan Memberdayakan Masyarakat
</p>

<a href="#tentang" class="btn btn-success btn-lg btn-custom mt-3">
Selengkapnya
<i class="bi bi-chevron-down"></i>
</a>

</div>

</section>

<!-- TENTANG -->
<section id="tentang" class="py-5">

<div class="container">

<h2 class="section-title">
Tentang Kami
</h2>

<div class="row align-items-center">

<div class="col-md-6 mb-4">

<img src="img/gambar2.jpeg"
class="img-fluid rounded shadow">

</div>

<div class="col-md-6">

<p>
Lembaga Pendidikan dan Pemberdayaan Masyarakat Lingkoq Ratu merupakan lembaga sosial kemasyarakatan yang bergerak dalam bidang pendidikan, pemberdayaan masyarakat, pengembangan ekonomi lokal, pelatihan keterampilan dan pembangunan sosial berkelanjutan.
</p>

<p>
Lembaga ini dibentuk sebagai wadah untuk meningkatkan kualitas sumber daya manusia dan kemandirian masyarakat melalui pendidikan, pelatihan, pendampingan dan penguatan kapasitas masyarakat berbasis potensi lokal.
</p>

<h5 class="mt-4">Visi</h5>

<p>
Menjadi lembaga pendidikan dan pemberdayaan masyarakat yang profesional, inovatif dan berkelanjutan dalam menciptakan masyarakat yang mandiri, cerdas dan sejahtera.
</p>

<h5>Misi</h5>

<ul>
<li>Menyelenggarakan program pendidikan dan pelatihan masyarakat.</li>
<li>Meningkatkan kapasitas dan keterampilan masyarakat berbasis kebutuhan lokal.</li>
<li>Mengembangkan program pemberdayaan ekonomi masyarakat.</li>
<li>Mendukung pembangunan sosial dan lingkungan berkelanjutan.</li>
<li>Menjalin kemitraan strategis dengan berbagai pihak.</li>
</ul>

</div>

</div>

</div>

</section>

<!-- PENDIDIKAN -->
<section id="pendidikan" class="py-5 bg-light">

<div class="container">

<h2 class="section-title">
Program Pendidikan TPQ Assalam
</h2>

<div class="row g-4">

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<div class="icon">📖</div>
<h5>Belajar Al-Qur'an</h5>
<p>Pembelajaran membaca Al-Qur'an dengan metode yang mudah dipahami.</p>
</div>
</div>

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<div class="icon">📚</div>
<h5>Tahfidz</h5>
<p>Menghafal surat pendek dan ayat pilihan.</p>
</div>
</div>

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<div class="icon">🕌</div>
<h5>Praktik Ibadah</h5>
<p>Pembelajaran sholat dan ibadah sehari-hari.</p>
</div>
</div>

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<div class="icon">🤝</div>
<h5>Akhlak</h5>
<p>Pembentukan karakter dan adab Islami.</p>
</div>
</div>

</div>

</div>

</section>

<!-- PEMBERDAYAAN -->
<section id="pemberdayaan" class="py-5">

<div class="container">

<h2 class="section-title">
Program Pemberdayaan Masyarakat
</h2>

<div class="row g-4">

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<h1>👩</h1>
<h5>Kelompok Perempuan</h5>
<p>Pelatihan keterampilan, UMKM dan kegiatan sosial masyarakat.</p>
</div>
</div>

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<h1>🧑</h1>
<h5>Kelompok Pemuda</h5>
<p>Pengembangan kreativitas dan kepemimpinan generasi muda.</p>
</div>
</div>

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<h1>🏛️</h1>
<h5>Kelompok Adat</h5>
<p>Pelestarian budaya dan kearifan lokal masyarakat.</p>
</div>
</div>

<div class="col-md-3">
<div class="card p-4 text-center h-100">
<h1>🌾</h1>
<h5>Kelompok Tani</h5>
<p>Peningkatan hasil pertanian dan kesejahteraan petani.</p>
</div>
</div>

</div>

</div>

</section>

<!-- GALERI -->
<section id="galeri" class="py-5 bg-light">

<div class="container">

<h2 class="section-title">
Galeri Kegiatan
</h2>

<div class="row g-4 gallery">

<div class="col-md-4">
<img src="img/gambar3.jpeg">
</div>

<div class="col-md-4">
<img src="img/gambar4.jpeg">
</div>

<div class="col-md-4">
<img src="img/gambar5.png">
</div>

</div>

</div>

</section>

<!-- KONTAK -->
<section id="kontak" class="py-5">

<div class="container">

<h2 class="section-title">
Kontak Kami
</h2>

<div class="card p-4 mx-auto text-center" style="max-width:700px;">

<h4>
LEMBAGA PENDIDIKAN DAN PEMBERDAYAAN MASYARAKAT LINGKOQ RATU
</h4>

<p class="mt-3">
📍 Desa Kesik, Kecamatan Masbagik, Kabupaten Lombok Timur
</p>

<p>
📞 081918101001
</p>

<p>
📧 lingkoqratu@gmail.com
</p>

</div>

</div>

</section>

<footer>

<h5>LINGKOQ RATU</h5>

<p class="mb-0">
TPQ Assalam • Kelompok Perempuan • Kelompok Pemuda • Kelompok Adat • Kelompok Tani
</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>