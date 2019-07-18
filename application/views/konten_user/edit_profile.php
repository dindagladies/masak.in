<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Profile</h2>
            </div>
            <div class="col-md-5 ml-auto">
                <form action="#" method="post">
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                                <!-- <a href="#" onclick="loadMenu('template/third_menu')"> -->
                                <img src="<?= base_url('assets/img/home/chef-1.png');?>" alt="Image placeholder" class="img-fluid rounded mb-4">
                                </a>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_fname" name="c_fname" value="<?php echo $food->nama_makanan ?>>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname">
                                </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-lg-12">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
            <div class="col-md-7">
                <form action="#" method="post">
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="c_subject" class="text-black">Description</label>
                            <input type="text" class="form-control" id="c_subject" name="c_subject">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                            <label for="c_message" class="text-black">Address</label>
                            <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                        </div>
                        <div>
                        <div >
                            <div class="d-none d-sm-block mb-5 pb-4">
                                <div id="map" style="height: 480px;"></div>
                                    <script>
                                    function initMap() {
                                        var uluru = {lat: -25.363, lng: 131.044};
                                        var grayStyles = [
                                        {
                                            featureType: "all",
                                            stylers: [
                                            { saturation: -90 },
                                            { lightness: 50 }
                                            ]
                                        },
                                        {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
                                        ];
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: -31.197, lng: 150.744},
                                        zoom: 9,
                                        styles: grayStyles,
                                        scrollwheel:  false
                                        });
                                    }
                                    
                                    </script>
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
                                    
                                </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save Profile">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>