<!--================Food menu section start =================-->  
  <section>
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Menu</h4>
        <!-- <h2>Delicious food</h2> -->
      </div>
      <div class="row mb-5">
        <!-- first line -->
        <?php foreach($makanan as $key => $row):?>
          <?php if ($key !== 0 && $key%1 === 0) {
              echo '</div><div class="col-lg-6">';
            } ?>
          <div class="col-lg-6">
              <div class="media align-items-center food-card" id="makanan">
                <a href="#" onclick="loadMenu('<?= base_url('user/makanan/get_chef/'.$row->id_makanan);?>')">
                    <img class="mr-3 mr-sm-4" src="<?= base_url('assets/');?>img/home/food1.png" alt="">
                </a>
                <div class="media-body">
                  <div class="d-flex justify-content-between food-card-title">
                    <!-- <h4>Roasted Marrow</h4> -->
                    <h4>
                      <?= $row->nama_makanan ?>
                    </h4>
                    <h3 class="price-tag">
                      <?= $row->harga ?>
                    </h3>
                  </div>
                  <!-- <p>Whales and darkness moving form cattle</p> -->
                  <p>
                    <?= $row->deskripsi ?>
                  </p>
                <!-- </div> -->
              </div>
          </div>
          <?php endforeach;?>            


        <!-- end line -->
      </div>
    </div>
  </section>
<!--================Food menu section end =================-->  