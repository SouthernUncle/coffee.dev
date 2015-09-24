<?php


class ReviewsTableSeeder extends Seeder {

	public function run()
	{

    	$review = new Review();	
        $review->coffee_id      = 1;
        $review->roaster_id     = 1;
        $review->user_id        = 1;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 9.5;
        $review->flavor         = 8.5;
        $review->aftertaste     = 8;
        $review->balance        = 6.5;
        $review->roast          = 5;
        $review->body           = 7;
        $review->acidity        = 8;
        $review->weight_avg     = 8.36;
        $review->price          = 17.50;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 2;
        $review->roaster_id     = 1;
        $review->user_id        = 2;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 6;
        $review->flavor         = 5;
        $review->aftertaste     = 4;
        $review->balance        = 6.5;
        $review->roast          = 1;
        $review->body           = 8;
        $review->acidity        = 10;
        $review->weight_avg     = 5.75;
        $review->price          = 20.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 3;
        $review->roaster_id     = 2;
        $review->user_id        = 3;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 6.5;
        $review->flavor         = 7.5;
        $review->aftertaste     = 8;
        $review->balance        = 6.5;
        $review->roast          = 3;
        $review->body           = 8;
        $review->acidity        = 8;
        $review->weight_avg     = 7.39;
        $review->price          = 16.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 4;
        $review->roaster_id     = 2;
        $review->user_id        = 4;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 6.5;
        $review->flavor         = 8.5;
        $review->aftertaste     = 8;
        $review->balance        = 6.5;
        $review->roast          = 5;
        $review->body           = 7;
        $review->acidity        = 8;
        $review->weight_avg     = 7.69;
        $review->price          = 20.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 5;
        $review->roaster_id     = 3;
        $review->user_id        = 5;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 9;
        $review->flavor         = 8;
        $review->aftertaste     = 8;
        $review->balance        = 6.5;
        $review->roast          = 8;
        $review->body           = 3;
        $review->acidity        = 5;
        $review->weight_avg     = 7.93;
        $review->price          = 18.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 6;
        $review->roaster_id     = 3;
        $review->user_id        = 6;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 8;
        $review->flavor         = 9.5;
        $review->aftertaste     = 10;
        $review->balance        = 6.5;
        $review->roast          = 7;
        $review->body           = 8;
        $review->acidity        = 5;
        $review->weight_avg     = 8.73;
        $review->price          = 15.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 7;
        $review->roaster_id     = 4;
        $review->user_id        = 7;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 8;
        $review->flavor         = 9.5;
        $review->aftertaste     = 8;
        $review->balance        = 6.5;
        $review->roast          = 7;
        $review->body           = 8;
        $review->acidity        = 4.5;
        $review->weight_avg     = 8.25;
        $review->price          = 15.75;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 8;
        $review->roaster_id     = 4;
        $review->user_id        = 8;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 9.5;
        $review->flavor         = 9.5;
        $review->aftertaste     = 6.5;
        $review->balance        = 6.5;
        $review->roast          = 8;
        $review->body           = 8;
        $review->acidity        = 3;
        $review->weight_avg     = 8.23;
        $review->price          = 18.00;
        $review->bag_size_grams = 340;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 9;
        $review->roaster_id     = 5;
        $review->user_id        = 9;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 9;
        $review->flavor         = 8;
        $review->aftertaste     = 9.5;
        $review->balance        = 6.5;
        $review->roast          = 4;
        $review->body           = 9.5;
        $review->acidity        = 6;
        $review->weight_avg     = 8.44;
        $review->price          = 12.75;
        $review->bag_size_grams = 225;
        $review->save();

        $review = new Review();
        $review->coffee_id      = 10;
        $review->roaster_id     = 5;
        $review->user_id        = 10;
        $review->review         = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex';
        $review->aroma          = 9.5;
        $review->flavor         = 8;
        $review->aftertaste     = 9.5;
        $review->balance        = 6.5;
        $review->roast          = 6;
        $review->body           = 8;
        $review->acidity        = 3;
        $review->weight_avg     = 8.43;
        $review->price          = 15.00;
        $review->bag_size_grams = 340;
        $review->save();
	}
}