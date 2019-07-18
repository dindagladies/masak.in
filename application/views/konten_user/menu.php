<!--================Blog section start =================-->  
<section>
    <div class="container">
        <div class="section-intro mb-75px">
            <h4 class="intro-title">Pilih Jenis Makanan</h4>
            <!-- <h2>Latest food and recipe news</h2> -->
        </div>

        <!-- first line -->
        <div class="row mb-5">
            <!-- <?php foreach($kategori as $key => $row):?>
                <?php if ($key !== 0 && $key%3 === 0) {
                    echo '</div><div class="row mb-5">';
                } ?> -->
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card-blog" name="kategori" id="kategori">
                            <a href="#" onclick="loadMenu('<?= base_url('user/makanan/get_makanan/'.$row->id_kategori);?>')">
                                <img class="card-img rounded-0" src="<?= base_url('assets/');?>img/blog/blog1.png" alt="">
                            </a>
                            <div class="blog-body">
                                <a href="#" onclick="loadMenu('<?= base_url('user/makanan/get_makanan/'.$row->id_kategori);?>')">
                                    <h3> <?= $row->nama_kategori; ?> <h3>
                                    <!-- <h3>Makanan Berat</h3> -->
                                </a>
                            </div>
                    </div>
                </div>
            <!-- <?php 
                endforeach ; 
            ?> -->
        </div>
        <hr>
        <!-- second line -->
    </div>
</section>
<!--================Blog section end =================-->  

<!-- <script type="text/javascript">
    $(document).ready(function(){

        $('#kategori').change(function(){ 
            var id=$(this).val();
            $.ajax({
                url : "<?php echo site_url('makanan/get_makanan');?>",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                        
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<a value='+data[i].id_makanan+'>'+data[i].nama_makanan+'</a>';
                    }
                    $('#makanan').html(html);

                }
            });
            return false;
        }); 
            
    });
</script> -->