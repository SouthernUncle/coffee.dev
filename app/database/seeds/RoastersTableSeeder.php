<?php

class RoastersTableSeeder extends Seeder {

	public function run()
	{

		$roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Wood Burl Coffee';
                $roaster->address       = '257 Wayne Ave.';
                $roaster->city          = 'Dayton';
                $roaster->state         = 'OH';
                $roaster->img_url       = '/img/woodburl.jpg';
                $roaster->url           = 'http://woodburlcoffee.com';
                $roaster->description   = 'All coffees are seasonal and will change frequently. We strongly suggest serving/selling coffee within 2 weeks of the roast date, which is printed on the bags. Our coffee is roasted with care in small batches in Dayton, Ohio.';
                $roaster->twitter       = 'https://www.twitter.com/search?q=press%20coffee%20dayton&src=typd';
                $roaster->facebook      = 'https://www.facebook.com/PressCoffeeBarDYT?fref=ts';
                $roaster->instagram     = 'https://wwww.instagram.com/woodburlcoffee/';
                $roaster->url_name      = 'WoodBurl';
                $roaster->save();

                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Corvus Coffee';
                $roaster->address       = '1740 Broadway';
                $roaster->city          = 'Denver';
                $roaster->state         = 'CO';
                $roaster->img_url       = '/img/corvus.jpg';
                $roaster->url           = 'http://corvuscoffee.com';
                $roaster->description   = 'Corvus Coffee Co is a Specialty Coffee Roaster in Denver, Colorado. We pride ourselves in working with Single estate and Privately owned farms. We believe farmers can provide themselves with better livelihoods through better coffee, instead of fair trade, organic, or other for-profit certifications to make us feel good in the states. 
                        We firmly believe that the best way to impact farmers is to encourage them to sustainably produce higher-quality coffee. We work closely with a Q-Grader to ensure that farms understand how to improve processing and sorting to be able to sell us a higher quality, higher priced product. We have brokers on the ground in every area we work with and have full visibility to the farm through these very dedicated people. At the moment we are proud to have direct trade connections with about 85% of all the coffees we bring in to our Roast works for wholesale and retail. This includes coffees from Colombia, Brazil, Peru, Nicaragua, El Salvador, Costa Rica, Panama, Ethiopia, Kenya, Guatemala, and others. We specialize in very sweet, highly vibrant, and exceptionally clean coffees with a variety of flavors in the final cup.
                        We are a small-batch roaster, which means we roast two or three times a week and don\'t maintain a back-stock of coffee. When you purchase from us, your coffee will arrive within a day or two from being roasted. Our cast-iron Geisen roaster is made by true coffee craftsmen in the Netherlands who made some of the best machines for a larger German manufacturer for many years before splitting off to pursue the craft at an even higher level. 
                        We have been heavily influenced by the Nordic roasting styles and mindset of the roasters in Norway. For a long time, people viewed roasting in terms of "light" and "dark" when talking about roast profiles. As roasting knowledge has advanced, so has the understanding of what happens to coffee when heat is applied. Our fully manual roaster allows us to manipulate heat and airflow in a way which increases the development of the bean more quickly at different stages of the roast. The result is a very sweet, flavorful coffee which has no flavor from the roasting process. Each bean is evaluated on multiple roast profiles until we understand how to bring out the flavor developed before the coffee left the farm, and avoid adding a "roasted" flavor.';
                $roaster->twitter       = 'https://www.twitter.com/CorvusCoffee';
                $roaster->facebook      = 'https://www.facebook.com/CorvusCoffeeRoasters?fref=ts';
                $roaster->instagram     = 'https://wwww.instagram.com/corvuscoffee/';
                $roaster->url_name      = 'Corvus';
                $roaster->save();
        
                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Onyx Coffee';
                $roaster->address       = '2418 N Gregg Ave';
                $roaster->city          = 'Fayetteville';
                $roaster->state         = 'AR';
                $roaster->img_url       = '/img/onyx.jpg';
                $roaster->url           = 'http://onyxcoffeelab.com';
                $roaster->description   = 'At Onyx we love coffee. Coffee roasting. Coffee brewing. Coffee talking. We don\'t want you to taste the roast; we want you to taste the bean. Every single coffee farm yields beans that have specific, innate taste notes that can only be exhibited when roasted correctly, and that\'s what we\'re after. It\'s the perfect combination of science + art that fuses ethical trading standards and quality bean sourcing, resulting in a precise cup.';
                $roaster->twitter       = 'https://www.twitter.com/OnyxCoffeeLab';
                $roaster->facebook      = 'https://www.facebook.com/OnyxCoffeeLab/';
                $roaster->instagram     = 'https://wwww.instagram.com/onyxcoffeelab/';
                $roaster->url_name      = 'Onyx';
                $roaster->save();
        
                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Counter Culture Coffee';
                $roaster->address       = '4911 S Alston Ave';
                $roaster->city          = 'Durham';
                $roaster->state         = 'NC';
                $roaster->img_url       = '/img/ccc.jpg';
                $roaster->url           = 'http://counterculturecoffee.com';
                $roaster->description   = 'At Counter Culture Coffee, we approach our work with a relentless pursuit of coffee perfection, a dedication to real sustainability, and a commitment to cutting-edge coffee education throughout the coffee chain.
                        Since our founding in 1995, Counter Culture Coffee has represented a different way of bringing coffee to market: sourcing incredible handmade coffees directly from farmers and cooperatives, and roasting so that we bring out their unique flavors.
                        Sustainability and transparency are core values for us, and these concepts guide every decision me make. We believe that everyone in the coffee supply chain deserves to prosper. To us, though, fairness is just a starting point, and we go far beyond the basics of fairness to create collaborative and personal relationships with our farmer partners.
                        We are passionate about coffee education, and our mission to create cutting-edge coffee people extends beyond our organization to the relationships with farmers and co-ops, customers, vendors, and local communities. Our approach to coffee education aims to empower everyone in the coffee chain with the skills and knowledge necessary to ensure quality stewardship and sustainability from farm to cup. Since we know that education, quality, and sustainability go hand in hand, we feel a responsibility to share our discoveries and knowledge with the world.';
                $roaster->twitter       = 'https://www.twitter.com/counter_culture';
                $roaster->facebook      = 'https://www.facebook.com/counterculturecoffee';
                $roaster->instagram     = 'https://wwww.instagram.com/counterculturecoffee/';
                $roaster->url_name      = 'CounterCulture';
                $roaster->save();
        
                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Metric Coffee Co.';
                $roaster->address       = '2021 W Fulton St.';
                $roaster->city          = 'Chicago';
                $roaster->state         = 'IL';
                $roaster->img_url       = '/img/metric.jpg';
                $roaster->url           = 'http://metriccoffee.com';
                $roaster->description   = 'Metric Coffee is a Chicago, IL based Coffee Roaster that aims to provide Quality Coffee to the community it serves. As a company, we take pride in the selection of the coffees we chose, pay close attention to how we roast them and most importantly, provide our partners with the necessary tools to grind and brew the best coffee possible.
                        We chose the name Metric because we like that the technical definition is "a system or standard or measurement" which in is something that is used in every aspect of life. We utilize Metrics in everyday life in order to perform certain tasks and in the world of coffee, it is no exception. Our other inspiration was with our machine having Metric sized nuts and bolts, so it seemed fitting to name our coffee company with concept of Metric in mind.
                        Lastly, as people, we believe that the best way to operate a business is to be honest, ethical and loyal to our friends. We will stand by that any day!';
                $roaster->twitter       = 'https://www.twitter.com/metriccoffee';
                $roaster->facebook      = 'https://www.facebook.com/metriccoffee';
                $roaster->instagram     = 'https://wwww.instagram.com/metriccoffee';
                $roaster->url_name      = 'Metric';
                $roaster->save();

                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Merit Roasting Co.';
                $roaster->address       = '2001 S Presa St.';
                $roaster->city          = 'San Antonio';
                $roaster->state         = 'TX';
                $roaster->img_url       = '/img/merit.jpg';
                $roaster->url           = 'http://meritcoffee.com';
                $roaster->description   = 'We personally source our beans, perfect them through the art/science of precision roasting, and supply them to Local Coffee and select restaurants and retail establishments. Please contact us about wholesale orders.

Roasting coffee to perfection is exacting, but not mysterious. Here’s how we do it: 

1) Travel the globe to find the best coffee beans. 

2) Buy entire micro-lots of great beans at a fair price. 

3) Roast with artistry and advanced technology. 

4) Control quality from grower to roaster to barista to consumer.

Many of our specialty beans come from a single farm or even from a specific area on the farm, so they are limited in quantity and superior in quality.

We buy directly from the farmers and have established strong, long-term relationships, based on good coffee and fair prices.';
                $roaster->twitter       = 'https://www.twitter.com/localcoffeeSA';
                $roaster->facebook      = 'https://www.facebook.com/localcoffeesa';
                $roaster->instagram     = 'https://wwww.instagram.com/meritroastingco';
                $roaster->url_name      = 'Merit';
                $roaster->save();
	}
}