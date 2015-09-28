<?php


class ReviewsTableSeeder extends Seeder {

	public function run()
	{

    	$review = new Review();	
        $review->coffee_id      = 1;
        $review->roaster_id     = 1;
        $review->user_id        = 1;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 1;
        $review->flavor         = 1;
        $review->aftertaste     = 1;
        $review->balance        = 1;
        $review->roast          = 1;
        $review->body           = 1;
        $review->acidity        = 1;
        $review->price          = 17.50;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 2;
        $review->roaster_id     = 1;
        $review->user_id        = 2;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 20.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 3;
        $review->roaster_id     = 2;
        $review->user_id        = 3;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 16.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 4;
        $review->roaster_id     = 2;
        $review->user_id        = 4;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 20.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 5;
        $review->roaster_id     = 3;
        $review->user_id        = 5;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 18.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 6;
        $review->roaster_id     = 3;
        $review->user_id        = 6;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 15.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 7;
        $review->roaster_id     = 4;
        $review->user_id        = 7;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 15.75;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 8;
        $review->roaster_id     = 4;
        $review->user_id        = 8;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 18.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 9;
        $review->roaster_id     = 5;
        $review->user_id        = 9;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = mt_rand(1,20)/2;
        $review->flavor         = mt_rand(1,20)/2;
        $review->aftertaste     = mt_rand(1,20)/2;
        $review->balance        = mt_rand(1,20)/2;
        $review->roast          = mt_rand(1,20)/2;
        $review->body           = mt_rand(1,20)/2;
        $review->acidity        = mt_rand(1,20)/2;
        $review->price          = 12.75;
        $review->bag_size_grams = 225;
        $review->save();

        for ($i = 0; $i < 10; $i++) {
            $review = new Review();
            $review->coffee_id      = 1;
            $review->roaster_id     = 1;
            $review->user_id        = 10;
            $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
            $review->aroma          = mt_rand(10,20)/2;
            $review->flavor         = mt_rand(10,20)/2;
            $review->aftertaste     = mt_rand(10,20)/2;
            $review->balance        = mt_rand(10,20)/2;
            $review->roast          = mt_rand(10,20)/2;
            $review->body           = mt_rand(10,20)/2;
            $review->acidity        = mt_rand(10,20)/2;
            $review->price          = 15.00;
            $review->bag_size_grams = 340;
            $review->save();
        } 
    }
}