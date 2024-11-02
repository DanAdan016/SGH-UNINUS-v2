
@extends('welcome')

@section('content')

<section class="hero-area d-flex align-items-center justify-content-center position-relative" style="background-image: url('asset/img/uninusdrown.jpg'); background-size: cover; background-position: center; position: relative; overflow: hidden;">
  <div class="container position-relative" style="z-index: 2;">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="text-white animate-slide-up" data-aos="fade-down" style="z-index: 3; color: white;">
          <b>TIM KINERJA</b>
        </h2>
      </div>
    </div>
  </div>
</section>


<!-- End Hero Area -->

<!-- Start PENJELASAN  -->
<section id="overview" class="app-info section" style="padding-top:70px;padding-bottom:70px; font-family: 'Book Antiqua', serif;">
    <div class="container">
        <div class="info-one">
            <div class="row align-items-center">
                  <!-- Kolom gambar -->
                  <div class="col-md-6 p-0" data-aos="zoom-in">
                     <div class="image-container position-relative">
                        <img src="https://i.pinimg.com/474x/c8/a6/6b/c8a66bb1bf09eac97d51292ebc89c448.jpg" alt="Gambar Smart Green House" class="img-fluid hover-zoom" style="width: 100%; height: auto; object-fit: cover; min-height: 300px;">
                     </div>
                  </div>
                  <!-- END Kolom gambar -->

                      <!-- Kolom PENJELASAN -->
                  <div class="col-md-6 d-flex" data-aos="fade-left">
                     <div class="card flex-grow-1 border-0 p-4 bg-white">
                        <div class="card-body d-flex flex-column justify-content-between" style="background-color: green; border-radius: 15px;">
                              <div>
                                 <h5 class="card-title mb-4" style="color:aliceblue;"><i class="fas fa-leaf me-2"></i> TEAM SUPPORT</h5>
                                 <div class="mt-2">
                                    <span class="ml-2" style="text-align: justify; color:aliceblue;">
                                       <b><i>Smart Green House</i></b> adalah proyek inovatif kolaborasi lintas disiplin Uninus yang mengintegrasikan teknologi dengan pertanian berkelanjutan.
                                          <br>
                                          Proyek ini mengintegrasikan keahlian berbagai disiplin untuk menciptakan sistem pertanian yang efisien, memanfaatkan teknologi canggih seperti sensor dan irigasi pintar untuk meningkatkan produktivitas tanaman dan penghematan sumber daya.
                                          <span id="toggleText" style="text-align: justify; color:yellow;" onclick="toggleParagraph()"><b>selengkapnya....</b></span>
                                    </span>
                                 </div>
                                 <div id="extraParagraph" class="mt-2" style="display: none;">
                                    <p class="card-text mb-3" style="text-align: justify; color:aliceblue;">
                                       <i>Smart Greenhouse</i> ini merupakan hasil kerja keras tim lintas disiplin dari Fakultas Pertanian dan Fakultas Teknik Uninus. Dosen-dosen yang terlibat dalam pengembangan proyek ini antara lain:
                                       <br>
                                       •	<b>Ir. Lilis Irmawatie, M.M.Pd</b> (Dekan Fakultas Pertanian)
                                             Sebagai penanggung jawab utama dari proyek smart greenhouse berbasis dan mengawasi keseluruhan perencanaan dan pembuatan <i>smart greenhouse</i>.
                                       <br>
                                       •	<b>Dr. Debby Ustari, S.P., M.P dan Dr. Syayidah Nuriyah,  S.Pd., M.Si</b> (Dosen dan Peneliti) 
                                             Mengawasi keseluruhan perencanaan agronomis dan teknis di dalam <i>smart greenhouse</i>, serta bertanggung jawab dalam pengembangan penelitian yang diterapkan.	
                                       <br>
                                       •	<b>Pak GALIH, S.T., M.KOM. dan Pak Ganis Sanhaji, S.Si., M.Sc.</b> berperan dalam penerapan sistem <i>IoT</i>, khususnya dalam desain arsitektur sistem pemantauan otomatis. 
                                       <br>
                                       •	<b>Tim Mahasiswa</b>
                                             Mahasiswa dari Fakultas Pertanian dan Fakultas Teknik turut ambil bagian dalam proyek, baik sebagai perancang sistem maupun tenaga operasional. Mahasiwa tidak hanya mempelajari konsep teoritis tentang pertanian dan teknologi, tetapi juga mendapatkan pengalaman langsung dalam mengelola dan memantau sistem berbasis <i>IoT</i>
                                    </p>
                                    <span id="closeText" class="cursor-pointer text-blue-500" style="display: none; color:yellow;" onclick="toggleParagraph()"><b>tutup..</b></span>
                                 </div>
                              </div>
                              <p class="mt-4 mb-0 text-end" style="font-size: 14px; color:aliceblue;"><i class="fas fa-users me-1"></i> Tim Ahli Pertanian & Teknologi</p>
                        </div>
                     </div>
                  </div>
                  <!-- END Kolom PENJELASAN -->
            </div>
        </div>
    </div>
</section>
<!-- End PENJELASAN -->

<!-- Start DOSEN -->
<section style="background-color: #1C532A;">
   <div class="card__container swiper" >
            <div class="row align-items-center">
                <div class="col-md-12 col-12 mb-4">
                     <div class="card__content">
                           <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: -0px; margin-bottom: 50px;">
                              <h5 class="card-title" style="color: aliceblue; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #fff; padding-bottom: 10px;">
                                 TIM DOSEN
                              </h5>
                           </div>
                        <div class="swiper-wrapper">
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background-color: white;">
                                 <h3 class="card__name">Kell Dawx</h3>
                                 <p class="card__description">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>
                                 <div class="card__box">
                                    <a href="https://www.linkedin.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo_scopus-removebg-preview.png')}}" alt="LinkedIn" class="social-ico">
                                    </a>
                                    <a href="https://github.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo.scholar-removebg-preview.png')}}" alt="GitHub" class="social-ico">
                                    </a>
                                 </div>
                              </div>
                           </article>
               
                           <article class="card__article swiper-slide">
                           <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi-removebg-preview(2).png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background-color: white;">
                                 <h3 class="card__name">Lotw Fox</h3>
                                 <p class="card__description">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>
                           
                                 <div class="card__box">
                                    <a href="https://www.linkedin.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo_scopus-removebg-preview.png')}}" alt="LinkedIn" class="social-ico">
                                    </a>
                                    <a href="https://github.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo.scholar-removebg-preview.png')}}" alt="GitHub" class="social-ico">
                                    </a>
                                 </div>
                           </div>
                           
                           </article>
               
                           <article class="card__article swiper-slide">
                           <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi-removebg-preview(2).png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background-color: white;">
                                 <h3 class="card__name">Sara Mit</h3>
                                 <p class="card__description">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>
               
                                 <div class="card__box">
                                    <a href="https://www.linkedin.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo_scopus-removebg-preview.png')}}" alt="LinkedIn" class="social-ico">
                                    </a>
                                    <a href="https://github.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo.scholar-removebg-preview.png')}}" alt="GitHub" class="social-ico">
                                    </a>
                                 </div>
                              </div>
                           </article>
               
                           <article class="card__article swiper-slide">
                           <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                              <img src="{{asset('asset/img/hamdi-removebg-preview(2).png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background-color: white;">
                                 <h3 class="card__name">Jenny Wert</h3>
                                 <p class="card__description">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>
               
                                 <div class="card__box">
                                    <a href="https://www.linkedin.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo_scopus-removebg-preview.png')}}" alt="LinkedIn" class="social-ico">
                                    </a>
                                    <a href="https://github.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo.scholar-removebg-preview.png')}}" alt="GitHub" class="social-ico">
                                    </a>
                                 </div>
                              </div>
                           </article>

                           <article class="card__article swiper-slide">
                           <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                              <img src="{{asset('asset/img/hamdi-removebg-preview(2).png')}}" alt="image" class="card__img">
                                 <div class="card__shadow"></div>
                              </div>
               
                              <div class="card__data" style="background-color: white;">
                                 <h3 class="card__name">Lexa Kin</h3>
                                 <p class="card__description">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>
               
                                 <div class="card__box">
                                    <a href="https://www.linkedin.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo_scopus-removebg-preview.png')}}" alt="LinkedIn" class="social-ico">
                                    </a>
                                    <a href="https://github.com" target="_blank">
                                       <img src="{{asset('asset/img/logo/logo.scholar-removebg-preview.png')}}" alt="GitHub" class="social-ico">
                                    </a>
                                 </div>
                              </div>
                           </article>
                        </div>
                     </div>

                     <!-- Navigation buttons -->
                     <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                     </div>
                     
                     <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                     </div>

                     <!-- Pagination -->
                     <div class="swiper-pagination"></div>
                </div>
         </div>
   </div>
</section>
<!-- End DOSEN -->

<!-- Start MAHASISWA -->
<section>
   <div class="card__container swiper">
      <div class="card__content">
                     <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: -0px; margin-bottom: 50px;">
                        <h5 class="card-title" style="color: #008000; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid green; padding-bottom: 10px;">
                           TIM MAHASISWA
                        </h5>
                     </div>
                        <div class="swiper-wrapper">

                           <!-- tim inti mahasiswa -->

                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/mahasiswa/imam.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">imam</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                 Passionate about development and design, 
                                 I carry out projects at the request of users.
                                 </p>
                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 1 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/mahasiswa/indra.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Indra Saputra</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Teknik Elektro
                                 </p>
                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 2 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/boy-removebg-preview(1).png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Boyke Adam</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                       Passionate about development and design, 
                                       I carry out projects at the request of users.
                                 </p>
                              
                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 3 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/mahasiswa/riski-removebg-preview(1).png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Rizki Hendriawan</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 4 -->
                           <article class="card__article swiper-slide">
                           <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                              <img src="{{asset('asset/img/mahasiswa/aby.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Aby Herdiansyah</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 5 -->
                           <article class="card__article swiper-slide">
                           <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                              <img src="{{asset('asset/img/mahasiswa/zen.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Zen Ahlil Baeri</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 6 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/mahasiswa/Syadan.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Muhamad Sya'dan M</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 7 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/mahasiswa/ipin.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Ipin Ahmad Syarifudin</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 8 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/mahasiswa/anif-removebg-preview.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Anif Alfianto</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 9 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 10 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 11 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 12 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 13 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 14 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 15 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                           <!-- 16 -->
                           <article class="card__article swiper-slide">
                              <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                                 <img src="{{asset('asset/img/hamdi.png')}}" alt="image" class="card__img" style="width: 180px; height: 200px;">
                                 <div class="card__shadow"></div>
                              </div>

                              <div class="card__data" style="background-color: green;">
                                 <h3 class="card__name" style="color:aliceblue;">Kell Dawx</h3>
                                 <p class="card__description" style="color:aliceblue;">
                                    Passionate about development and design, 
                                    I carry out projects at the request of users.
                                 </p>

                                 <div class="card__box">
                                       <a href="https://www.linkedin.com" target="_blank">
                                       <i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                                       <i class="fa-brands fa-square-github fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                       <a href="https://www.instagram.com" target="_blank">
                                       <i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i>
                                       </a>
                                 </div>
                              </div>
                           </article>

                        </div>
      </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next">
               <i class="ri-arrow-right-s-line"></i>
            </div>
            
            <div class="swiper-button-prev">
               <i class="ri-arrow-left-s-line"></i>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
   </div>
</section>
<!-- End MAHASISWA -->

<!-- Start VENDOR -->
<section style="background-color: #1C532A;">
   <div class="card__container swiper">
      <div class="card__content">
         <div class="judul" style="display: flex; justify-content: center; align-items: center; height: 105px; margin-top: 0; margin-bottom: 50px;">
            <h5 class="card-title" style="color: aliceblue; font-size: 1.8em; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #fff; padding-bottom: 10px;">
               TIM VENDOR
            </h5>
         </div>
         <div class="swiper-wrapper">
            <!-- 1 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/hamditrb.png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background-color: white;">
                  <h3 class="card__name">Hamdi Sholahudin, S.T</h3>
                  <p class="card__description">
                     IoT Engineer | Embedded System IoT | Elektrical Engineer
                  </p>

                  <div class="card__box">
                     <a href="https://www.linkedin.com/in/hamdi-sholahudin/" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://github.com/HamdiSholahudin" target="_blank" style="margin-left: 20px; margin-right:20px">
                        <i class="fa-brands fa-square-github fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://www.instagram.com" target="_blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                     </a>
                  </div>
               </div>
            </article>

            <!-- 2 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/hamdi-removebg-preview(2).png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background-color: white;">
                  <h3 class="card__name">Ferry Aditya H, S.T</h3>
                  <p class="card__description">
                  Web Developer | IoT Engineer | IT Support
                  </p>

                  <div class="card__box">
                     <a href="https://www.linkedin.com/in/ferry-aditya-herman/" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://github.com/Fekka1st" target="_blank"style="margin-left: 20px; margin-right:20px">
                        <i class="fa-brands fa-square-github fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://www.instagram.com" target="_blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                     </a>
                  </div>
               </div>
            </article>

            <!-- 3 -->
            <article class="card__article swiper-slide">
               <div class="card__image" style="display: flex; justify-content: center; align-items: center; position: relative;">
                  <img src="{{asset('asset/img/hamdi-removebg-preview(2).png')}}" alt="image" class="card__img">
                  <div class="card__shadow"></div>
               </div>

               <div class="card__data" style="background-color: white;">
                  <h3 class="card__name">Pak Adang</h3>
                  <p class="card__description">
                     Passionate about development and design, 
                     I carry out projects at the request of users.
                  </p>

                  <div class="card__box">
                     <a href="https://www.linkedin.com" target="_blank">
                        <i class="fa-brands fa-linkedin fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://github.com" target="_blank" style="margin-left: 20px; margin-right:20px">
                        <i class="fa-brands fa-square-github fa-2xl" style="color: #000;"></i>
                     </a>
                     <a href="https://www.instagram.com" target="_blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                     </a>
                  </div>
               </div>
            </article>
         </div> <!-- Penutup yang diperbaiki -->

         <!-- Navigation buttons -->
         <div class="swiper-button-next">
            <i class="ri-arrow-right-s-line"></i>
         </div>
         
         <div class="swiper-button-prev">
            <i class="ri-arrow-left-s-line"></i>
         </div>

         <!-- Pagination -->
         <div class="swiper-pagination"></div>
      </div>
   </div>
</section>
<!-- End VENDOR -->

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
<link rel="stylesheet" href="{{asset('asset/css/swiper-bundle.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">
<style>
.hero-area::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Filter hitam */
  z-index: 1; /* Menempatkan filter di bawah teks */
}
</style>
@endsection

@section('script')

<!--=============== SWIPER JS ===============-->
<script src="{{asset('asset/js/swiper-bundle.min.js')}}"></script>

<!--=============== MAIN JS ===============-->
<script src="{{asset('asset/js/main.js')}}"></script>

@endsection

