@extends('layouts.sub')

@section('content')
    <section id="home-section" class="hero">
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_1.jpg);">
	          		<h3 class="vr" style="background-image: url(images/divider.jpg);">Strength</h3>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to the Club</span>
			            <h1 class="mb-4 mt-3">Get A <span>Perfect</span> Body <span>Figure</span></h1>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
			            
			            <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Join with us</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(/images/bg_2.jpg);">
	          		<h3 class="vr" style="background-image: url(/images/divider.jpg);">Workout</h3>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to Club</span>
			            <h1 class="mb-4 mt-3">Pain is <span>Temporary</span> But Glory is <span>Forever</span></h1>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
			            
			            <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Join with us</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
		
		<section class="ftco-section ftco-services ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-body"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Free Lesson</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2 text-center d-block">
              <div class="icon"><span class="flaticon-diet"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">35% Discount</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-running"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Free Testing</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-program bg-light" id="programs-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap js-fullheight">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-gym"></span> Fitness Program</a>

              <a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-body"></span> Fit &amp; Healthy</a>

              <a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-woman"></span> Muscle Building</a>

              <a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-abs"></span> Bikini &amp; Body</a>

              <a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 flaticon-running"></span> Cardio Exercise</a>

              <a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><span class="mr-3 flaticon-meditation"></span> Power Yoga</a>

              <a class="nav-link px-4" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><span class="mr-3 flaticon-aerobic"></span> Aerobics Program</a>

            	<a class="nav-link px-4" id="v-pills-08-tab" data-toggle="pill" href="#v-pills-08" role="tab" aria-controls="v-pills-08" aria-selected="false"><span class="mr-3 flaticon-gym"></span> Crossfit Program</a>
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center js-fullheight">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-0" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <span class="icon mb-3 d-block flaticon-gym"></span>
                <h2 class="mb-4">Fitness Program</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <span class="icon mb-3 d-block flaticon-body"></span>
                <h2 class="mb-4">Fit &amp; Healthy</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <span class="icon mb-3 d-block flaticon-woman"></span>
                <h2 class="mb-4">Muscle Building</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <span class="icon mb-3 d-block flaticon-abs"></span>
                <h2 class="mb-4">Bikini &amp; Body</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                <span class="icon mb-3 d-block flaticon-running"></span>
                <h2 class="mb-4">Cardio Exercise</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                <span class="icon mb-3 d-block flaticon-meditation"></span>
                <h2 class="mb-4">Power Yoga</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                <span class="icon mb-3 d-block flaticon-aerobic"></span>
                <h2 class="mb-4">Aerobics Program</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>

              <div class="tab-pane fade py-0" id="v-pills-08" role="tabpanel" aria-labelledby="v-pills-08-tab">
                <span class="icon mb-3 d-block flaticon-gym"></span>
                <h2 class="mb-4">Crossfit Program</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Sexy &amp; Healthy</span>
            <h2 class="mb-4">Get a Perfect Body</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-abs"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Make Your Body Harmonic</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-scale"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Weight Loss Program</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-check-list"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Group Personal Trainings</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-diet"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Optimal Diet Selection</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-treadmill-machine-with-timer"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Individual Training Programs</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>


		<section class="ftco-section ftco-schedule" id="schedule-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
	        <div class="col-md-12 heading-section text-center ftco-animate">
	        	<span class="subheading">Schedule</span>
	          <h2 class="mb-4">Training Schedule</h2>
	          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
	        </div>
	      </div>
	      <div class="ftco-schedule">
					<div class="row">
            <div class="col-md-4 nav-link-wrap">
	            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="true">Monday <span>Fitness Program</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false">Tuesday <span>Crossfit Program</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false">Wednesday <span>Aerobic Program</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false">Thursday <span>Yoga Classes</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">Friday <span>Fitness Program</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-13-tab" data-toggle="pill" href="#v-pills-13" role="tab" aria-controls="v-pills-13" aria-selected="false">Saturday <span>Yoga Classes</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-14-tab" data-toggle="pill" href="#v-pills-14" role="tab" aria-controls="v-pills-14" aria-selected="false">Sunday <span>Crossfit Program</span></a>

	            </div>
	          </div>
	          <div class="col-md-8 tab-wrap">
	            
	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-8" role="tabpanel" aria-labelledby="day-8-tab">
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Basic Exercise</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Anthony Miller</a> <span class="position">Cardio Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Yoga Program</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Anthony Miller</a> <span class="position">Cardio Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Body Building</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Anthony Miller</a> <span class="position">Cardio Expert</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-day-9-tab">
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-4.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Body Building</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Jason Davis</a> <span class="position">Body Building</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Cardio Classes</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Jason Davis</a> <span class="position">Body Building</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Basic Exercies for Begginer</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Jason Davis</a> <span class="position">Body Building</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-day-10-tab">
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Body Building</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Mark Harlem</a> <span class="position">Health Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-4.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Cardio Classes</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Mark Harlem</a> <span class="position">Health Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Basic Exercies for Begginer</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Mark Harlem</a> <span class="position">Health Expert</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-day-11-tab">
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Body Building</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Nikki Valdez</a> <span class="position">Yoga Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Cardio Classes</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Nikki Valdez</a> <span class="position">Yoga Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-4.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Basic Exercies for Begginer</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Nikki Valdez</a> <span class="position">Yoga Expert</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-day-12-tab">
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Body Building</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Troy Watson</a> <span class="position">Boxing Trainer</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Cardio Classes</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Troy Watson</a> <span class="position">Boxing Trainer</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Basic Exercies for Begginer</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Troy Watson</a> <span class="position">Boxing Trainer</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-day-13-tab">
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-4.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Body Building</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Greg Mueller</a> <span class="position">Dance Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Cardio Classes</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Greg Mueller</a> <span class="position">Dance Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Basic Exercies for Begginer</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Greg Mueller</a> <span class="position">Dance Expert</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-day-14-tab">
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Body Building</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Jesh Stone</a> <span class="position">Muslce Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-4.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Cardio Classes</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Jesh Stone</a> <span class="position">Muslce Expert</span></h3>
	              		</div>
	              	</div>
	              	<div class="coach-wrap ftco-animate d-sm-flex">
	              		<div class="img coach-img" style="background-image: url(/images/trainer-1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Basic Exercies for Begginer</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="coach-name">&mdash; <a href="#">Jesh Stone</a> <span class="position">Muslce Expert</span></h3>
	              		</div>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
	    </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(/images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate">
			          	<span class="subheading">A Few Words About Us</span>
			            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">We're Functioning for Almost <span class="number" data-number="20">0</span> Years</h2>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Read testimonials</span>
            <h2 class="mb-4">What Client Says</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(/images/trainer_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(/images/trainer_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(/images/trainer_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(/images/trainer-1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(/images/trainer_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jeff Freshman</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section text-center ftco-animate">
          	<span class="subheading">Coaches</span>
            <h2 class="mb-4">Our Coaches</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/trainer-1.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Lloyd Wilson</h3>
									<span class="position mb-4">Owner/Head Coach</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/trainer-2.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Rachel Parker</h3>
									<span class="position mb-4">Coach</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/trainer-3.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Ian Smith</h3>
									<span class="position mb-4">Coach</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/trainer-4.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Alicia Henderson</h3>
									<span class="position mb-4">Coach</span>
									<div class="faded">
										<ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('/images/image_1.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('/images/image_2.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('/images/image_3.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">04</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">april</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Me</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white"></div>
		</section>

		<section class="ftco-gallery ftco-section">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">See the latest photos</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-3 ftco-animate">
						<a href="/images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="/images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="/images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="/images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>
@endsection