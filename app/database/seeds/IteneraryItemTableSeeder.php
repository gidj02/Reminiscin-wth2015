<?php


class IteneraryItemTableSeeder extends Seeder {

    public function run()
    {	
        DB::table('item')->delete();

        Item::create(array('itenenaryid' => '1',
                           'locationid' => '1',
        				           'name' => 'insertnamehere',
                           'review' => '1.2',
                           'location' => 'Montalban, Rizal, Philippines',
                           'blog' => 'bloghere');
        Item::create(array('itenenaryid' => '1',
                           'name' => 'insertnamehere',
                           'locationid' => '1',
                           'review' => '1.2',
                           'location' => 'Montalban, Rizal, Philippines',
                           'blog' => 'bloghere');
        Item::create(array('itenenaryid' => '1',
                           'name' => 'insertnamehere',
                           'locationid' => '1',
                           'review' => '1.2',
                           'location' => 'Montalban, Rizal, Philippines',
                           'blog' => 'bloghere');
        Item::create(array('itenenaryid' => '1',
                           'name' => 'insertnamehere',
                           'locationid' => '1',
                           'review' => '1.2',
                           'location' => 'Montalban, Rizal, Philippines',
                           'blog' => 'bloghere');
        Item::create(array('itenenaryid' => '1',
                           'name' => 'insertnamehere',
                           'locationid' => '1',
                           'review' => '1.2',
                           'location' => 'Montalban, Rizal, Philippines',
                           'blog' => 'bloghere');
    }

}


?>