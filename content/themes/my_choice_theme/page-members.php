<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part( 'templates/page', 'header'); ?>
    <!--  <?php get_template_part('templates/content', 'page'); ?>-->
    <?php endwhile; ?>
      <div class="row">
        <div class="col-xs-12 col-md-4">

          <p>My Choice Family Care is your source for <b>Long-Term Support You Can Trust!</b> Since 2000, we have provided the Family Care program to over 21,720 people in Milwaukee County. Today, we serve over 8,300 members.</p>
          <p>
            We are committed to helping the people in our community remain as independent as possible.We believe that if you need long-term care services, you should be able to get them when you need them and at a place you choose.</p>


        </div>

        <div class="col-xs-12 col-md-4">
          <p> Our goal is to work with you to design a plan to provide you with cost-effective care that meets your outcomes. We are a financially strong organization that strives to ensure that our members receive services that are delivered the Right Way for each Person – at the Right Time – in the Right Place – for the Right Cost and for the Right Reasons. View movie below to see how My Choice Family Care works with you and your family to be creative and keep you as independent as possible.</p>
        </div>
        <div class="col-xs-12 col-md-4">
          <h4>Member Portal Login</h4>
          <div class="mc-btn" id="partnerBooklet">
            <img src="/content/themes/my_choice_theme/assets/images/member_btn.jpg" alt="Members" />
            <div class="mc-btn-copy">
              <h4>Login to Portal Here</h4>
            </div>
          </div>
        </div>
      </div>
<div class="row">
        <h2>Member Resources</h2>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <a href="http://mychoice.localhost/content/uploads/2015/07/Being-A-Full-Partner-booklet.pdf" target="_blank">
            <div class="mc-btn" id="partnerBooklet">
              <img src="/content/themes/my_choice_theme/assets/images/member_btn.jpg" alt="Members" />

                <h4>Being a full partner handbook</h4>


            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <a href="#">
            <div class="mc-btn" id="memberHandbook">
              <img src="/content/themes/my_choice_theme/assets/images/member_btn.jpg" alt="Members" />

                <h4>Member Handbook</h4>


            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <a href="<?php echo get_page_link(101) ?>">
            <div class="mc-btn" id="memberRights">
              <img src="/content/themes/my_choice_theme/assets/images/member_btn.jpg" alt="Members" />

                <h4>Member Rights <br/>and Responsibilities</h4>


            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <a href="<?php echo get_page_link(97) ?>">
            <div class="mc-btn" id="grievance">
              <img src="/content/themes/my_choice_theme/assets/images/member_btn.jpg" alt="Members" />

                <h4>Grievance and Appeals</h4>


          </a>
        </div>
  </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <a href="<?php echo get_page_link(103) ?>">
            <div class="mc-btn" id="selfSupport">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/member_btn.jpg" alt="Members" />

                <h4>Self-Directed Support</h4>

            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <a href="#">
            <div class="mc-btn" id="memberBenefits">
              <img src="/content/themes/my_choice_theme/assets/images/member_btn.jpg" alt="Members" />

                <h4>Member Benefits</h4>


            </div>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h2>New to family care?</h2>
          <h4>Find a family care resource center today</h4>
          <div class="panel-group col-lg-9 " id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="kenoshaHeading">
                <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#kenosha" aria-expanded="true" aria-controls="kenosha">
          Kenosha County
        </a>
      </h4>
              </div>
              <div id="kenosha" class="panel-collapse collapse" role="tabpanel" aria-labelledby="kenoshaHeading">
                <div class="panel-body">
                  <h4>ADRC of Kenosha County</h4>
                  <p>8600 Sheridan Road, Suite 500</p>
                  <p>Kenosha, WI  53143</p>
                  <p><b>Phone:</b> (800) 472-8008</p>
                  <p><b>TTY/TDD/Relay:</b> WI Relay 711</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="milwaukeeHeading1">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#milwaukee1" aria-expanded="false" aria-controls="milwaukee1">
          Milwaukee County: Ages 18 to 59
        </a>
      </h4>
              </div>
              <div id="milwaukee1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="milwaukeeHeading1">
                <div class="panel-body">
                  <h4>The Disability Resource Center of Milwaukee County</h4>
                  <p>1220 W. Vliet Street, Suite 300</p>
                  <p>Milwaukee, WI 53205</p>
                  <p><b>Phone:</b> (414) 289-6660</p>
                  <p><b>TTY:</b>(414) 289-8559</p>
                  <p>The Milwaukee County Department of Health and Human Services operates the Disability Resource Center.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="milwaukeeHeading2">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#milwaukee2" aria-expanded="false" aria-controls="milwaukee2">
          Milwaukee County: Ages 60 and over
        </a>
      </h4>
              </div>
              <div id="milwaukee2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="milwaukeeHeading2">
                <div class="panel-body">
                  <h4>Aging Resource Center of Milwaukee County</h4>
                  <p>1220 W. Vliet Street, Suite 302</p>
                  <p>Milwaukee, WI 53205</p>
                  <p><b>Phone:</b> (414) 289-6874</p>
                  <p><b>TTY:</b> (414) 289-8591</p>
                  <p><b>Toll Free:</b> 1 (866) 229-9695</p>
                  <p>The Milwaukee County Department on Aging operates the Aging Resource Center.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="ozaukeeHeading">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ozaukee" aria-expanded="false" aria-controls="ozaukee">
          Ozaukee County
        </a>
      </h4>
              </div>
              <div id="ozaukee" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ozaukeeHeading">
                <div class="panel-body">
                  <h4>ADRC of Ozaukee County</h4>
                  <p>121 W. Main Street</p>
                  <p>Port Washington, WI</p>
                  <p><b>Phone:</b> (866) 537-4261</p>
                  <p><b>TTY/TDD/Relay:</b> WI Relay 711</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="racineHeading">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#racine" aria-expanded="false" aria-controls="racine">
          Racine County
        </a>
      </h4>
              </div>
              <div id="racine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="racineHeading">
                <div class="panel-body">
                  <h4>ADRC of Racine County</h4>
                  <p>14200 Washington Avenue</p>
                  <p>Sturtevant, WI</p>
                  <p><b>Phone:</b> (866) 219-1043</p>
                  <p><b>TTY/TDD/Relay:</b> WI Relay 711</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="sheboyganHeading">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#sheboygan" aria-expanded="false" aria-controls="sheboygan">
          Sheboygan County
        </a>
      </h4>
              </div>
              <div id="sheboygan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sheboyganHeading">
                <div class="panel-body">
                  <h4>ADRC of Sheboygan County</h4>
                  <p>650 Forest Avenue</p>
                  <p>Sheboygan Falls, WI</p>
                  <p><b>Phone:</b> (800) 596-1919</p>
                  <p><b>TTY/TDD/Relay:</b> (920)-467-4195</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="walworthHeading">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#walworth" aria-expanded="false" aria-controls="walworth">
          Walworth County
        </a>
      </h4>
              </div>
              <div id="walworth" class="panel-collapse collapse" role="tabpanel" aria-labelledby="walworthHeading">
                <div class="panel-body">
                  <h4>ADRC of Walworth County</h4>
                  <p>W4051 County Road NN</p>
                  <p>P.O. Box 1005</p>
                  <p>Elkhorn, WI</p>
                  <p><b>Phone:</b> (800) 365-1587</p>
                  <p><b>TTY/TDD/Relay:</b> (262) 741-3255</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="washingtonHeading">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#washington" aria-expanded="false" aria-controls="washington">
          Washington County
        </a>
      </h4>
              </div>
              <div id="washington" class="panel-collapse collapse" role="tabpanel" aria-labelledby="washingtonHeading">
                <div class="panel-body">
                  <h4>ADRC of Washington County</h4>
                  <p>333 E. Washington Street, Suite 1000</p>
                  <p>West Bend, WI  53095</p>
                  <p><b>Phone:</b> (877) 306-3030</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="waukeshaHeading">
                <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#waukesha" aria-expanded="false" aria-controls="waukesha">
          Waukesha County
        </a>
      </h4>
              </div>
              <div id="waukesha" class="panel-collapse collapse" role="tabpanel" aria-labelledby="waukeshaHeading">
                <div class="panel-body">
                  <h4>ADRC of Waukesha County</h4>
                  <p>500 Riverview Avenue</p>
                  <p>Waukesha, WI</p>
                  <p><b>Phone:</b> (866)</p>
                  <p><b>TTY/TDD/Relay:</b> WI Relay</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h2>Member Success Stories</h2>
          <h4>Look at what some of our members have to say</h4>
          <blockquote>Eiusmod enim nam aliquip transferrem, e minim doctrina, nam ex aliqua nisi legam ubi ubi irure quid do nescius est ut nisi consequat, te quid fabulaslegam ubi ubi irure quid do
            <p> <i>-- John Smith, member since 2005</i> </p>
          </blockquote>
          <blockquote>Eiusmod enim nam aliquip transferrem, e minim doctrina, nam ex aliqua nisi legam ubi ubi irure quid do nescius est ut nisi consequat,
            <p> <i>-- John Smith, member since 2005</i> </p>
          </blockquote>
        </div>
      </div>

      <div class="row last">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 faq">
          <h2>Frequently Asked Questions</h2>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Question 1</h4>
            </div>
            <div class="panel panel-body">
              <p>Aut ea sint pariatur. Est legam imitarentur, amet ne in minim litteris et ex aut concursionibus ad elit firmissimum mentitum culpa laborum. Culpa voluptate aut exquisitaque. Fabulas velit malis deserunt legam. Malis te quamquam ne culpa.
              </p>
            </div>
            <div class="panel-heading">
              <h4>Question 2</h4>
            </div>
            <div class="panel panel-body">
              <p>Aut ea sint pariatur. Est legam imitarentur, amet ne in minim litteris et ex aut concursionibus ad elit firmissimum mentitum culpa laborum. Culpa voluptate aut exquisitaque. Fabulas velit malis deserunt legam. Malis te quamquam ne culpa.
              </p>
            </div>
            <div class="panel-heading">
              <h4>Question 3</h4>
            </div>
            <div class="panel panel-body">
              <p>Aut ea sint pariatur. Est legam imitarentur, amet ne in minim litteris et ex aut concursionibus ad elit firmissimum mentitum culpa laborum. Culpa voluptate aut exquisitaque. Fabulas velit malis deserunt legam. Malis te quamquam ne culpa.
              </p>
            </div>


          </div>

        </div>


      </div>
