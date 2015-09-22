<?php

class RoastersTableSeeder extends Seeder {

	public function run()
	{

		$roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Wood Burl';
                $roaster->address       = '257 Wayne Ave.';
                $roaster->city          = 'Dayton';
                $roaster->state         = 'OH';
                $roaster->img_url       = 'woodburl.png';
                $roaster->url           = 'http://www.woodburlcoffee.com/';
                $roaster->description   = 'All coffees are seasonal and will change frequently. We strongly suggest serving/selling coffee within 2 weeks of the roast date, which is printed on the bags. Our coffee is roasted with care in small batches in Dayton, Ohio.';
                $roaster->twitter       = 'https://twitter.com/search?q=press%20coffee%20dayton&src=typd';
                $roaster->facebook      = 'https://www.facebook.com/PressCoffeeBarDYT?fref=ts';
                $roaster->instagram     = 'https://instagram.com/woodburlcoffee/';

                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Corvus';
                $roaster->address       = '1740 Broadway';
                $roaster->city          = 'Denver';
                $roaster->state         = 'CO';
                $roaster->img_url       = 'corvus.png';
                $roaster->url           = 'http://www.corvuscoffee.com/';
                $roaster->description   = 'Corvus Coffee Co is a Specialty Coffee Roaster in Denver, Colorado. We pride ourselves in working with Single estate and Privately owned farms. We believe farmers can provide themselves with better livelihoods through better coffee, instead of fair trade, organic, or other for-profit certifications to make us feel good in the states. 
                        We firmly believe that the best way to impact farmers is to encourage them to sustainably produce higher-quality coffee. We work closely with a Q-Grader to ensure that farms understand how to improve processing and sorting to be able to sell us a higher quality, higher priced product. We have brokers on the ground in every area we work with and have full visibility to the farm through these very dedicated people. At the moment we are proud to have direct trade connections with about 85% of all the coffees we bring in to our Roast works for wholesale and retail. This includes coffees from Colombia, Brazil, Peru, Nicaragua, El Salvador, Costa Rica, Panama, Ethiopia, Kenya, Guatemala, and others. We specialize in very sweet, highly vibrant, and exceptionally clean coffees with a variety of flavors in the final cup.
                        We are a small-batch roaster, which means we roast two or three times a week and don\'t maintain a back-stock of coffee. When you purchase from us, your coffee will arrive within a day or two from being roasted. Our cast-iron Geisen roaster is made by true coffee craftsmen in the Netherlands who made some of the best machines for a larger German manufacturer for many years before splitting off to pursue the craft at an even higher level. 
                        We have been heavily influenced by the Nordic roasting styles and mindset of the roasters in Norway. For a long time, people viewed roasting in terms of "light" and "dark" when talking about roast profiles. As roasting knowledge has advanced, so has the understanding of what happens to coffee when heat is applied. Our fully manual roaster allows us to manipulate heat and airflow in a way which increases the development of the bean more quickly at different stages of the roast. The result is a very sweet, flavorful coffee which has no flavor from the roasting process. Each bean is evaluated on multiple roast profiles until we understand how to bring out the flavor developed before the coffee left the farm, and avoid adding a "roasted" flavor.';
                $roaster->twitter       = 'https://twitter.com/CorvusCoffee';
                $roaster->facebook      = 'https://www.facebook.com/CorvusCoffeeRoasters?fref=ts';
                $roaster->instagram     = 'https://instagram.com/corvuscoffee/';
        
                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Onyx Coffee Lab';
                $roaster->address       = '';
                $roaster->city          = '';
                $roaster->state         = '';
                $roaster->img_url       = '';
                $roaster->url           = '';
                $roaster->description   = '';
                $roaster->twitter       = '';
                $roaster->facebook      = '';
                $roaster->instagram     = '';
        
                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Counter Culture Coffee';
                $roaster->address       = '';
                $roaster->city          = '';
                $roaster->state         = '';
                $roaster->img_url       = '';
                $roaster->url           = '';
                $roaster->description   = '';
                $roaster->twitter       = '';
                $roaster->facebook      = '';
                $roaster->instagram     = '';
        
                $roaster = new Roaster();
                $roaster->user_id       = 1;
                $roaster->name          = 'Metric';
                $roaster->address       = '';
                $roaster->city          = '';
                $roaster->state         = '';
                $roaster->img_url       = '';
                $roaster->url           = '';
                $roaster->description   = '';
                $roaster->twitter       = '';
                $roaster->facebook      = '';
                $roaster->instagram     = '';
	}
}