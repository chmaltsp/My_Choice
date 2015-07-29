<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page', 'header'); ?>
<?php get_template_part( 'templates/content', 'page'); ?>
<?php endwhile; ?>
<div class="row last">
    <div class="col-xs-12 col-sm-12 col-md-offset-2 col-lg-offset-2 col-md-8 col-lg-8">
        <h3 class="text-center">If you would like to get in touch please fill out this form and we will reach out to you soon!</h3>
        <form id="contactContainer">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" type="text" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input class="form-control" id="phoneNumber" type="tel" placeholder="Enter your phone number"> </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" rows="4" id="message" placeholder="Enter your message"></textarea>
            </div>
            <div class="form-group">
                <button class="center-block btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
        </form>

    </div>

</div>
</div>
</div>
<div class="container-fluid">
    <div class="col-xs-12" id="map-canvas"></div>
</div>
<div class="container">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK6leCAPVJsU0nm4wShIX432Tz65_Uccw">
    </script>
    <script type="text/javascript">
        function initialize() {
            var myLatLng = new google.maps.LatLng(43.0417715, -87.9237193);
            var mapOptions = {
                center: {
                    lat: 43.0417715,
                    lng: -87.9237193
                },
                zoom: 15,
                disableDefaultUI: true
            };
            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
            var contentString = "<h4>My Choice Family Care</h4> <p>Milwaukee County Court House</p> <p> 901 N.9 th Street - Room 307 C </p> <p> Milwaukee WI, 53233 </p> <p> (414) 287-7600 </p>";
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,

            });
            map.panBy(100,-50);
            infowindow.open(map,marker);
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>