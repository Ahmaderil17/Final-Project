

<!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Sidrap</h2>
      <h3>ᨀᨅᨘᨄᨈᨙ ᨔᨗᨉᨙᨋᨙᨑᨄ</h3>
      <p>Kota dengan Budaya,Kreatifitas,Inspirasi</p>
      </div>

    <div class="product-screens">

      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img src="/aset/img/kota.png" alt="">
      </div>

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="/aset/img/sawah.png" alt="">
      </div>

      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img src="/aset/img/telur.png" alt="">
      </div>

    </div>

  </section>


       <!--==========================
         Product Advanced Featuress Section
       ============================-->
       <?php
       foreach ($blogs as $blog) {
         ?>

       <section id="advanced-features">

         <div class="features-row section-bg">
           <div class="container">
             <div class="row">
               <div class="col-12">
                 <img class="advanced-feature-img-right wow fadeInRight" src="img/advanced-feature-1.jpg" alt="">
                 <div class="wow fadeInLeft">
                   <?php
                   echo "<img src=\"./aset/img/gambar/".$blog['blog_ID'].".".$blog['foto']."\">";
                   ?>


                   <?php
                   echo "<a href='/blog/" . $blog['blog_ID']."'>".$blog['judul'].' '.$blog['tanggal']."<a><br><br>";
                   ?>

                 </div>
               </div>
             </div>

           </div>
         </div>

               <?php
               }
                ?>


      <!--==========================
        Call To Action Section
      ============================-->
      <section id="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Pesan blogger</h3>
              <p class="cta-text"> Itulah sepenggal cerita tentang kota SIDRAP kota dengan penuh kekayaan dan keragaman baik dari segi adat dan budaya serta kebiasaan masyarakat,Jadi tunggu apalagi #AYOKESIDRAP.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="/welcome">Kembali ke HOME</a>
            </div>
          </div>

        </div>
      </section><!-- #call-to-action -->


          <div class="row">

        </div>
      </section>

      <!-- #more-features -->

      <!--==========================
        Clients
      ============================-->
      <section id="clients">
        <div class="container">


          </div>
        </div>
      </section><!-- #more-features -->

          <div class="row">

        </div>
      </section><!-- #pricing -->


      </section><!-- #faq -->



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Ahmad eril</h3>
              <p>Sistem informasi 2015</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Jl. Meranti no 1 Paropo,panakunang<br>Makassar, MKS 90244</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>ahmaderil_16@kharisma.ac.id</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+6282311115750</p>
              </div>

            </div>
          </div>



<!-- #contact -->



  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Avilon</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade </a>dan AHMAD ERIL
          </div>
        </div>
        <div class="col-lg-6">
          <?php
        if( isset( $this->session->nama ) ){
        echo $this->session->nama .
        "(<a href='/signout'>signout</a>)" ;
        }
        ?>
        </div>
      </div>
    </div>
  </footer>

  <!-- #footer -->
