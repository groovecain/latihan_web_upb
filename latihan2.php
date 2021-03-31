<!DOCTYPE html>
<html>
<head>
	<title>Hello World, Latihan Membuat Halaman (title)</title>
</head>
<body>

<!-- element semantik harus berada diantara tag body -->
<!-- <header>...</header> Pada umumnya berisi logo, slogan, navigasi, 
atau form pencarian.-->
<header>Pemrograman Web Statis (header) </header>

<!-- <nav>...</nav> element nav, digunakan untuk membuat menu link navigasi -->
<nav>
<ul>
<li><a href="www.gatewan.com">HOME (li)</a></li>
<li><a href="http://www.gatewan.com/2014/07/about-gatewawan.html">About Me (li)</a></li>
<li><a href="http://www.gatewan.com/2014/11/contact-us.html">Buku Tamu (li)</a></li>
</ul>

<!-- <article>...</article> element ini digunakan untuk konten artikel, berita atau opini. 
jika dalam satu halaman hanya terdiri 1 artikel, bisa saja langsung menggunakan 
konten <section>...</section>, akan tetapi itu menyalahi aturan semantik pada HTML5, 
jadi meskipun artikel cuman 1 tetap harus menggunakan elemen <article>...</article> -->
<article>
	<header>
		<h1>
		Artikel Ke-1 (h1)
		</h1>
<br />
<br />		
	</header>
		<!-- <section>...</section> element section, digunakan untuk menunjukan 
		bagian yang berbeda pada sebuah halaman web anda. section bisa digunakan 
		lebih dari satu, sesuai kebutuhan. misal section pada artikel, section 
		pada menu samping (a side). -->
		<section>
		#Artikel Pertama, Ini adalah latihan pertama saya dalam belajar HTML5 Tingkat Pemula (section)
		</section>
		
</article>
<br />
<br />
<article>
	<header>
	
		<!-- <hgroup>...</hgroup> element ini biasa digunakan pada artikel, untuk pengelompokan
		tag heading yang lebih dari satu. -->
		<hgroup>
			<h1>Pemrograman Web Statis (h1) </h1>
			<h2>Menggunakan HTML5 Tingkat Dasar (h2) </h2>
			<h3>Oleh Wawan Beneran (Newbie) (h3) </h3>
		</hgroup>
<br />
<br />			
	</header>
		<section>
		#Artikel Kedua, Ini adalah latihan pertama saya dalam belajar HTML5 Tingkat Pemula (section)
		</section>
<br />
<br />		
		<!-- <p>...</p> element tag paragraf ini digunakan untuk mengindikasikan suatu paragrap
		dalam element artikel.-->
		<p>
		#Ini Paragraph pertama, dummy text dummy text dummy text dummy text dummy text dummy text
		dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text 
		dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text 
		dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text.
		(p)
		</p>
<br />
<br />
		<p>
		#Ini Paragraph kedua, dummy text dummy text dummy text dummy text dummy text dummy text
		dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text 
		dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text 
		dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text.
		(p)
		</p>
<br />
<br />
		<!-- <aside>...</aside> element ini dirancang berada pada element artikel, biasa digunakan
		untuk menampilkan berita terkait, kutipan atau gambar terkait.-->
		<aside>Rekomendasi Artikel Terkait "Sejarah HTML5" (aside)</aside>
		<aside>Rekomendasi Artikel Terkait "Pengembang HTML5" (aside)</aside>
	
</article>
<br />
<br />
<!-- <figure>...<figcaption>...</figcaption></figure> element figure ini dirancang untuk menampilkan 
data personal, sedangkan figcaption untuk menampilkan keterangan gambar. -->
<figure>
<center>
<img width="250" height="80" src="upb.jpg" alt="UPB Kampus Merdeka" />
<figcaption>
Universitas Putera Batam (figcaption)
</figcaption>
</center>
</figure>
<br />
<br />
<br />
<br />
<!-- <footer>...</footer> element footer biasa digunakan untuk 
navigasi link tambahan kedua, atau untuk legal /copyright suatu halaman website.-->
<footer># footer -- Copyright <a href="http://tukino.ktkbm-batam.com/">MAS TUKINO</a> 2021 - All Right Reserved</footer>
</body>
</html>