<?php


class LocationTableSeeder extends Seeder {

    public function run()
    {	
        DB::table('location')->delete();

        Location::create(array('name' => 'Artists Village of Angono',
                        				   'location' => 'Angono, Rizal, Philippines',
                        				   'description' => 'The town of Angono is known for the Higantes Festival and for its admirable artworks of extraordinarily talented artists. It is the home town of the two great National Artists of the Philippines, Carlos “Botong” Francisco for visual arts and Maestro and Lucio San Pedro for music, who have inspired generations of artists to create numerous works in varied styles of artistic expressions
                                             There are a number of art galleries and studios within the town which makes Angono the Art Capital of the Philippines. These are the Blanco Family Museum, Nemiranda Arthouse & Gallery, Tiamson Art Gallery, Ang Nuno Artists Foundation Gallery, Village Artists Gallery, Juban Studios, Vicente Reyes Art Studio, the Second Gallery and the Angono Ateliers Gallery.'));
        
        Location::create(array('name' => 'Angono Forest Park, Angono, Rizal',
                                    'location' => 'Angono, Rizal, Philippines',
                                    'description' => 'A 1.5 hectare of land profuse with high rising trees and shrubs which is the perfect site for camping and outdoor environmental and recreational activities. The place is also a good venue for meetings, gatherings and other occasions.'));

        Location::create(array('name' => 'Hamaka Park, Along the National Road, Antipolo City',
                                    'location' => 'Antipolo City, Philippines',
                                    'description' => 'Named after the term hamaka or hammock. For the many years past, this was the means of transporting ladies on their way to the pilgrimage site of Nuestra Senora dela Paz y Buenviaje (Our Lady of Peace and Good Voyage). The hammock was borne by two men who hike up and down the hilly terrain of Antipolo with their precious cargo comfortably settled in the hamaka.'));

        Location::create(array('name' => 'Pamitinan Cave and Wawa Dam, Brgy. Wawa, Rodriguez, Rizal',
                                    'location' => 'Rodriguez, Rizal, Philippines',
                                    'description' => 'Pamitinan Cave is a historic site. It is where Andres Bonifacio, together with other 8 katipuneros declared independence from Spain on April 12, 1895, a year before the start of the Philippine revolution. The cave still bears the inscription of Andres Bonifacio and his followers: “Viva la Independencia Filipinas”
                                                      Wawa Dam is located at the picturesque foothills of the Sierra Madre mountains. It supplies water to parts of the metropolis, passing through large pipes. It has a beautiful gorge which lies between two limestone mountains. Four caves are said to have been inhabited by the Japanese soldiers during the Second World War. Wawa Dam is a key ecotourism site in the Southern Tagalog region.'));

        Location::create(array('name' => 'Valley Golf and Country Club, Sumulong Highway, Antipolo City',
                                    'location' => 'Antipolo City, Philippines',
                                    'description' => 'The land area, terrain and topography of the valley meet the criteria for a standard championship golf course. The clubhouse is the venue for special events and fellowship of club members and guests.'));
    
        Location::create(array('name' => 'Hinulugang Taktak',
                                    'location' => 'Antipolo City, Philippines',
                                    'description' => 'This mountain resort right in the bustling heart of Antipolo has picnic cottages, a swimming area, footpaths and a small waterfall. The festival month of May attracts thousands of visitors who come to watch concerts and stage plays held at the park.'));

        Location::create(array('name' => 'Calinawan Cave',
                                    'location' => 'Tanay, Rizal, Philippines',
                                    'description' => 'This cave served as a shelter and hideaway from the Japanese during World War 2.'));

        Location::create(array('name' => 'Daranak Falls',
                                    'location' => 'Tanay, Rizal, Philippines',
                                    'description' => 'This 14 meter high waterfalls is a favorite location shooting area of most local and international movies and advertising outfits in the country and can be found at the foot of the Tanay Mountains.'));

        Location::create(array('name' => 'Baras Church',
                                    'location' => 'Baras, Rizal, Philippines',
                                    'description' => 'This Church is one of the oldest in the area having been completed in 1686 and which has an altar and lecterns that are stone artifacts unearthed from beneath the church.'));

        // Location::create(array('name' => 'Batlag Falls',
        //                             'location' => 'Tanay, Rizal, Philippines',
        //                             'description' => 'Further up from Daranak Falls is its sister upstream, Batlag Falls. This 10 meter high waterfalls is set on a unique rock formation.'));

        // Location::create(array('name' => 'St. Mary Magdalene Parish Church',
        //                             'location' => 'Pililla, Rizal, Philippines',
        //                             'description' => ' The church is more than 400 years old. Built in 1572 under the supervision of franciscan priests. The first church was built made of bamboo and cogon. Numerous renovations was made in the past four decades. Antique saint statues are some of the church treasures. The church serves as the town peoples sanctuary during World War II. The church remain dear to devoted Catholics in this town which is about 70% of its population. '));
    }

}


?>