<?php


class IteneraryItemTableSeeder extends Seeder {

    public function run()
    {	$table->increments('id');
            $table->unsignedInteger('itenenaryid');
            $table->foreign('itenenaryid')->references('id')->on('itenerary');
            $table->string('name');
            $table->float('review');
            $table->string('location');
            $table->string('blog');
        DB::table('item')->delete();

        Item::create(array('itenenaryid' => '1',
        				   'name' => 'insertnamehere',
                           'review' => '1.2',
                           'location' => 'Montalban, Rizal, Philippines',
                           'blog' => 'bloghere');
    }

}


?>