<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Profile</h2>
            </div>
            <div class="col-md-5 ml-auto">
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Photo</span>
                    <!-- <p class="mb-0">Dinda</p> -->
                    <img src="<?= base_url('assets/img/home/chef-1.png');?>" alt="Image placeholder" class="img-fluid rounded mb-4">
                </div>
                <div class="p-4">
                    <button class="btn btn-outline-primary btn-sm btn-block" onclick="loadMenu('<?= base_url('user/user/edit_profile');?>')">Edit Profile</button>
                </div>
            </div>
            <div class="col-md-7">
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">First Name</span>
                    <p class="mb-0">Dinda</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Last Name</span>
                    <p class="mb-0">Dara</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">I'm a</span>
                    <p class="mb-0">Customer</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Address</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Description</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Others</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div  class="p-4 border mb-3">
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
            
            
        </div>
    </div>
</div>