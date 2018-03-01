<br><br><br>
<div class="col-lg-5 col-md-8">
  <div class="form">
  <form action="/blog/subedit/<?=$blog_ID?>" method="post" role="form" class="contactForm" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-lg-6">

        </div>
      </div>

      <div class="form-group">
        <input type="text" class="form-control"value="<?=$judul?>" name="judul" id="subject" placeholder="judul" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
        <div class="validation"></div>
      </div>
      <div class="form-group">
        <textarea wrap="hard" class="form-control"  name="isi"  data-rule="required" rows="8"  data-msg="Please write something for us" placeholder="Message"><?=$isi?></textarea>
        <div class="validation"></div>
      </div>
      <div class="text-center"><button type="submit" title="Send Message">Simpan</button></div>
    </form>
  </div>
</div>

</div>

</div>
</section>
