<?php


class ItineraryTableSeeder extends Seeder {

    public function run()
    {	
        DB::table('itinerary')->delete();

        Itinerary::create(array('userid' => '4',
        				   'name' => 'Mountain Itinerary',
        				   'review' => '1.4'));
    }

}


?>