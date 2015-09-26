<?php

class RegionsTableSeeder extends Seeder {

	public function run()
	{
        $region = new Region();
        $region->name           = 'Ethiopia';
        $region->description    = 'Ethiopia is the birthplace of coffee: it is in the forests of the Kaffa region that Coffea Arabica grew wild. Coffee is "Bun" or "Buna" in Ethiopia, so Coffee Bean is quite possibly a poor anglicized interpretation of "Kaffa Bun". We consider Ethiopian coffees to be some of the best in the world, and extreme genetic diversity of the coffee shrub is certainly part of the reason why. Most of the coffee is either wet-processed - resulting in a vividly bright cup, with fruit and floral notes - or dry-processed with the fruit skin intact.  The latter technique produces a very  different, rustic fruited flavor profile, and with thicker body. - Sweet Maria\'s';
        $region->img_url        = '/img/regions/ethiopia.jpg';
        $region->map_url        = '/img/maps/ethiopia.png';
        $region->save();

        $region = new Region();
        $region->name           = 'Kenya';
        $region->description    = 'Kenya is the East African powerhouse of the coffee world. Both in the cup, and the way they run their trade, everything is topnotch. The best Kenya coffees are not sold simply as generic AA or AB. They are specific auction lots sold to the highest bidder, and heated competition drives the prices sky high. Their research and development is unparalleled. Their quality control is meticulous, and many thousands of small farmers are highly educated in their agricultural practice --and rewarded -- for top level coffee.
 
In general, this is a bright coffee that lights up the palate from front to back. It is not for people who do not like acidity in coffee (acidity being the prized bright notes in the cup due to an interrelated set of chlorogenic acids). A great Kenya is complex, and has interesting fruit (berry, citrus) flavors, sometimes alternating with spice. Some are clean and bright, others have cherished winey flavors. - Sweet Maria\'s';
        $region->img_url        = '/img/regions/kenya.jpg';
        $region->map_url        = '/img/maps/kenya.png';
        $region->save();

        $region = new Region();
        $region->name           = 'El Salvador';
        $region->description    = 'El Salvador can produce very good coffee. Bourbon varietal coffees are at one end of the spectrum, with a balanced, classic "Central" profile, a good alternative to Brazil as a base for espresso; Pacamara varietal coffees are their opposite, quirky and full of character. High altitudes and good, dense traditional varietals are a factor in the quality of El Salvador coffees. The country also produces an abundance of lower-grown coffee with fairly average cup quality. - Sweet Maria\'s';
        $region->img_url        = '/img/regions/elsalvador.jpg';
        $region->map_url        = '/img/maps/elsalvador.png';
        $region->save();

        $region = new Region();
        $region->name           = 'Costa Rica';
        $region->description    = 'Coffee production has played a key role in Costa Rica\'s history and continues to be important to the country\'s economy. In 2006, coffee was Costa Rica\'s number three export, after being the number one cash crop export for several decades. In 1997, the agriculture sector employed 28 percent of the labor force and comprised 20 percent of Costa Rica\'s total GNP. Production increased from 158,000 tons in 1988 to 168,000 tons in 1992. Costa Rican coffee is high in caffeine; it is often blended with inferior varieties. The largest growing areas are in the provinces of San José, Alajuela, Heredia, Puntarenas, and Cartago. The coffee is exported to other countries in the world and is also exported to cities in Costa Rica. -Wikipedia';
        $region->img_url        = '/img/regions/costarica.jpg';
        $region->map_url        = '/img/maps/costarica.png';
        $region->save();

        $region = new Region();
        $region->name           = 'Sumatra';
        $region->description    = 'Sumatra coffees are famous for their peculiar flavor profile, low acidity, thick body, and rustic flavors that can often be described as earthy. Much of the flavor comes from the way Sumatras are processed, the wet-hull method , not to be confused with wet-processed coffee. The flavor of typical wet-hull Sumatra is polarizing among buyers. Some love it, but they must bracket this type of flavor profile because it would be considered unacceptable from any other origin besides Indonesia. Each coffee drinker has to discover if this type of flavor is right for them, or not; whether it\'s a go-to daily drinker, an occasional diversion, or flat-out unacceptable. - Sweet Maria\'s';
        $region->img_url        = '/img/regions/sumatra.jpg';
        $region->map_url        = '/img/maps/sumatra.png';
        $region->save();

        $region = new Region();
        $region->name           = 'Colombia';
        $region->description    = 'Colombia is a diverse group of growing regions spread from North to South along the three "cordilleras," the mountain ranges that are the Northern extensions of the Andes. Colombian coffees can be outstanding. Most coffee, especially from the Southern growing areas of Huila, Cauca, Narino and Tolima, comes from small family farms, and when the picking and processing are done well they can be exceptional: Silky body, cane sugar sweetness, floral hints and traces of tropical fruits are found in the best Colombia coffees. - Sweet Maria\'s';
        $region->img_url        = '/img/regions/colombia.jpg';
        $region->map_url        = '/img/maps/colombia.png';
        $region->save();

        $region = new Region();
        $region->name           = 'Guatemala';
        $region->description    = 'Guatemalan coffee is arguably the crown jewel of Central America. That doesn\'t not mean all Guatemalan coffees are good ... but it does means that the potential on the upside, the possibility of 88+ point coffees, is greater from regions in Guatemala than its neighboring countries. Great Guatemalan coffees have a bright cup character, floral hints, clean fruited notes, moderate body, and a lingering clean aftertaste. With varying qualities, farms ranging from huge estates to tiny small-holders perched on steep slopes, and different cup characteristics from within the same micro-regions, there is much to learn to appreciate the complexity of Guatemala coffee. - Sweet Maria\'s';
        $region->img_url        = '/img/regions/guatemala.jpg';
        $region->map_url        = '/img/maps/guatemala.png';
        $region->save();

        $region = new Region();
        $region->name           = 'Blend';
        $region->description    = 'Sometimes people enjoy drinking blends. Who am I to say that\'s wrong?';
        $region->img_url        = '/img/regions/blend.jpg';
        $region->map_url        = '/img/blend.jpg';
        $region->save();

        $region = new Region();
        $region->name           = 'Other';
        $region->description    = 'There are many other coffee growing regions than the ones currently listed here. Check back soon to see a more detailed list.';
        $region->img_url        = '/img/regions/other.jpg';
        $region->map_url        = '/img/other.jpg';
        $region->save();

	}

}