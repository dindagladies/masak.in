<div class="content-wrapper">
    <div class="card">
   
        <div class="card-body">
            <h4 class="card-title">Horizontal Form</h4>
            
            
            <?php if ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-fill-danger d-flex" role="alert">
                                <i class="mdi mdi-alert-circle"></i>
                                <?php echo $this->session->flashdata('error') ?>
                            </div>
                        <?php } ?>
               
            <form class="forms-sample" id="food-form" method="post">
            
                <div class="form-group row">
                    <label for="Nama Makanan" class="col-sm-3 col-form-label">Nama Makanan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control this-value" id="makanan" placeholder="Nama Makanan" name="makanan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-9">
                        <select class="form-control this-value" id="kategori" name="kategori">
                            <option value="">-- pilih kategori --</option>
                            <?php
                            foreach ($data as $key => $value) {
                                echo "<option value='" . $value->id_kategori . "'>" . $value->nama_kategori . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea name="deskripsi" id="textwyg" cols="30" rows="10" class="form-control this-value"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Harga" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control this-value" id="harga" placeholder="00000" min="0" name="harga">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-3 col-form-label">Stock</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control this-value" id="stock" placeholder="Stock" min="0" name="stock">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-3 col-form-label ">Image</label>
                    <div class="col-sm-4">

                        <div class="dropify-wrapper">
                            <div class="dropify-message"><span class="file-icon"></span>
                                <p>Drag and drop a file here or click</p>
                                <p class="dropify-error">Ooops, something wrong appended.</p>
                            </div>
                            <div class="dropify-loader"></div>
                            <div class="dropify-errors-container">
                                <ul></ul>
                            </div>
                            <input type="file" name="foto" class="form-control dropify this-value" id="file-image" accept="image/*">
                            <button type="button" class="dropify-clear" id="remo-image">Remove</button>
                            <div class="dropify-preview">
                                <span class="dropify-render">
                                    <img id="preview" src="" alt="your image" />
                                </span>
                                <div class="dropify-infos">
                                    <div class="dropify-infos-inner">
                                        <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner" id="namafile"></span></p>
                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" name="action" class="btn btn-primary mr-2" value="add" />
                    <a href="#" class="btn btn-light" id='reset' onclick="resetData()">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/admin/js/trumbowyg.min.js') ?>"></script>
<script>
    function resetData() {
        $('.this-value').val('');
        remo();
    }

    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
                $('.dropify-preview').show();
                $('.dropify-loader').addClass('hide');
                $('.dropify-wrapper').addClass('has-preview');
                $('#namafile').html(input.files[0].name);
            }

            reader.readAsDataURL(input.files[0]);
        }
        // console.log(input.files[0].name);

    }

    function remo() {
        $('#preview').attr('src', null);
        $('.dropify-preview').hide();
        $('.dropify-loader').removeClass('hide');
        $('.dropify-wrapper').removeClass('has-preview');
        $('#namafile').html();
    }

    $(document).ready(function() {
        $('#file-image').change(function() {
            readURL(this);
            // alert('ganti')
        });


        $('#remo-image').click(function() {
            remo();
        });

    });
</script>
<script>
    $('#textwyg').trumbowyg();
</script>
<script>
    $(document).on('submit', '#food-form', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var url = '<?php echo base_url('makanan/add_proc ') ?>';

        var makanan = $('#makanan').val();
        var kategori = $('#kategori').val();
        var deskripsi = $('#textwyg').val();
        var harga = $('#harga').val();
        var stock = $('#stock').val();
        var file_image = $('#file-image');

        $.ajax({
            url: url,
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function(data, response) {
                if (data.error == 'false') {
                    $('.this-value').val('');
                    remo();
                    setTimeout(loadMenu('<?php echo base_url('makanan/') ?>'), 100);   
                }else if(data.error == 'error'){
                    setTimeout(loadMenu('<?php echo base_url('makanan/insert') ?>'), 100);  
                }
              
            },
            error: function(errorMessage) {
                console.log(errorMessage);
            }
        })

    })
</script>