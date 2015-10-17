<?php

class CoffeesTableSeeder extends Seeder {

	public function run()
	{
	    $coffee = new Coffee();
        $coffee->user_id                = 1;
        $coffee->region_id              = 1;
        $coffee->roaster_id             = 1;
        $coffee->name                   = 'Suke Quto';
        $coffee->img_url                = '/img/sukequto.jpg';
        $coffee->url                    = 'http://www.woodburlcoffee.com/product/ethiopia-aramo';
        $coffee->process                = 'Washed';
        $coffee->elevation              = '1830 to 1950m';
        $coffee->roasters_description   = 'This washed coffee is from the Guji Zone in Oromia, one of Ethiopia\'s largest growing areas. The farm consists of 221 hectares and is located between 1830 and 1950 meters. It\'s grown in highly nutritious volcanic soil and fertilized organically, then washed and depulped mechanically. There is a 35-48 hour fermentation process before the coffee is dried on raised beds for 9-15 days.';
        $coffee->url_name               = 'SukeQuto';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 2;
        $coffee->region_id              = 2;
        $coffee->roaster_id             = 1;
        $coffee->name                   = 'Kii AA';
        $coffee->img_url                = '/img/kiiaa.jpg';
        $coffee->url                    = 'http://www.woodburlcoffee.com/product/kenya-nyeri';
        $coffee->process                = 'Washed and Sun Dried';
        $coffee->elevation              = '1600 to 1900m';
        $coffee->roasters_description   = 'This coffee was produced by smallholder farmers belonging to the Rung’eto Farmers Cooperative Society. Established in 1976, the society currently represents up to 1,214 small scale farmers, all with coffee plots of under .5 hectares on average. Farmers in this region first planted coffee in 1953, and since then, coffee has become a primary cash crop in the area. These farms overlook the famous elephant migration route that connects Aberdare and Mt. Kenya Forest. Along with elephants, there are many other wild animals such as buffaloes, antelopes and monkeys in the area. These, as well as many others, often find their way onto the farms to graze on the grassland or chew on the sweet coffee berries.
            In addition to the wide-spread SL28 and SL34, this lot contains some Ruiru 11. Ruiru 11 is named for the station at Ruiru, Kenya where it was developed in the \'70s and released in 1986. The varietal is slowly becoming more widespread in the region due to its resistance to Coffee Berry Disease and Coffee Leaf Rust and has both been backcrossed with SL28 and SL34 to ensure high cup quality.';
        $coffee->url_name               = 'KiiAa';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 3;
        $coffee->region_id              = 3;
        $coffee->roaster_id             = 2;
        $coffee->name                   = 'Santa Barbara';
        $coffee->img_url                = '/img/santabarbara.jpg';
        $coffee->url                    = 'http://www.corvuscoffee.com/collections/single-origin/products/santa-barbara-el-salvador-12oz';
        $coffee->roasters_description   = 'Country: El Salvador
            Terroir: Cerro las Ranas
            Farmer: Miguel Menendez
            Varietal: Bourbon & Typica

            Aroma: Cashew, Chocolate
            Flavors: Dark Chocolate, Caramel
            Sweetness: Smooth, Very rich
            Body: Full and mellow
             

            Santa Barbara is from our oldest direct trade relationship, the Menendez Family. Guillermo and Miguel, along with their families, have won multiple awards for coffee from different farms they own and their father, Miguel Sr. runs in El Salvador. For the last two years we\'ve purchased from the Santa Barbara farm because of the exceptional chocolate sweetness produced by the terroir. It\'s consistently one of our best selling coffees every year. 

            The Menendez family is committed to improving the areas and people\'s livelihoods around the farms, and were even responsible for bringing electricity to the surrounding areas. The family also flies in the face of "conventional" wisdom which promotes turning over older, heirloom varietals for newer rust resistant varietals. This commitment to people and the cup quality of their product has led to them producing some of the best coffees in the world.

            As usual, this year\'s crop is enormously sweet, to the point of being sugary. It has a very distinct caramel and chocolate flavor to the cup, a mild acidity, and is very clean. We would recommend this coffee for everyone, and especially if you\'re a fan of full, sweet cups.';
        $coffee->url_name               = 'SantaBarbara';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 4;
        $coffee->region_id              = 4;
        $coffee->roaster_id             = 2;
        $coffee->name                   = 'La Cruz';
        $coffee->img_url                = '/img/lacruz.jpg';
        $coffee->url                    = 'http://www.corvuscoffee.com/collections/single-origin/products/la-cruz-makers-reserve-natural-costa-rica-12oz';
        $coffee->roasters_description   = 'Country: Costa Rica
            Terroir: Tarrazu
            Farmer: Esteban Picado
            Processing: Natural • Raised Beds
            Varietal: Catuai/Caturra

            Cupping Notes
            Aroma: Floral, ripe cherry
            Flavors: Intense blood orange/strawberry
            Sweetness: Vibrant & Pervasive
            Body: Jammy

             

            La Cruz is a micro mill ran by Mr. Esteban Zamora Picado in Tarrazu, Costa Rica. This area is one of the best known in the world for the rich volcanic soil and growing conditions, and in recent years prices have shot up in line with increasing demand and quality for the best Costa Rican coffees from the region. 

            On last year’s trip to visit our mill in Colombia, La Palma Y El Tucan, Phil met Grace Mena who was also paying a visit to the mill. Grace runs a company sourcing and connecting the best farmers (literally) in Costa Rica, Nicaragua, and Panama with roasters in the US, Netherlands, and Japan. This connection was exciting and what was more exciting was the samples we started getting from Grace during the production seasons of these countries. 

            La Cruz is an excellent find and an important coffee for us. As demand continues to skyrocket for quality Costa Ricans, people with direct trades will benefit while others will be left without access. This farm is producing some amazing coffees, and we have two different lots this year. This first is a traditional Natural process, and is exceptionally lively, complex and bursting with flavor. The second, which will be available when this is out, is a Kenya style double washed coffee (the only coffee like this we’ve ever seen).';
        $coffee->url_name               = 'LaCruz';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 5;
        $coffee->region_id              = 5;
        $coffee->roaster_id             = 3;
        $coffee->name                   = 'Similakuta';
        $coffee->img_url                = '/img/similakuta.png';
        $coffee->url                    = 'http://www.onyxcoffeelab.com/coffee/sumatra-similakuta';
        $coffee->process                = 'Washed & Raised Bed Drying';
        $coffee->elevation              = '1800m';
        $coffee->roasters_description   = 'Origin: Sumatra

            Washing Station: Similungun

            Producer: Similakuta

            Process: Washed & Raised Bed Drying

            Elevation: 1800meters

            Varietal: Sigarar Untang, S795

            Cup: Juicy Melon, Sweet Cream, Sugar Cane, Herbal

             

             Simalungun is one of the largest regions in the coffee highlands of 
            North Sumatra. Home to many Batak clans with generations of 
            coffee farming expertise, Simalungun is the ideal place for growing 
            superb Sumatran coffee. This coffee has been sorted and triple picked
            for only the sweetest cherries. Once it has been washed it is again
            sorted three times for defects making this a Grade 1 Sumatra.  
            Because of this careful selection this becomes the first Indonesian
            coffee Onyx has offered in three years.

            BREW METHOD:

            Choose any drip method for this coffee.  Body stands out even among clarity driven methods and anything you can do to highlight the melon note is a positive.';
        $coffee->url_name               = 'Similakuta';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 6;
        $coffee->region_id              = 6;
        $coffee->roaster_id             = 3;
        $coffee->name                   = 'San Antonio';
        $coffee->img_url                = '/img/sananto.png';
        $coffee->url                    = 'http://www.onyxcoffeelab.com/coffee/colombian-san-antonio';
        $coffee->process                = 'Washed & Raised Bed Drying';
        $coffee->elevation              = '1700m';
        $coffee->roasters_description   = 'Origin: Colombia

            Washing Station: Santa Barbara

            Producer: Pedro Echavarria

            Process: Washed & Raised Bed Drying

            Elevation: 1700meters

            Varietal: Bourbon, Castillo

            Cup: Dates, Brown Sugar, Nutty, Stone Fruit, Creamy

            We really love this coffee for cold brew systems.  Toddy or Kyoto.  Refreshing, sweet summer cold brew.  Completely balanced.

            Pedro Echavarria is a friend and wonderfully adept producer in Colombia.  He owns the Santa Barbara Estate as well as the wonderful coffee bar Pergamino, in Medellin.  He\'s also working on ground breaking fermentation concepts that we will carry a bit later this year.  This lot was a surprise that we found while cupping some of his experiments in Medellin, Colombia at the beginning of this year.  It immediately jumped off the table with beautifully balanced sugar browning notes and a deep resonating body.  This will be a people pleaser that shows a perfect example of what a great Colombian Excelso.';
        $coffee->url_name               = 'SanAntonio';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 7;
        $coffee->region_id              = 7;
        $coffee->roaster_id             = 4;
        $coffee->name                   = 'La Voz';
        $coffee->img_url                = '/img/lavoz.jpg';
        $coffee->url                    = 'https://counterculturecoffee.com/store/coffee/la-voz';
        $coffee->process                = 'Washed';
        $coffee->elevation              = '1,400 - 1,850m';
        $coffee->roasters_description   = 'The farms of growers contributing coffee to the La Voz cooperative are nestled among the volcanoes surrounding the breathtaking Lake Atitlán—easily one of the most beautiful places in the world. For a second year in a row, the well-managed co-op produced a coffee with notes of crisp red apple and light fruit tones complemented by a sweet, nutty finish.';
        $coffee->url_name               = 'LaVoz';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 8;
        $coffee->region_id              = 1;
        $coffee->roaster_id             = 4;
        $coffee->name                   = 'Idido';
        $coffee->img_url                = '/img/idido.jpg';
        $coffee->url                    = 'https://counterculturecoffee.com/store/coffee/idido';
        $coffee->process                = 'Washed';
        $coffee->elevation              = '1,900 - 2,400m';
        $coffee->roasters_description   = 'This first lot from the Idido cooperative in Yirgacheffe, Ethiopia, represents a select group of 200 of the most dedicated farmers in the co-op. These farmers turn in their best cherries at the peak of harvest for this washed, special preparation coffee. Look for floral, melon, and citrus notes.';
        $coffee->url_name               = 'Idido';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 9;
        $coffee->region_id              = 9;
        $coffee->roaster_id             = 5;
        $coffee->name                   = 'Santa Elena';
        $coffee->img_url                = '/img/santaelena.jpg';
        $coffee->url                    = 'http://metriccoffee.com/collections/single-origin/products/hondurascarmindavasquez';
        $coffee->roasters_description   = 'Honduras Santa Elena Carminda Vásquez is sourced from a family-owned farm in collaboration with Catracha Coffee Company.  Carminda Vásquez Sorto produced this micro-lot on a 3.5 acre farm called El Naranjo located in the municipality of Santa Elena within the department of La Paz, Honduras. Catracha Coffee works with a select group of farmers who participate in monthly educational seminars to improve upon their coffee production. These capacity building opportunities have helped Carminda increase yields and improve the quality of his coffee. Carminda receives all the profits associated with the sale of her exported coffee, which is the main source of income for her, her husband, and 6 children. Carminda plans to use some of her earnings to renovate parts of her farm that have been damaged by leaf rust.';
        $coffee->url_name               = 'SantaElena';
        $coffee->save();

        $coffee = new Coffee();
        $coffee->user_id                = 10;
        $coffee->region_id              = 8;
        $coffee->roaster_id             = 5;
        $coffee->name                   = 'Bon Vivant';
        $coffee->img_url                = '/img/bonvivant.jpg';
        $coffee->url                    = 'http://metriccoffee.com/collections/blends/products/bonvivant';
        $coffee->roasters_description   = 'Creating a blend to achieve a particular flavor profile can be very exciting. It allows us to cup samples from all over, with the goal of finding the perfect coffee, or coffees, to suit our needs. In doing so for Bon Vivant, we seek heirloom, varietal coffees that find harmony and balance within each layer of this blend. These coffees are some of the most nuanced, and complex coffees on the planet and can shape-shift from region to region, processing, and through roast application.

            Blend Components:
            Ethiopia, Kenya, Colombia

            Cupping Notes:
            Taking my first few sips of the cup immediately post-brew, we were greeted by a
            silky, medium-bodied coffee that immediately bites at our taste buds with notes of tart
            grapefruit. There are soothing, raw sugar and bittersweet dark chocolate and
            silky, fragrant elements to the profile that saves it from being too tart throughout the cup.';
        $coffee->url_name               = 'BonVivant';
        $coffee->save();

	}

}