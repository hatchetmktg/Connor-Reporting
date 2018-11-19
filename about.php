<?php 
// Template Name: About Page

get_header();
?>

<style>
/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline {
  white-space: nowrap;
  overflow-x: hidden;
}

.timeline ol {
  font-size: 0;
  width: 100vw;
  padding: 250px 0;
  transition: all 1s;
}

.timeline ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 160px;
  height: 3px;
  background: #fff;
}

.timeline ol li:last-child {
  width: 280px;
}

.timeline ol li:not(:first-child) {
  margin-left: 14px;
}

.timeline ol li:not(:last-child)::after {
  content: '';
  position: absolute;
  top: 50%;
  left: calc(100% + 1px);
  bottom: 0;
  width: 12px;
  height: 12px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: #F45B69;
}

.timeline ol li div {
  position: absolute;
  left: calc(100% + 7px);
  width: 285px;
  padding: 15px;
  font-size: 1rem;
  white-space: normal;
  color: black;
  background: white;
  border-radius: 10px
}

.timeline ol li div::before {
  content: '';
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-radius: 0px
}

.timeline ol li:nth-child(odd) div {
  top: -16px;
  transform: translateY(-100%);
}

.timeline ol li:nth-child(odd) div::before {
  top: 98%;
  border-width: 8px 10px 0 0px;
  border-color: white transparent transparent white;
  transform: rotate(30deg);
}

.timeline ol li:nth-child(even) div {
  top: calc(100% + 16px);
}

.timeline ol li:nth-child(even) div::before {
  top: -6px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent white;
  transform: rotate(-25deg);
}

.timeline time {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 8px;
  color: #224F7E;
}

.timeline hr {
    width: 30%;
    border: 2px solid #DE5B49;
    margin: 5px 0px 10px 0px;
}


/* TIMELINE ARROWS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline .arrows {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.timeline .arrows .arrow__prev {
  margin-right: 20px;
}

.timeline .disabled {
  opacity: .5;
}

.timeline .arrow{
    background: none;
    border: none;
    margin-top: 45px;
}

.timeline .arrows img {
  width: 45px;
  height: 45px;
}


/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 599px) {
  .timeline ol,
  .timeline ol li {
    width: auto; 
  }
  
  .timeline ol {
    padding: 0;
    transform: none !important;
  }
  
  .timeline ol li {
    display: block;
    height: auto;
    background: transparent;
  }
  
  .timeline ol li:first-child {
    margin-top: 25px;
  }
  
  .timeline ol li:not(:first-child) {
    margin-left: auto;
  }
  
  .timeline ol li div {
    width: 94%;
    height: auto !important;
    margin: 0 auto 25px;
  }
  
  .timeline ol li div {
    position: static;
  }
  
  .timeline ol li:nth-child(odd) div {
    transform: none;
  }
  
  .timeline ol li:nth-child(odd) div::before,
  .timeline ol li:nth-child(even) div::before {
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    border: none;
    border-left: 1px solid white;
    height: 25px;
  }
  
  .timeline ol li:last-child,
  .timeline ol li:nth-last-child(2) div::before,
  .timeline ol li:not(:last-child)::after,
  .timeline .arrows {
    display: none;
  }
}
</style>



<!-- Headline Section-->
<section id="headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 data-aos="fade-in">Bringing Innovation To Court Reporting Since 1962</h1>
            </div>
        </div>
    </div>
</section>

<section id="timeline" class="spacer d-none d-md-block">
    <div class="container-wide">
        <div class="row">
            <div class="col-lg-12">
                <h3 data-aos="fade-right">Our History</h3>
                <section class="timeline" data-aos="fade-up" data-aos-duration="1000">
                    <ol>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>1936</time> 
                            <hr align="left">
                            John Connor begins court reporting career.
                            
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>1946</time><hr align="left"> John Connor opens first court reporting agency in Indianapolis with several partners (Medcalf, Mahon, Mahon, & Connor).
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>1962</time><hr align="left"> John Connor opens sole ownership firm of John E. Connor, Inc.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <time>1977</time><hr align="left"> Jim Connor joins the firm as a certified court reporter.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                        <div>
                            <time>1978</time><hr align="left"> Craig Williams joins the firm as a certified court reporter.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="400">
                        <div>
                            <time>1982</time><hr align="left"> John E. Connor & Associates moves offices from the Union Federal Building to the newly built AUL Tower, expanding its office space to handle multi-party litigation.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="500">
                        <div>
                            <time>1985</time><hr align="left"> Jim Connor and Craig Williams purchase reporting business from John E. Connor. Firm’s name changes to Connor & Associates, Inc.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="600">
                        <div>
                            <time>2000</time><hr align="left"> With many real-time reporters, Connor is chosen to report press conferences for Indianapolis Motor Speedway to be disseminated to the world.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="700">
                        <div>
                            <time>2004</time><hr align="left"> Connor brings legal video in-house and certifies several legal videographers. Connor also introduces editable, synchronization of videos with transcripts for clients.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="800">
                        <div>
                            <time>2005</time><hr align="left"> Connor begins hosting international videoconferencing to Beijing, China, Germany and Brussels, Belgium.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="900">
                        <div>
                            <time>2006</time><hr align="left"> Andrew Connor, third generation, joins firm out of college to start a career with the company.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="1000">
                        <div>
                            <time>2012</time><hr align="left"> Jim Connor chosen as one of a select few court reporters to report 911 and USS Cole bombing trials in Guantanamo Bay, Cuba.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="1100">
                        <div>
                            <time>2012</time><hr align="left"> Lafayette, IN, office opens.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="1200">
                        <div>
                            <time>2013</time><hr align="left"> Bloomington, IN, office opens.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>2014</time><hr align="left"> Ft. Wayne, IN, office opens.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>2015</time><hr align="left"> Connor moves from AUL Tower to Salesforce Tower and doubles office space to accommodate multi-party litigations.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>2015</time><hr align="left"> Craig Williams retires from partnership of Connor & Associates and Jim Connor becomes sole proprietor.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>2015</time><hr align="left"> Andrew Connor is named Vice-President of the firm.
                        </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <time>2016</time><hr align="left"> Connor opens Carmel, IN office
                        </div>
                        </li>
                        <li>
                        <div>
                            <time>2017</time><hr align="left"> Connor opens expanded new offices in Bloomington and Ft. Wayne.
                        </div>
                        </li>
                        <li></li>
                    </ol>
                    
                    <div class="arrows">
                        <button class="arrow arrow__prev disabled" disabled>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
                        </button>
                        <button class="arrow arrow__next">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
    <!-- End Headline Section-->

    <!-- Dedication Section-->
    <!-- <section id="dedication" class="spacer">
        <div class="container">
            <h3>Dedication To The Industry</h3>
            <div class="row">
                <div class="col-lg-6">
                    <h4>Court Reporting</h4>
                    <p>Connor Reporting has a long history of providing our clients the services of accurate and professional court reporters whether in Indianapolis, throughout Indiana, or nationwide.</p>
                </div>
                <div class="col-lg-6">
                    <h4>Technology</h4>
                    <p>Let Connor prepare documents, exhibits, photos, video clips for your upcoming trial, and present them in the courtroom. Help make your case with the efficient use of our certified trial presentation team.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h4>Video Conferencing</h4>
                    <p>Connor provides private, High-Definition videoconferencing facilities for convenient and cost-effective face-to-face meetings with deponents, clients, and witnesses. Our facilities provide both IP and ISDN video conferences that are the perfect solution for law firms and businesses.</p>
                </div>
                <div class="col-lg-6">
                    <h4>Legal Video Services</h4>
                    <p>Connor’s in-house certified legal video team will synchronize any transcript to new or existing video footage, including exhibits for side-by-side viewing. We transfer the synchronized bundle to DVD for long-lasting quality.</p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Dedication Section-->

    <!-- Team Section-->
    <section id="team" class="spacer">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/team.png" class="img-fluid">
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-duration="1000">
                    <h3>Our Team</h3>
                    <p>From taking depositions, to attending conferences and conventions, to working on high-profile cases (and whether we’re at home in Indianapolis or traveling across the nation) there’s never a dull day on the job. But at Connor Reporting, working as a team to exceed client expectations is the foundation of our business. Meet our exceptional team members.</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>team">Meet The Team!</a>
                </div>
            </div>
        </div>
    </section>
     <!-- End Team Section-->

    <!-- Causes Section-->
    <section id="causes" class="spacer">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Causes We Support</h3>
                </div>
                <?php if(have_rows('causes')) : while(have_rows('causes')) : the_row();?>
                    <div class="col-sm-6 col-md-3" >
                        
                        <img src="<?php the_sub_field('cause_image'); ?>" class="img-fluid" alt="">
                    </div>
                    <?php endwhile; endif; ?>
            </div>
            <div class="row spacer">
                <div class="col-lg-12">
                    <h3>Affiliates</h3>
                </div>
                <?php if(have_rows('affiliate_logos')) : while(have_rows('affiliate_logos')) : the_row();?>
                    <div class="col-sm-6 col-md-3" >
                        <img src="<?php the_sub_field('affiliate_image'); ?>" class="img-fluid" alt="">
                    </div>
                    <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <!-- End Causes Section-->

    

<?php get_footer(); ?>