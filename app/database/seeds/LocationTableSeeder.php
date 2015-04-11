<?php


class LocationTableSeeder extends Seeder {

    public function run()
    {	
        DB::table('location')->delete();

        Location::create(array('name' => 'Artists Village of Angono',
                        				   'location' => 'Angono, Rizal, Philippines',
                        				   'description' => 'The town of Angono is known for the Higantes Festival and for its admirable artworks of extraordinarily talented artists. It is the home town of the two great National Artists of the Philippines, Carlos “Botong” Francisco for visual arts and Maestro and Lucio San Pedro for music, who have inspired generations of artists to create numerous works in varied styles of artistic expressions
                                             There are a number of art galleries and studios within the town which makes Angono the Art Capital of the Philippines. These are the Blanco Family Museum, Nemiranda Arthouse & Gallery, Tiamson Art Gallery, Ang Nuno Artists Foundation Gallery, Village Artists Gallery, Juban Studios, Vicente Reyes Art Studio, the Second Gallery and the Angono Ateliers Gallery.'));
        
        Location::create(array('name' => 'Nemiranda Arthouse and Gallery, Dona Justa Subd., Angono, Rizal',
                                   'location' => 'Angono, Rizal, Philippines',
                                   'description' => 'The gallery houses the collection of the paintings and sculptures of artist Nemiranda and his family, in the style of figurative realism, of his artworks, portraying rural life and folklore art. Also available are lectures, guided tours and painting workshops.'));
        
        Location::create(array('name' => 'Tiamson Art Gallery, 203 Dona Nieves St., Brgy. Sto. Nino, Angono, Rizal',
                                   'location' => 'Angono, Rizal, Philippines',
                                   'description' => 'The art gallery houses the various artworks of painter, musician and transmedia artist Orville DR Tiamson. His style ranges from the conventional to the new age and he has experimented in various artistic presentations, including drawings on paper, oil, acrylic, paintings on canvas, mixed media collages and constructions, installations, performances, music and sound works.'));
        
        Location::create(array('name' => 'Ang Nuno Artists Foundation Gallery, Don Francisco St., Dona Justa Subd., Angono, Rizal',
                                   'location' => 'Angono, Rizal, Philippines',
                                   'description' => 'This charming restaurant cum art gallery owned by Luzviminda Vocalan, wife of the late artist Perdigon Vocalan, is popular among local and foreign tourists. It offers a hearty welcome to guests and treats them to different kinds of native food and exotic cuisine that have proven to be interesting to patrons.'));
        
        Location::create(array('name' => 'Vicente Reyes Studio, Dona Aurora St., Brgy. Poblacion, Angono, Rizal',
                                   'location' => 'Angono, Rizal, Philippines',
                                   'description' => 'One of the most prolific and talented students of the late National Artist Carlos “Botong” Francisco, Vicente Reyes has his own studio that houses his artworks and masterpieces.'));
        
        Location::create(array('name' => 'Rafael Pacheco Finger Painting Gallery, Brgy. Bombongan, Morong, Rizal',
                                   'location' => 'Morong, Rizal, Philippines',
                                   'description' => 'Rafael Pacheco, the artist, has a unique way of expressing his artistic talent – he uses his bare fingers, knuckles and palms to complete a masterpiece in 20 minutes, mainly flora, fauna and underwater life.'));
        
        Location::create(array('name' => 'Tariki Dance, Tanay, Rizal',
                                   'location' => 'Tanay, Rizal, Philippines',
                                   'description' => 'The Tariki Dance was copied and adopted by the locals from the movements of “tariki” birds seen hopping from one bundle of palay to another. It is performed by five pairs of boys and girls dressed in white shirts and pants and blouses and skirts, respectively.'));
        
        Location::create(array('name' => 'World Sikaran/Arnis Brotherhood of the Philippines, 20 Katipunan St., Baras, Rizal',
                                   'location' => 'Angono, Rizal, Philippines',
                                   'description' => 'Sikaran/Arnis is a foot game/sword play and is a combination of two kinds of martial arts that are uniquely Filipino. In Sikaran, the players move around like boxers. Each one aims to knock his opponent down by kicking the latter’s legs. The kicks are delivered with considerable force and agility, and sudden upward and backward movements of the foot. The use of the feet is necessary in winning over the opponent; thus, the name “sikaran” which means “to kick” came about. In arnis, the players use rattan or a wooden stick and strike each other’s sticks. The player who is able to touch his opponent’s body first with the point of his wooden stick or force him to drop his weapon is declared winner.'));
        
        Location::create(array('name' => 'Angono Forest Park, Angono, Rizal',
                                    'location' => 'Angono, Rizal, Philippines',
                                    'description' => 'A 1.5 hectare of land profuse with high rising trees and shrubs which is the perfect site for camping and outdoor environmental and recreational activities. The place is also a good venue for meetings, gatherings and other occasions.'));

        Location::create(array('name' => 'Blanco Family Museum, 312 Ibanez St., Sto. Nino, Angono, Rizal',
                                    'location' => 'Angono, Rizal, Philippines',
                                    'description' => 'This family of prolific painters welcomes visitors to their private museum housing their vast collection of artworks. The head of the clan, renowned artist Jose D. Blanco, has obviously handed down to his many children his great creativity and talent.'));

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

        Location::create(array('name' => 'East Ridge Golf Club, Binangonan, Rizal',
                                    'location' => 'Binangonan, Rizal, Phi',
                                    'description' => 'Sprawled on an exciting vista of mountain ridges, rolling hills and ravines, the 18-hole par 72 championship course spans eighty hectares of an exciting golfing challenge.'));
    
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

        Location::create(array('name' => 'Batlag Falls',
                                    'location' => 'Tanay, Rizal, Philippines',
                                    'description' => 'Further up from Daranak Falls is its sister upstream, Batlag Falls. This 10 meter high waterfalls is set on a unique rock formation.'));

        Location::create(array('name' => 'Wawa Dam',
                                    'location' => 'Rodriguez, Rizal, Philippines',
                                    'description' => 'Wawa Dam (also known as Montalban Dam) is a gravity dam constructed over the Marikina River in the municipality of Rodriguez in Rizal province, Philippines. The slightly arched dam is situated in the 360-metre (1,180 ft) high Montalban Gorge or Wawa Gorge, a water gap in the Sierra Madre Mountains, east of Manila. It was built in 1909 during the American colonial era to provide the water needs for Manila. It used to be the only source of water for Manila until Angat Dam was built and Wawa was abandoned. Due to insufficiency of water supply for Metro Manila, there was a strong clamor to reuse the dam.'));

    }

}


?>