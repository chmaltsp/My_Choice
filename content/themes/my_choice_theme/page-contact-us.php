
<div class="container">
  <?php

    //response generation function
    $response = "";

    //function to generate response
    function my_contact_form_generate_response($type, $message){

      global $response;

      if($type == "success")  $response = "<h4 class='parsley-success'>{$message}</h4>";
      else $response = "<h4 class='parsley-error'>{$message}</h4>";

    }
    //response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$phone_number = $_POST['message_phone_number'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

  ?>


<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page', 'header'); ?>
<?php get_template_part( 'templates/content', 'page'); ?>

<div class="row last">
    <div class="col-xs-12 col-sm-12 col-md-offset-2 col-lg-offset-2 col-md-8 col-lg-8">
      <?php the_field('additional_info'); ?>
        <h3 class="text-center"><?php the_field('contact_us_headline'); ?></h3>
         <?php echo $response; ?>
        <form id="contactContainer" action="<?php the_permalink(); ?>" method="post" >
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" name="message_name" type="text" placeholder="Enter your name" value="<?php echo esc_attr($_POST['message_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="message_email">Email</label>
                <input class="form-control" id="email" type="email" placeholder="Enter your Email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="message_phone_number">Phone Number</label>
                <input class="form-control" id="phoneNumber" type="tel" placeholder="Enter your phone number" name="message_phone_number" value="<?php echo esc_attr($_POST['message_phone_number']); ?>" required> </div>
            <div class="form-group">
                <label for="message_text">Message</label>
                <textarea class="form-control" rows="4" id="message" name="message_text" placeholder="Enter your message" required><?php echo esc_textarea($_POST['message_text']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="message_human">Verify that you are a human</label>
                <input class="form-control" id="humanVerification" type="text" placeholder="" name="message_human" style="width:60px; display:inline-block;" value="<?php echo esc_attr($_POST['message_human']); ?>"><span>+ 3 = 5</span></div>
            <div class="form-group">
              <input type="hidden" name="submitted" value="1">
                <button class="center-block btn btn-primary btn-lg" type="submit" id="contactSubmit">Submit</button>
            </div>
        </form>

    </div>

</div>
</div>
</div>
<?php endwhile; ?>
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
