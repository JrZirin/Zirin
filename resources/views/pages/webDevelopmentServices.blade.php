<style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: ;
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
  background-color: #777;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
  border-color:#04c270;
  
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
</style>
@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="first-slide" src="images/4.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Model Viable Product</h1>
            <p> Are you a start up,looking to conceptualise an idea</p>
            <p><a class="btn btn-lg btn-success" href="/mvp" role="button">More Details</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="second-slide" src="images/4.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>HTML5 app</h1>
            <p>WE specialize in custom apps</p>
            <p><a class="btn btn-lg btn-success" href="/html5" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="images/4.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Custom Dev</h1>
            <p>Laravel Development</p>
            <p><a class="btn btn-lg btn-success" href="/laraveldev" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- start of container-->
  <div class="container">
        <div class="pricing-header px-3 py-3 pt-md-2 pb-md-4 mx-auto text-center " >
                <h2 class="display-6 ">Web Develpment Services</h2>
                <p class="lead"></p>
              </div>
        <div style="text-align: center;"><span style="font-size: 12pt;">We are focused on delivering
            <strong><em>outcomes that you want to achieve</em></strong>
            , rather than on just rolling out software. We do that by <em><strong>
                diving deep into the context </strong></em> of your business. <em><strong>
                    Technical consulting</strong></em><span style="font-weight: 400;">
                        is included in our web development services by default.</span></span>
                    </div>
                    <hr class="featurette-divider">

      <div class="pricing-header px-3 py-3 pt-md-2 pb-md-4 mx-auto text-center " >
            <h2 class="display-6 ">We Develop Websites and Apps That Do Exactly What You Need</h2>
                    <p class="lead"></p>
                          </div>
            <div class="wpb_text_column wpb_content_element" data-wow-delay="0.3s">
                <div class="wpb_wrapper">
                    <p style="text-align: center;"><span style="font-weight: 400;">We specialize in
                custom web development services,which means that your solution will be tailored to perfectly
                 fit your business.</span></p>
                 <ul>
                    <li style="text-align: center;"><span style="font-weight: 400;">Our custom websites and apps
                         are created to cater to your unique business needs.</span></li>
                    <li style="font-weight: 400; text-align: center;"><span style="font-weight: 400;">We develop
                    solutions that will grow and evolve together with our clients&rsquo; businesses.</span></li>
                </ul>
                    </div>
            </div>
            <hr class="featurette-divider">
     <div class="pricing-header px-3 py-3 pt-md-2 pb-md-4 mx-auto text-center " >
          <h2 class="display-6 ">Benefits of Custom Programming Services by Zirin labs</h2>
                 <p class="lead"></p>
            </div>

        <div class="row">
                <div class="col-md-4">
                  <h2>Secure</h2>
                  <p>Most likely your business is constantly growing,
                      so the tools you use should also be able to grow with you.
                      We ensure scalability of our solutions by striving for the
                       cleanest and highest-quality code
                      possible, so your website or app won’t be falling apart
                       when you decide to add a new feature or two.</p>
                </div>
                <div class="col-md-4">
                  <h2>Scalable</h2>
                  <p>Most likely your business is constantly growing,
                 so the tools you use should also be able to grow with you.
                 We ensure scalability of our solutions by striving for the cleanest and
                 highest-quality code possible, so your website or app won’t
                 be falling apart when you decide to add a new feature or two.</p>
                </div>
                <div class="col-md-4">
                  <h2>In Real Time</h2>
                  <p>In case you need an app for an ongoing business,
                or you want to upgrade a system you are already using,
                we have experience in planning and structuring the development
                process in a way that will lead to minimum to no disruptions to your daily work.</p>
                </div>
        </div>
        <hr class="featurette-divider">
        <div class="pricing-header px-3 py-3 pt-md-2 pb-md-4 mx-auto text-center " >
             <h2 class="display-6 ">Our Work Process</h2>
                    <p class="lead"></p>
               </div>
               <div class="row">
                    <div class="col-md-4">
                      <h4>Needs Analysis</h4>
                      <p>We’ll start with questions about what you’d like to achieve with your project
                           and then get into details, all to prepare a preliminary estimation.</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Preliminary Estimation</h4>
                      <p>Our experts will discuss your project internally, typically between the
                        project manager and team lead, and present you with a rough estimate.</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Planning</h4>
                      <p>If we shake hands, the next steps are to prepare a project roadmap with
                        project goals and milestones, as well as scope for the first 1–3 milestones.</p>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-4">
                      <h4>Project Management</h4>
                      <p>You will be assigned a project manager who will make sure your project
                    is a success. The PM will be your main contact person, who will provide two-way
                    communication with your team and be responsible for the end result.</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Development</h4>
                      <p>It is optimal to start coding when all of the design work is finished.
                    Thus, we’ll begin with front-end coding and then continue with back-end. But, of
                     course, it depends on the project.</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Continous Delivery</h4>
                      <p>Typically, we deliver projects to clients in parts at regular time intervals
                    (sprints). So each period we will deliver a feature that you can see in action, all
                    to ensure timely feedback and adjustments.</p>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-4">
                      <h4>Quality Assurance</h4>
                      <p>After our developers complete the major chunk of coding, the QA engineer will start
                     his job. He will test business logic, bugs, system security and fix some smaller things
                     like typos.</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Launch</h4>
                      <p>Regardless of the project’s complexity, after its release there is always room for
                    uncertainty. That is why we always leave a time buffer, by launching before the due date,
                    to make certain you get your working app right on time.</p>
                    </div>
                    <div class="col-md-4">
                      <h4>Support</h4>
                      <p>We will maintain and upgrade your app or website on a full-time or part-time basis,
                          depending on your needs.</p>
                    </div>
            </div>



@endsection
</div>
