<br>
      <section id="advanced-features">
        <div class="features-row section-bg">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="wow fadeInLeft">
                  <h2><?= $blog['judul'] ?></h2>

                  <p>
                    <?php
                    echo "<img src=\"/aset/img/gambar/".$blog['blog_ID'].".".$blog['foto']."\">";
                    ?>
                <div class="wow fadeInLeft">
                    <?php
                    $isi = str_replace("\n","<br>",$blog['isi']);
                    echo $isi;
                     ?>

                    <p>



                    </div>
              </div>
            </div>
          </div>
        </div>

          <section id="about" class="section-bg">
                <div class="container-fluid">
                  <div class="section-header">
                    <h3 class="section-title">Ditulis Oleh</h3>
                      <?php
                      echo "<a href='/user/".$blog['user_ID']."'>".$blog['nama']."<a><br><br>";
                      ?>
                    <span class="section-divider"></span>

<?php
  if(($this->session->uid)==$blog['user_ID']){
 ?>

  <div class="text-center" id="bt_edit">
    <a href="/blog/edit/<?= $blog['blog_ID'] ?>"
  </div> <button type="submit" >EDIT</button><a/></div><br><br>

    <div class="text-center" id="bt_delete">
      <a href="/blog/delete/<?= $blog['blog_ID'] ?>"
    </div> <button type="submit" >DELETE</button> <a/></div>

  <?php } ?>
