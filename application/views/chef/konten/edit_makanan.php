<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Horizontal Form</h4>
            <p class="card-description">
                Edit Makanan
            </p>
            <form class="forms-sample" id="food-edit" method="post">
                <input type="hidden" name="id_makanan" value="<?php echo $food->id_makanan ?>" id="id_makanan">
                <div class="form-group row">
                    <label for="Nama Makanan" class="col-sm-3 col-form-label">Nama Makanan</label>
                    <div class="col-sm-9">
                        <input type="text" value="<?php echo $food->nama_makanan ?>" class="form-control this-value" id="makanan" placeholder="Nama Makanan" name="makanan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-9">
                        <select class="form-control this-value" id="kategori" name="kategori">
                            <?php
                                $kat = $this->db->select('nama_kategori')->from('kategoris')->where('id_kategori',$food->id_kategori)->get()->row();
                            ?>
                            <option value="<?php echo $food->id_kategori ?>"><?php echo $kat->nama_kategori ?></option>
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
                        <textarea name="deskripsi" id="textwyg" class="form-control this-value">
                        <?php echo $food->deskripsi ?>
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Harga" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control this-value" id="harga" placeholder="00000" min="0" name="harga" value="<?php echo $food->harga ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-3 col-form-label">Stock</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control this-value" id="stock" placeholder="Stock" min="0" name="stock" value="<?php echo $food->stock ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-3 col-form-label ">Image</label>
                    <div class="col-sm-4">
                        <img src="<?php echo base_url('')?>assets/uploads/foto_makanan/<?php echo $food->foto ?>">
                        <input type="hidden" id="foto_hiden" name="foto_hiden" value="<?php echo $food->foto ?>">
                        <input type="file" name="foto" class="form-control dropify this-value" id="file-image" accept="image/*">
                    </div>
                </div>
                <div>
                    
                    <input type="submit" name="action" class="btn btn-primary mr-2" value="Edit" />
                    <a href="#" class="btn btn-light" onclick="loadMenu('<?php echo base_url('makanan/') ?>')">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/admin/js/trumbowyg.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/js/load.js') ?>"></script>
<!-- <script>
   

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
    
</script> -->
<script>
    $('#textwyg').trumbowyg();

    var redirect = '<?php echo base_url('makanan/') ?>';

    function resetData() {
        window.location.href = redirect;
    }

    $(document).on('submit', '#food-edit', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var url = '<?php echo base_url('makanan/edit_proc') ?>';
        

        var id_makanan = $('#id_makanan').val();
        var foto_hiden = $('#foto_hiden').val();
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
            success: function(status){
                console.log(status);
                $('.this-value').val('');
                setTimeout(loadMenu('<?php echo base_url('makanan/') ?>'), 2000);
            },
            error: function(errorMessage) {
                console.log(errorMessage);
            }
        })
    })
</script>
