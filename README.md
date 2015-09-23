# coffee.dev

CODEUP Capstone Project

LEMP+J stack 

Site Plan:

	Name: @TODO

	Template: @TODO

	Packages/dependencies?
	    Bower
	    SASS
	    Angular ***
	    Eloquent NOT Esensi
	    Chartist
	    Sizzle.js (?)
	    Carbon

	Functionality?
    	re: BeerAdvocate for coffee

     Users:
        1. user
        2. admin
        3. top rater

        as guest:
            view coffees/ reviews
            view roasters
            view regions

        as user:
        	guest privileges + :
            Create User:
                avatar/pic
                username/email
                password/conf.
                (log in with Facebook/Twitter/LinkedIn)****

            Add a coffee:
                see: BA site, use Angular, verify does not exist first
                add a roaster

            	Add a roaster:
            		w/in create coffee form (Angular, w/ dropdown)

        		Require: add a review!

    		Add a review to coffee:
    			Angular create form
				Flavor notes (wheel/pie chart) ie: http://wrapbootstrap.com/preview/WB0519204

		http://shop.colectivocoffee.com/products/black-and-tan
		https://gionkunz.github.io/chartist-js/

			confirm account w/ email


		as admin:
			guest & user privileges + :
			manage all reviews, users, coffees, and roasters
			verify all roaster info on create (auto-generate email to dev)
			verify coffee info on create (auto-generate email to dev)
			update roaster info as necessary (button/link on page)


    Coffees:
        show:
        name
        belong to one Roaster
        belong to one Region (sourced)
        price (per oz.?)/(bag size)
        score (avg.)
        pDev
        description
        photo?

          -Reviews:
                rating
                rDev
                sub-scores
                    many scores (belong to reviews)
                sort by (recent, high, low, top raters)
                username
                user avatar
                date
                brew parameters (accordion/drop-down)
                    -grind
                    -weight coffee
                    -weight water
                    -brew time
                    -brew equipment
                    -roast date

    Roaster:
        db:has many coffees
        Name Address City State Zip Phone
        Website Map Twitter-handle
        **send email on create
        Coffees
        Count (# of reviews)
        Average rating (all coffees)
        show each avg rating for each coffee

    Regions:
        db:has many coffees
        Map (image or lat/lon)
        description
        display some coffees (table)
           links to coffee show and roaster show

    Home: 
    	carousel?
    	create account button/ small section
    	contact us

    	starting point: http://ironsummitmedia.github.io/startbootstrap-agency/
    		full page carousel-y thing
    		make "services smaller"
    		3 boxes with links to indexes (region, roaster, coffee) where "portfolio is"
    		team section w/ small bio/links/etc.
    		[footer]

DB structure:

    users table
    	-id
    	-username
    	-email
    	-password
    	-confirmation -- use binary 1/0, y/n or code?
        -role
        -img_url (nullable)
        -created_at
        -updated_at
        -remember token

    reviews table
    	-id
    	-coffee_id
    	-roaster_id
    	-user_id
    	-review
    	(critera:)
    		-aroma
    		-flavor
    		-aftertaste
    		-balance
    		(overall average of these?)
		-roast
		-body
		-acidity

		-price (nullable)
		-bag size (nullable)

    	-created_at
    	-updated_at

	flavor_review table [pivot]
		-review_id
		--flavor_id (2 are primary key)

	flavor table  
		-id
		-flavor_category_id
		-name 	
    	
	flavor_category table
		-id
		-name

	coffees table
		-id
		-user_id
		-name
		-roaster_id
		-region_id
		-roaster_notes (textarea)
        -active
		-link [top user or admin only] (nullable)
		-process (nullable)
		-elevation (nullable)
		-img_url (nullable)

    roasters table
    	-id
  		-user_id
    	-name
    	-address
    	-city
    	-state
    	-zip
    	-description
    	-link
    	-img_url
    	-twitter (nullable)
    	-facebook (nullable)
    	-instagram (nullable)

    regions table
    	-id
    	-region
    	-description 
    	-img_url 

    parameters table
        -id
        -review_id
        -grind (nullable) 
        -wt_water (nullable)
        -wt_coffee (nullable)
        -brew_time (nullable)
        -brewer (nullable)
        -method (textarea) (nullable)
        -roast_date (nullable)
        -temp_water (nullable)

Classes:

    User
    	has many Review
        has many Coffee
        has many Roaster
        has Role
        has many Invitation

    Review
    	belongs to User
    	belongs to many Flavor
    	belongs to Coffee
        has Parameter

    FlavorCategory
    	has many Flavor

    Flavor
    	belongs to many Review
    	belongs to FlavorCategory

    Coffee
    	has many Review
        belongs to Roaster
    	belongs to Region
        belongs to User

    Roaster
    	has many Coffee
        belongs to User

    Region
    	has many Coffee

    Parameter
        belongs to Review

    Role
        belongs to User

    Invitation
        belongs to User


startup new project: https://gist.github.com/dgcollier/7bf95080656f996de2df

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)