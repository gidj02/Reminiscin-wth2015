<?php


class ItineraryTableSeeder extends Seeder {

    public function run()
    {	
        DB::table('itinerary')->delete();

        Itinerary::create(array('userid' => '1',
        				   'name' => 'Mountain Itinerary',
        				   'description' => 'favorite Itinerary',
        				   'imgurl' => 'img/Artist Village.jpeg'));
    }

}


?>