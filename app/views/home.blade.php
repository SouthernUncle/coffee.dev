@extends('layouts.home-master')

@section('title', 'Brew Review')

@section('content')
    <!-- Reviews Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Reviews</h2>
                    <h3 class="section-subheading text-muted">Check out our crowd-sourced reviews by Region, Roaster, or Coffee.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="{{{ action('RegionsController@index') }}}">
	                    <span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
	                    </span>
                    </a>
                    <h4 class="service-heading">Region</h4>
                    <p class="text-muted">Every coffee originates from somewhere...</p>
                </div>
                <div class="col-md-4">
	                <a href="{{{ action('RoastersController@index') }}}">
	                    <span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-fire fa-stack-1x fa-inverse"></i>
	                    </span>
                    </a>
                    <h4 class="service-heading">Roaster</h4>
                    <p class="text-muted">Every coffee gets roasted by somebody...</p>
                </div>
                <div class="col-md-4">
                	<a href="{{{ action('CoffeesController@index') }}}">
	                    <span class="fa-stack fa-4x">
	                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
	                        <i class="fa fa-coffee fa-stack-1x fa-inverse"></i>
	                    </span>
                    </a>
                    <h4 class="service-heading">Coffee</h4>
                    <p class="text-muted">Every coffee can be found here...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Coffee Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Featured Coffees</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                @foreach($coffees as $c)
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="/coffees/{{ $c->id }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/img/fit500{{ $c->img_url }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>{{ $c->name }}</h4>
                        <p class="text-muted">{{ $c->roaster->name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">How this project came to be.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/jitterz.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2011-2015</h4>
                                    <h4 class="subheading">Jitterz</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Josh worked at Jitterz in the Rio Grande Valley, perfecting his brew skills and palate. </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/lightbulb.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>January 2015</h4>
                                    <h4 class="subheading">An Idea is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Good review sites exist for beers/wine/etc. but not for coffees. Or if they did exist, only the experts could weigh in. Sometimes about their own coffee. Not cool.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/codeup.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>June 2015</h4>
                                    <h4 class="subheading">Codeup Bootcamp</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Josh and Dave meet at Codeup's Full-Stack bootcamp, bond over a mutual love of coffee, and start coding.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/capstone.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>October 2015</h4>
                                    <h4 class="subheading">Project Realization</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">When it came time for Capstone Projects, Josh and Dave knew what they were going to make. Josh's dream is now a reality. We hope you will join the community and help us make it even better!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Small in number, but mighty.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-2">
                    <div class="team-member">
                        <img src="img/josh.jpg" class="img-responsive img-circle" alt="">
                        <h4>Josh Womack</h4>
                        <p class="text-muted">Chief Brewing Officer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://github.com/j-womack" target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <li><a href="https://twitter.com/avecbruit" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/pub/joshua-womack/71/946/704" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-2">
                    <div class="team-member">
                        <img src="img/dave.jpg" class="img-responsive img-circle" alt="">
                        <h4>Dave Collier</h4>
                        <p class="text-muted">Chief Consumption Officer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://github.com/dgcollier" target="_blank"><i class="fa fa-github"></i></a>
                            </li>
                            <li><a href="https://twitter.com/_dgcollier" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/dgcollier" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">We both brewed and consumed a lot of coffee during the two week period we worked on this project. That's also how we approached our work. We both worked hard at developing a robust back-end and making the user interface something we could be proud of. That's what teamwork is all about.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Let us know if you have any suggestions or if you need an invite!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(array('action' => 'HomeController@contactUs')) }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>  
@stop