<?php


class ReviewsTableSeeder extends Seeder {

	public function run()
	{

    	$review = new Review();	
        $review->coffee_id      = 1;
        $review->roaster_id     = 1;
        $review->user_id        = 1;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 8;
        $review->flavor         = 9;
        $review->aftertaste     = 7.5;
        $review->balance        = 7;
        $review->roast          = 5;
        $review->body           = 4;
        $review->acidity        = 6;
        $review->price          = 17.50;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 12;
        $review->roaster_id     = 6;
        $review->user_id        = 3;
        $review->review         = 'This is what Local has had as their house coffee for a couple of weeks now. At the shop, has been a very balanced and pleasant cup, and that experience changed little at home. A sweet, light, and balanced nose. More creamy brown sugars and less of the nuttiness of some of Local\'s other excellent offerings. A really, really nice cup. Light acidity on the front, with some tangerine/clementine sweet citrus on the back end. Excellent balance, with a piloncillo sweetness to it. Not a lot of floral notes, which I found myself expecting for some reason. The bag advertises as "clean" and I\'d say that\'s spot on. Excellent offering on the lower end of Local\'s price range as of right now. Will definitely buy again.';
        $review->aroma          = 8.5;
        $review->flavor         = 7.5;
        $review->aftertaste     = 6.5;
        $review->balance        = 7.5;
        $review->roast          = 4.0;
        $review->body           = 4.0;
        $review->acidity        = 6.5;
        $review->price          = 19.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 11;
        $review->roaster_id     = 6;
        $review->user_id        = 3;
        $review->review         = 'The beans are beautiful and the aroma when opening the AirScape and then grinding is heavenly. Light, sweet, relatively mild on the nose, with a hint of spiciness that I just can\'t pinpoint. A bit of caramel/sugar on the front (cup was taken black), and some citrus, yet very low acidity. The balance from sip to finish is wonderful. As it cools, the cup settles into even greater smoothness. A little more acidity also comes through, but so does a hint of sweet raisins. Still working on my tasting note-taking, but have to say that the Gitmalee has been one of my favorites from Merit thus far.';
        $review->aroma          = 6.0;
        $review->flavor         = 8.0;
        $review->aftertaste     = 7.5;
        $review->balance        = 9.0;
        $review->roast          = 3.5;
        $review->body           = 4.0;
        $review->acidity        = 3.5;
        $review->price          = 19.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 11;
        $review->roaster_id     = 6;
        $review->user_id        = 2;
        $review->review         = 'Very pleasant aroma with a light citrus smell and a stronger spiciness to it. Body seemed a little lighter than average. The flavors are well balanced, and I feel the combinations are unique, which makes for a good experience. The aftertaste is quite raisin-y and a lingering mild roastiness, which is more pleasant than I made it sound.';
        $review->aroma          = 7.0;
        $review->flavor         = 8.0;
        $review->aftertaste     = 6.5;
        $review->balance        = 8.0;
        $review->roast          = 5.5;
        $review->body           = 4.5;
        $review->acidity        = 6.0;
        $review->price          = 19.00;
        $review->bag_size_grams = 340;
        $review->save();

        // $review = new Review();
        // $review->coffee_id      = 4;
        // $review->roaster_id     = 2;
        // $review->user_id        = 4;
        // $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        // $review->aroma          = mt_rand(1,20)/2;
        // $review->flavor         = mt_rand(1,20)/2;
        // $review->aftertaste     = mt_rand(1,20)/2;
        // $review->balance        = mt_rand(1,20)/2;
        // $review->roast          = mt_rand(1,20)/2;
        // $review->body           = mt_rand(1,20)/2;
        // $review->acidity        = mt_rand(1,20)/2;
        // $review->price          = 20.00;
        // $review->bag_size_grams = 340;
        // $review->save();

        // $review = new Review();
        // $review->coffee_id      = 5;
        // $review->roaster_id     = 3;
        // $review->user_id        = 5;
        // $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        // $review->aroma          = mt_rand(1,20)/2;
        // $review->flavor         = mt_rand(1,20)/2;
        // $review->aftertaste     = mt_rand(1,20)/2;
        // $review->balance        = mt_rand(1,20)/2;
        // $review->roast          = mt_rand(1,20)/2;
        // $review->body           = mt_rand(1,20)/2;
        // $review->acidity        = mt_rand(1,20)/2;
        // $review->price          = 18.00;
        // $review->bag_size_grams = 340;
        // $review->save();

        // $review = new Review();
        // $review->coffee_id      = 6;
        // $review->roaster_id     = 3;
        // $review->user_id        = 6;
        // $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        // $review->aroma          = mt_rand(1,20)/2;
        // $review->flavor         = mt_rand(1,20)/2;
        // $review->aftertaste     = mt_rand(1,20)/2;
        // $review->balance        = mt_rand(1,20)/2;
        // $review->roast          = mt_rand(1,20)/2;
        // $review->body           = mt_rand(1,20)/2;
        // $review->acidity        = mt_rand(1,20)/2;
        // $review->price          = 15.00;
        // $review->bag_size_grams = 340;
        // $review->save();

        // $review = new Review();
        // $review->coffee_id      = 7;
        // $review->roaster_id     = 4;
        // $review->user_id        = 7;
        // $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        // $review->aroma          = mt_rand(1,20)/2;
        // $review->flavor         = mt_rand(1,20)/2;
        // $review->aftertaste     = mt_rand(1,20)/2;
        // $review->balance        = mt_rand(1,20)/2;
        // $review->roast          = mt_rand(1,20)/2;
        // $review->body           = mt_rand(1,20)/2;
        // $review->acidity        = mt_rand(1,20)/2;
        // $review->price          = 15.75;
        // $review->bag_size_grams = 340;
        // $review->save();

        // $review = new Review();
        // $review->coffee_id      = 8;
        // $review->roaster_id     = 4;
        // $review->user_id        = 8;
        // $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        // $review->aroma          = mt_rand(1,20)/2;
        // $review->flavor         = mt_rand(1,20)/2;
        // $review->aftertaste     = mt_rand(1,20)/2;
        // $review->balance        = mt_rand(1,20)/2;
        // $review->roast          = mt_rand(1,20)/2;
        // $review->body           = mt_rand(1,20)/2;
        // $review->acidity        = mt_rand(1,20)/2;
        // $review->price          = 18.00;
        // $review->bag_size_grams = 340;
        // $review->save();

        // $review = new Review();
        // $review->coffee_id      = 9;
        // $review->roaster_id     = 5;
        // $review->user_id        = 9;
        // $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        // $review->aroma          = mt_rand(1,20)/2;
        // $review->flavor         = mt_rand(1,20)/2;
        // $review->aftertaste     = mt_rand(1,20)/2;
        // $review->balance        = mt_rand(1,20)/2;
        // $review->roast          = mt_rand(1,20)/2;
        // $review->body           = mt_rand(1,20)/2;
        // $review->acidity        = mt_rand(1,20)/2;
        // $review->price          = 12.75;
        // $review->bag_size_grams = 225;
        // $review->save();

        // for ($i = 0; $i < 10; $i++) {
        //     $review = new Review();
        //     $review->coffee_id      = 1;
        //     $review->roaster_id     = 1;
        //     $review->user_id        = 10;
        //     $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        //     $review->aroma          = mt_rand(10,20)/2;
        //     $review->flavor         = mt_rand(10,20)/2;
        //     $review->aftertaste     = mt_rand(10,20)/2;
        //     $review->balance        = mt_rand(10,20)/2;
        //     $review->roast          = mt_rand(10,20)/2;
        //     $review->body           = mt_rand(10,20)/2;
        //     $review->acidity        = mt_rand(10,20)/2;
        //     $review->price          = 15.00;
        //     $review->bag_size_grams = 340;
        //     $review->save();
        // } 
    }
}