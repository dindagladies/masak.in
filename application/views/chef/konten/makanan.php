<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <div class="col-12">
                    <?php if ($this->session->flashdata('sukses')) { ?>
                        <div class="alert alert-fill-success" role="alert">
                            <i class="mdi mdi-alert-circle"></i>
                            <?php echo $this->session->flashdata('sukses') ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table id="dtBasicExample" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="th-sm">Name makanan
                                    </th>
                                    <th class="th-sm">deskripsi
                                    </th>
                                    <th class="th-sm">kategori
                                    </th>
                                    <th class="th-sm">harga
                                    </th>
                                    <th class="th-sm">stock
                                    </th>
                                    <th class="th-sm">author
                                    </th>
                                    <th class="th-sm">foto
                                    </th>
                                    <th>action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($data->result() as $row) {
                                    # code...
                                    ?>

                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $row->nama_makanan ?></td>
                                        <td><?php echo $row->deskripsi ?></td>
                                        <td><?php echo $row->nama_kategori ?></td>
                                        <td><?php echo  number_format($row->harga) ?></td>
                                        <td><?php echo  number_format($row->stock)?></td>
                                        <td><?php echo $row->author ?></td>
                                        <td><?php echo $row->foto ?></td>
                                        <td class="this-click">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="#" onclick="loadMenu('<?php echo base_url('makanan/edit/') . $row->id_makanan ?>')">
                                                    <button type="button" class="btn btn-primary" id="edit-click">
                                                        <i class="mdi mdi-pencil btn-icon-append"></i>
                                                    </button>
                                                </a>

                                                <button type="button" class="btn btn-primary delete" id="<?php echo $row->id_makanan; ?>" >
                                                    <i class="mdi mdi-delete btn-icon-prepend"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/admin/js/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/js/load.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        // $('#this-click').removeClass('sorting_asc')
    });


    $('.delete').on('click',function(){
        var mak_id = $(this).attr('id');
        if (confirm('Yakin akan menghapus data ini ?')) {
            $.ajax({
                url:'<?php echo base_url('makanan/delete') ?>',
                method:'POST',
                data:{id:mak_id},
                success:function(data){
                    setTimeout(loadMenu('<?php echo base_url('makanan/') ?>'), 2500);
                }
            })
        }else{
            return false;
        }
    })

</script>
<script>
</script>