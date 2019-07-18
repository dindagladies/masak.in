  <!--================Chef section start =================-->  
  <section>
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Pilih Chef</h4>
        <!-- <h2>Talent & experience member</h2> -->
      </div>

      <div class="row">
        <?php foreach($chef as $key => $row):?>
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="chef-card">
                <img class="card-img rounded-0" src="<?= base_url('assets/');?>img/home/chef-1.png" alt="">
              <div class="chef-footer">
                <a href="#" onclick="loadMenu('<?= base_url('user/order/get_order');?>')">
                  <!-- <h4>Daniesl Laran</h4> -->
                  <!-- <p>Spesialis Daging</p> -->
                  <h4><?= $row->nama_chef ?></h4>
                </a>
                <ul class="rating-star">
                  <li><i class="ti-star"></i></li>
                  <li><i class="ti-star"></i></li>
                  <li><i class="ti-star"></i></li>
                  <li><i class="ti-star"></i></li>
                  <li><i class="ti-star"></i></li>
                </ul>
              </div>

              <div class="chef-overlay">
                <ul class="social-icons">
                  <li><a href="#"><i class="ti-facebook"></i></a></li>
                  <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li><a href="#"><i class="ti-skype"></i></a></li>
                  <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach ;?>
      </div>
    </div>
  </section>
  <!--================Chef section end =================-->  