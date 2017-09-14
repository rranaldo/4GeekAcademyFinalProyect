<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	@include('include.head')

	<body>

		@include('include.header')

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate"> {{$textos[0]->contenido}} </h1>
							<h2 class="to-animate"> {{$textos[1]->contenido}} </a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">

				@foreach($cuadros as $c)
					<div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
						<div class="overlay-darker"></div>
						<div class="overlay"></div>
						<div class="fh5co-text">
							<img style="height: 80px;" src="{{$c->imagen}}">
							<h2>{{$c->title}}</h2>
							<p>{{$c->contenido}}</p>
							<p><a href="{{$c->url}}" class="btn btn-primary">{{$c->boton_texto}}</a></p>
						</div>
					</div>
				@endforeach




			</div>

		</div>
	</section>

	<section id="fh5co-work" data-section="work">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Work</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>{{$textos[2]->contenido}}</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-sm">
				<?php
				$i=0;
				?>
				@foreach($proyectos as $proy)
					<div class="col-md-4 col-sm-6 col-xxs-12">
						<a href="{{$proy->imagen}}" class="fh5co-project-item image-popup to-animate">
							<img src="{{$proy->imagen}}" alt="Image" class="img-responsive">
							<div class="fh5co-text">
							<h2>{{$proy->title}}</h2>
							<span>{{$proy->contenido}}</span>
							</div>
						</a>
					</div>
					<? $i++; ?>
					@if($i==2)
						<div class="clearfix visible-sm-block"></div>
						<?$i=0;?>
					@endif
				@endforeach


			</div>
		</div>
	</section>

	<section id="fh5co-testimonials" data-section="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Testimonials</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>{{$textos[3]->contenido}}</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

				@foreach($testimonios as $t)
					<div class="col-md-4">
						<div class="box-testimony">
							<blockquote class="to-animate-2">
								<p>{{$t->contenido}}</p>
							</blockquote>
							<div class="author to-animate">
								<figure><img src="{{$t->imagen}}" alt="Person"></figure>
								<p>
									{{$t->nombre}} <a href="{{$t->url}}" target="_blank">{{$t->empresa}}</a> <span class="subtext">{{$t->Cargo}}</span>
								</p>
							</div>
						</div>
					</div>
				@endforeach
				
				
			</div>
		</div>
	</section>


	<section id="fh5co-services" data-section="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-left">
					<h2 class=" left-border to-animate">Services</h2>
					<div class="row">
						<div class="col-md-8 subtext to-animate">
							<h3>{{$textos[4]->contenido}}</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?$i=0;?>
				@foreach($servicios as $s)
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<img style="    height: 100px;margin-bottom: 5px;" src="{{$s->imagen}}">
					<h3>{{$s->title}}</h3>
					<p>{{$s->contenido}}</p>
				</div>
					<? $i++; ?>
					@if($i==2)
						<div class="clearfix visible-sm-block"></div>
						<?$i=0;?>
					@endif
				@endforeach
				
			</div>
		</div>
	</section>
	
	<section id="fh5co-about" data-section="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">About</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>{{$textos[5]->contenido}}</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($personal as $per)
					<div class="col-md-4">
						<div class="fh5co-person text-center to-animate">
							<figure><img src="{{$per->imagen}}" alt="Image"></figure>
							<h3>{{$per->nombre}}</h3>
							<span class="fh5co-position">{{$per->cargo}}</span>
							<p>{{$per->contenido}}</p>
							<ul class="social social-circle">
								<li><a href="{{$per->twitter}}"><i class="icon-twitter"></i></a></li>
								<li><a href="{{$per->facebook}}"><i class="icon-facebook"></i></a></li>
								<li><a href="{{$per->github}}"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</section>
	
	<section id="fh5co-counters" style="background-image: url(images/full_image_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<?php
			$data=explode(",",$textos[6]->contenido);

			?>

			<div class="row">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>Fun Facts</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-briefcase to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="{{$data[0]}}" data-speed="5000" data-refresh-interval="50">89</span>
						<span class="fh5co-counter-label">Finished projects</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-code to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="{{$data[1]}}" data-speed="5000" data-refresh-interval="50">2343409</span>
						<span class="fh5co-counter-label">Line of codes</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-cup to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="{{$data[2]}}" data-speed="5000" data-refresh-interval="50">1302</span>
						<span class="fh5co-counter-label">Cup of coffees</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<i class="fh5co-counter-icon icon-people to-animate-2"></i>
						<span class="fh5co-counter-number js-counter" data-from="0" data-to="{{$data[3]}}" data-speed="5000" data-refresh-interval="50">52</span>
						<span class="fh5co-counter-label">Happy clients</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-contact" data-section="contact" name="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Get In Touch</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>{{$textos[7]->contenido}}</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Contact Info</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							{{$textos[8]->contenido}}
						</li>
						<li><i class="icon-phone"></i> {{$textos[9]->contenido}}</li>
						<li><i class="icon-envelope"></i>{{$textos[10]->contenido}}</li>
						<li><i class="icon-globe"></i>{{$textos[11]->contenido}}</li>
					</ul>
				</div>

					<div class="col-md-6 to-animate">
						<h3>Contact Form</h3>
						<form class="customform" action="{{route('web.contacto')}}" method="post">
								{{csrf_field()}}
							<div class="form-group ">
								<label for="name" class="sr-only">Name</label>
								<input required id="name" name="name" class="form-control" placeholder="Name" type="text">
							</div>
							<div class="form-group ">
								<label for="email" class="sr-only">Email</label>
								<input required id="email" name="email" class="form-control" placeholder="Email" type="email">
							</div>
							<div class="form-group ">
								<label for="phone" class="sr-only">Phone</label>
								<input required id="phone" name="phone" class="form-control" placeholder="Phone" type="text">
							</div>
							<div class="form-group ">
								<label for="message" class="sr-only">Message</label>
								<textarea required id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="form-group ">
								<input class="btn btn-primary btn-lg" value="Send Message" type="submit">
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>

	@include('include.footer')

	</body>
</html>

