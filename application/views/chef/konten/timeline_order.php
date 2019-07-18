<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Timeline</h4>
                    <p class="card-description">Timeline order</p>
                    <div class="d-flex">
                    <form>
                         <label>Select from : </label>
                        <input name="" id="datepicker">
                    </form>
                    </div>
                    <div class="mt-5">
                        <?php
                        echo '<div class="badge badge-pill badge-danger mb-4"><i class="mdi mdi-email mr-2"></i>'.$date.'</div>';
                        ?>
                        <div class="timeline">
                                
                                <?php
                                
                                $i = 1;
                                foreach ($timeline->result() as $row) {
                                ?>
                                <div class="timeline-wrapper timeline-inverted timeline-wrapper-info">
                                    <div class=""></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h6 class="timeline-title"><?php echo $row->nama_makanan ?></h6>
                                        </div>
                                        <div class="timeline-body mb-3">
                                            <p><?php echo $row->catatan ?></p>
                                        </div>
                                        <div class="timeline-footer d-flex align-items-center">
                                            <!-- <i class="mdi mdi-heart-outline text-muted mr-1"></i> -->
                                            <!-- <span>19</span> -->
                                            <!-- <div class="btn-group " role="group" aria-label="Basic example"> -->
                                                <!-- <a href="#">
                                                    <button type="button" class="btn-sm btn btn-primary" id="edit-click">
                                                        <i class="mdi mdi-pencil btn-icon-append"></i>
                                                    </button>
                                                </a> -->
                                                <label class="badge badge-danger"> <?php echo $row->status ?></label>
                                                    <!-- <i class="mdi mdi-delete btn-icon-prepend"></i> -->
                                                   
                                               
                                                <!-- <button type="button" class="btn-sm btn btn-primary delete" >
                                                    <i class="mdi mdi-delete btn-icon-prepend"></i>
                                                </button> -->
                                            <!-- </div> -->
                                            <span class="ml-auto font-weight-bold"><?php echo $row->created_at ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>
    $(document).ready(function(){
        $("#datepicker").datepicker();
    })  
    </script>
    