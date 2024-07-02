<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tentang</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / tentang</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>mengapa memilih kami?</h3>
         <h1>Ada Beberapa hal yang dapat anda harus memilih kami</h1>
         <ul>
            <li>
               <p><b>Kualitas Terbaik</b> : kami menggunakan bahan-bahan berkualitas tinggi untuk memastikan setiap hidangan yang kami sajikan lezat dan sehat.</p>
            </li>
            <li>
               <p><b>Pelayan Ramah</b> : karyawan kami terlatih untuk memberikan pelayanan yang ramah dan profesional, membuat pengalaman bersantap Anda lebih menyengkan</p>
            </li>
            <li>
               <p><b>Harga terjangkau</b> : kami percaya bahwa makanan enak tidak perlu mahal. Oleh karna itu, kami menawarkan harga yang bersahabat di kantong anda tanpa mengorbankan Kualitas</p>
         </li>
         </ul>   
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple step</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>pilih pesanan</h3>
         <p>anda dapat memilih pesanan makanan dari handphone/laptop, anda karna sistem pesanan melalui website, tapi jika anda tidak
            bisa melakukan pemesanaan berarti handphone anda yang harus di ganti"</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>pengiriman cepat</h3>
         <p>karyawan pengiriman kami terkenal dengan ketepat waktuan pengiriman pesanan anda, karna karyawan kami pernah memenangkan 
            kejuaraan moto GP di mandalika.
         </p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>nikmati makanan</h3>
         <p>selamat, anda dapat menikmati makanan lezat dari kami, dan tolong beri comentar bagus tentang restoran kami atau tidak 
            akan kami ledakan rumah anda dengan nuklir kami 
         </p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/people/the rock.jpeg" alt="">
            <p>makanan disini luar biasa! setiap hidangan penuh dengan cita rasa yang autekntik sampai-sampai mata saya jadi seperti ini.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>the rock</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/people/kak gem.jpeg" alt="">
            <p>jika anda ingin menikmati makanan enak, lezat dan aman di kantong maka anda harus mencoba membeli di sini, Pahhamm!!.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>kak gem</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/people/elon musk.jpg" alt="">
            <p>makanan disini sangat enak, sampai-sampai saya dapat ingin mebuat roket baru untuk penjelajahan planet mars.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>elon musk</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/people/donald trump.jpg" alt="">
            <p>Harga yang di tawarkan sangat terjangkau untuk makanan yang luar bisa ini dan makanan di sini bisa untuk bersaing dengan makanan cina sana .</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>donald trump</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/people/jungkook.jpeg" alt="">
            <p>Pasti akan merekomendasikan restoran ini kepada rekan anggota tim saya. pengalaman kuliner yang tidak terlupakan.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>teh ganyung</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/people/ronaldo.jpg" alt="">
            <p>adada%^@&UJDWID((U242'--?, SIIUUUUUUUUUU!!!!!.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ronaldo wati</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/people/mr waaduh.jpeg" alt="">
            <p>waduh hana payah ka tanyong le, kok mangat makanan hino jeut ka pesan aja tinggai kapreh me padum menet ka trok nyan makanan ih.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mr waaduh</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/people/messi.jpg" alt="">
            <p>Arti nya apa bang messi.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>messi</h3>
         </div>
      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>