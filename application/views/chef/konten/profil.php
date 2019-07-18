<div class="content-wrapper ">
  <div class="row justify-content-center ">
    <div class="col-md-8 grid-margin  ">
      <div class="card ">
        <!-- <img class="card-img-top" height="200px" src=""> -->
        <form id="name-val">
          <div class="card-body text-center">
            <img src="<?php echo base_url('assets/admin/images/samples/samples.jpg') ?>" alt="" class="img-md rounded-circle mb-3" width="100px" height="100px" />
            <div class="card-title" id="edit-name">
              <label id="name-lab">John doe</label>
              <button type="button" id="hide-name">
                <i class="mdi mdi-pencil"></i>
              </button>
            </div>
            <p class="card-text" id="p-overview">ui dolorum excepturi repudiandae atque dignissimos voluptatum aperiam!</p>
            <input class="form-control mb-3 value" type="hidden" name="id" value="14" id="id">
            <input class="form-control mb-3 value" type="text" name="name" value="john doe" id="name">
            <textarea class="form-control mb-3 value textarea-400" id="overview" name="overview">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.Ad blanditiis quam, sequi dolorum excepturi repudiandae atque dignissimos voluptatum aperiam!
        </textarea>
            <div id="btn-wrap">
              <button type="button" class="btn btn-primary mr-2" id="save-name">Save profil</button>
              <button class="btn btn-light" id="reset-name" type="button">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row justify-content-center ">
    <div class="col-md-4 grid-margin  ">
    <div class="card mb-4">
        <div class="m-3">
          <p class="float-left card-title">Alamat saya</p>
          <button type="button" id="hide-place" class="float-right">
            <i class="mdi mdi-pencil"></i>
          </button>
        </div>
        <div class="card-body" id="places">
          <address class="text-primary">
            <p class="mb-1">
              Jl. Kolonel sugiono,Soropaten 
            </p>
            <p class="mb-1">
              Ringinharjo Bantul
            </p>
            <p class="mb-1">
              Yogyakarta
            </p>
          </address>
          <div class="">
            <button>
              <i class="mdi mdi-anchor">Find me</i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin">
      <div class="card">
        <div class="m-3">
          <p class="float-left card-title">Contact </p>
          <button type="button" id="hide-contact" class="float-right">
            <i class="mdi mdi-pencil"></i>
          </button>
        </div>
        <div class="card-body" id="contact-form">
          <form>
            <address class="text-primary">
            <p class="font-weight-bold">
              E-mail
            </p>
            <p class="mb-1">
              johndoe@examplemeail.com
            </p>
            </address>
            <input type="tel" value="" name="no_telp" class="form-control contact-value mb-1">
            <input type="url" value="" name="url" class="form-control contact-value mb-1">
            <input type="text" value="" name="facebook" class="form-control contact-value mb-1">
            <input type="text" value="" name="twitter" class="form-control contact-value mb-1">
            <input type="text" value="" name="instagram" class="form-control contact-value mb-1">
            <div id="contact-wrap">
              <button type="button" class="btn btn-primary mr-2" id="save-contact">Save Contact</button>
              <button class="btn btn-light" id="reset-contact" type="button">Cancel</button>
            </div>
          </form>
        </div>
        <div class="card-body" id="contact">
          <address class="text-primary">
            <p class="font-weight-bold">
              E-mail
            </p>
            <p class="mb-1">
              johndoe@examplemeail.com
            </p>
            <p class="font-weight-bold">
              No Telepon
            </p>
            <p class="mb-1">
              089675000
            </p>
            <p class="font-weight-bold">
              Laman website
            </p>
            <p class="mb-1">
              https://unobplay.info
            </p>
          </address>
          <div class="d-flex flex-row align-items-top">
            <i class="mdi mdi-facebook text-facebook icon-md"></i>
            <div class="ml-3">
              <h6 class="text-facebook">Rihandaru</h6>
              <p class="mt-2 text-muted card-text">findme on facebook</p>
            </div>
          </div>
          <hr>
          <div class="d-flex flex-row align-items-top">
            <i class="mdi mdi-twitter text-twitter icon-md"></i>
            <div class="ml-3">
              <h6 class="text-twitter">@rihan.kucels</h6>
              <p class="mt-2 text-muted card-text">You main list growing</p>
            </div>
          </div>
          <hr>
          <div class="d-flex flex-row align-items-top">
            <i class="mdi mdi-instagram text-instagram icon-md"></i>
            <div class="ml-3">
              <h6 class="text-instagram">@de.rihanz</h6>
              <p class="mt-2 text-muted card-text">You main list growing</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('#name, #overview, #btn-wrap, #contact-form').hide();

    $('#hide-name').click(function() {
      $('#edit-name, #p-overview').hide();
      $('#name, #overview, #btn-wrap').show();
    });

    $('#hide-contact').click(function(){
      $('#contact').hide();
      $('#contact-form').show();
    });

    $('#save-name').click(function() {
      $('#name, #overview, #btn-wrap').hide();
      $('#edit-name, #p-overview').show();

      var dataForm = {};

      for (var i = $('.value').length - 1; i >= 0; i--) {
        dataForm[$('.value')[i]['name']] = $('.value')[i]['value'];
      }

      var url = '<?php echo base_url('profile/editname') ?>';

      $.ajax({
        url: url,
        type: 'post',
        data: dataForm,
        success: function(data, response, status) {
          console.log(data);
        },
        error: function(error) {
          console.log(error);
        }
      })
    });

    $('#save-contact').click(function() {
      $('#contact').show();
      $('#contact-form').hide();
    
      var contactForm = {};

      for(var i = $('.contact-value').length - 1; i >= 0; i--) {
        contactForm[$('.contact-value')[i]['name']] = $('.contact-value')[i]['value'];
      }

      var url = '<?php echo base_url('profile/editcontact') ?>';

      $.ajax({
        url: url,
        type: 'post',
        data: contactForm,
        success: function(data, response, status) {
          console.log(data);
        },
        error: function(error) {
          console.log(error);
        }
      })
    });

    $('#reset-contact').click(function(){
      $('#contact').show();
      $('#contact-form').hide();
    });
  });
</script>