

            <section id="pricing" class="section-bg">
              <div class="container">

                <div class="section-header">
                  <h3 class="section-title">Profile Blogger</h3>
                  <span class="section-divider"></span>
                  </div>

                <div class="row">

                  <div class="col-lg-4 col-md-6">
                    <div class="box wow fadeInLeft">

                  <div class="col-lg-4 col-md-6">

                      <h1><?= $userid['nama'] ?></h1>
                      <h5><?=$userid['email']?></h5>
                      <ul>
                      </i> </li>

                        </ul>
                    </div>
                  </div>

                      <div class="row">

                        <div class="col-lg-4 col-md-6">


                        <div class="col-lg-4 col-md-6">
                          <h3>Blog:</h3>
      <?php
      foreach ( $user as $users ) {
        ?>
        <h5><?php
        echo "<a href = '/blog/". $users['blog_ID'] ."'>" . $users['judul']."<a><br>";
        ?></h5>
        <?php
        }
        ?>
                  <ul>
                            </i> </li>

                              </ul>
                          </div>
                        </div>

                </div>
              </div>
            </section><!-- #pricing -->
