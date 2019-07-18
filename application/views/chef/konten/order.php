<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Order</h4>
            <div class="row">
                <div class="col-12">
                    <?php if ($this->session->flashdata('sukses')) { ?>
                        <div class="alert alert-fill-success" role="alert">
                            <i class="mdi mdi-alert-circle"></i>
                            <?php echo $this->session->flashdata('sukses') ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table id="data_order" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="th-sm">Name makanan
                                    </th>
                                    <th class="th-sm">customer
                                    </th>
                                    <th class="th-sm">harga
                                    </th>
                                    <th class="th-sm">jumlah
                                    </th>
                                    <th class="th-sm">total harga
                                    </th>
                                    <th class="th-sm">status
                                    </th>
                                    <th>action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($order->result() as $row) {
                                    # code...
                                    ?>

                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $row->nama_makanan ?></td>
                                        <td><?php echo $row->customer ?></td>
                                        <td><?php echo  number_format($row->harga) ?></td>
                                        <td><?php echo  number_format($row->jumlah) ?></td>
                                        <td><?php echo  number_format($row->total_harga) ?></td>
                                        <td>
                                            <?php 
                                            if($row->status == 'cancel'){
                                                echo '<label class="badge badge-warning">cancel</label>';
                                            }else if($row->status == 'proses'){
                                                echo '<label class="badge badge-info">di proses</label>';
                                            }else if($row->status == 'selesai'){
                                                echo '<label class="badge badge-success">Selesai</label>';
                                            }else if($row->status == 'pending'){
                                                echo '<label class="badge badge-danger">Pending</label>';
                                            }
                                            ?>
                                        </td>
                                        <td class="this-click">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="#">
                                                    <button type="button" class="btn btn-primary" id="edit-click">
                                                        <i class="mdi mdi-pencil btn-icon-append"></i>
                                                    </button>
                                                </a>

                                                <!-- <button type="button" class="btn btn-primary delete" id="<?php echo $row->id_order; ?>" >
                                                    <i class="mdi mdi-delete btn-icon-prepend"></i>
                                                </button> -->
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
        $('#data_order').DataTable();
        // $('#this-click').removeClass('sorting_asc')
    });
</script>