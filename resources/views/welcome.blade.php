<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<style>
    body {
    display: flex;
    height: 100vh;
    background-color:#fdf5e6;
}

.container {
    display: flex;
    width: 100%;
    background-color: #fefefe;
    margin-bottom: 210px;
}

.sidebar {
    width: 20%;
    background-color: #ffc107;
    padding: 20px;
    color: #fff;
    text-align: center;
}

.profile {
    margin-bottom: 30px;
}

.profile-pic {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.nav-menu a {
    display: block;
    color: #fff;
    text-decoration: none;
    margin: 15px 0;
    font-size: 16px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.content {
    width: 80%;
    padding: 40px;
    background-color: #fdf5e6;
}

h1 {
    color: #ffca28;
    font-size: 36px;
    margin-bottom: 20px;
}

h2 {
    color: #ff9800;
    margin-top: 40px;
}

h3 {
    color: #ff5722;
    margin-bottom: 0;
}

p, ul {
    line-height: 1.6;
    color: #333;
}

ul {
    list-style-type: disc;
    margin-left: 20px;
}

a {
    color: #d32f2f;
    text-decoration: none;
}

a.mail {
    text-decoration: underline;
}

.profile-pic {
    width: 100px;
    height: 130px;
    border-radius: 50%;
    margin-bottom: 10px;
    border: 5px solid #ffffff; /* Warna bingkai */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan bingkai */
}

.nama {
    margin-top: 10px;
    margin-bottom: 10px;
}

.sidebar {
    width: 15%;
    background-color: #ffc107;
    padding: 20px;
    color: #fff;
    text-align: center;
    position: fixed; /* Membuat sidebar tetap di posisi */
    top: 0;
    left: 0;
    height: 100%; /* Mengisi tinggi layar */
    overflow-y: auto; /* Agar dapat digulir jika kontennya lebih tinggi dari layar */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Tambahkan sedikit bayangan untuk estetika */
}

.content {
    width: 90%;
    margin-left: 18%; /* Memberikan ruang agar tidak tertutup oleh sidebar */
    padding: 40px;
    background-color: #fdf5e6;
}
section {
    margin-top: 190px;
    margin-bottom: 210px;
}

#awards {
    margin-top: 190px;
    padding-bottom: 240px;
}

.social-icons {
    display: flex;
    justify-content: left;
    gap: 15px; /* Jarak antar ikon */
    margin-top: 20px;
}

.social-icons .icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px; /* Ukuran lingkaran */
    height: 50px;
    border-radius: 50%; /* Membuat lingkaran */
    background-color: #000; /* Warna hitam */
    color: #fff; /* Warna logo putih */
    text-decoration: none; /* Hilangkan garis bawah */
    font-size: 20px; /* Ukuran ikon */
    transition: all 0.3s ease; /* Efek transisi */
}

.social-icons .icon:hover {
    background-color: #444; /* Warna berubah saat hover */
    transform: scale(1.1); /* Sedikit membesar saat hover */
}


</style>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <img src="/img/foto.jpg" alt="Profile Picture" class="profile-pic">
                <h2>Artika Suci Salsabila</h2>
            </div>
            <nav class="nav-menu">
                <a href="#about">ABOUT</a>
                <a href="#experience">EXPERIENCE</a>
                <a href="#Education">EDUCATION</a>
                <a href="#skills">SKILLS</a>
                <a href="#interests">INTERESTS</a>
                <a href="#awards">AWARDS</a>
            </nav>
        </aside>
        <main class="content">
            <section id="about">
                <h1>PORTFOLIO</h1>
                <p>Sambas · Kalimantan Barat · 082256783209 · <a href="mailto:artikaa356@gmail.com" class="mail">artikaa356@gmail.com</a></p>
                <p class="nama">ARTIKA SUCI SALSABILA</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com" target="_blank" class="icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com" target="_blank" class="icon">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>                
            </section>

            <section id="experience">
                <h1>EXPERIENCE</h1>
                <h3>Designer</h3>
                <div><h2>PT.INTI NUSANTARA ABADI</h2>
                    <p>10 Oktober 2024 - 10 Oktober 2030</p>
                </div>
                <p>
                    PT Inti Nusantara Abadi adalah perusahaan yang menyediakan layanan teknologi informasi (IT) dan pengembangan perangkat lunak.
                    Mereka melayani berbagai sektor industri di Indonesia, termasuk perusahaan lokal di Kalimantan. Mereka menyediakan solusi IT.
                    , Seperti pengembangan aplikasi bisnis, pengelolaan sistem informasi,dan layanan konsultasi. Mereka bekerja untuk membantu bisnis beroperasi lebih efisien dengan teknologi yang tepat guna. Perusahaan ini menawarkan layanan pembuatan perangkat lunak yang disesuaikan dengan kebutuhan bisnis,dari aplikasi desktop,mobile,hingga berbasis web.
                </p>
            </section>
            <section id="Education">
                <h1>EDUCATION</h1>
                <h2>POLITEKNIK NEGERI SAMBAS</h2>
                <h3>MANAJEMEN INFORMATIKA</h3>
                <p>MANAJEMEN INFORMATIKA</p>
                <P>3,60</P>
            </section>

            </section>
            <section id="skills">
                <h1>SKILLS</h1>
                <h2>PROGRAMMING LANGUAGES & TOOLS</h2>
                <h3>ANDROID</h3>
                <p>Android adalah sistem operasi berbasis Linux yang dirancang khusus untuk perangkat mobile,seperti smartphone,tablet smartwatch,dan bahkan televisi. Dikembangkan oleh Google,Android menjadi salah satu sistem operasi paling populer di dunia karena sifatnya yang open source,memungkinkan pengembang dan produsen perangkat untuk menyesuaikan dan mengembangkan sistem ini sesuai kebutuhan mereka.</p>
                <p>Android menyediakan antarmuka pengguna berbasis sentuhan yang memudahkan interaksi pengguna melalui gerakan, seperti mengetuk,mengesek,dan mencubit layar. Sistem ini juga mendukung aplikasi pihak ketiga yang dapat diunduh dari Google Play Store, sehingga pengguna memiliki akses ke berbagai jenis aplikasi,dari media sosial hingga produktivitas da game.</p>
            </section>

            <section id="interests">
                <h1>INTERESTS</h1>
                <ul>
                    <li>Pengembangan Perangkat Lunak dan Bahasa Pemrograman</li>
                    <li>Pengembangan Game</li>
                    <li>Front-end Development</li>
                </ul>
            </section>

            </section>
            <section id="awards">
                <h1>AWARDS</h1>
                <ul>
                    <li>Penghargaan Makalah Terbaik pada Konferensi Internasional IEEE tentang Ilmu Komputer.</li>
                    <li>Finalis Microsoft Imagine Cup dalam kategori Kecerdasan Buatan.</li>
                    <li>Juara 1 Kompetisi Coding Nasional dari Kementrian Kominfo</li>
                </ul>
            </section>
        </main>
    </div>
    <script>
        document.querySelectorAll('.nav-menu a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault(); // Mencegah aksi default tautan
    
                const targetId = this.getAttribute('href'); // Ambil ID target
                const targetElement = document.querySelector(targetId);
    
                if (targetElement) {
                    // Hitung posisi elemen
                    const offsetTop = targetElement.getBoundingClientRect().top + window.pageYOffset;
                    const middlePosition = offsetTop - (window.innerHeight / 2) + (targetElement.offsetHeight / 2);
    
                    // Periksa jika posisi scroll melebihi batas bawah halaman
                    const maxScroll = document.body.scrollHeight - window.innerHeight;
                    const finalPosition = Math.min(middlePosition, maxScroll); // Jangan melebihi scroll maksimum
    
                    // Scroll ke posisi final dengan efek halus
                    window.scrollTo({
                        top: finalPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>    
</body>
</html>

