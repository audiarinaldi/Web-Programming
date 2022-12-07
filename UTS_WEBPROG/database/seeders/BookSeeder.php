<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //category 1, romance
        Book::create([
            'publisher_id'=> 1,
            'title'=> 'Twilight',
            'author' => 'Agatha',
            'year' => '2022',
            'synopsis' => 'This is a book that tell a love story that happen between human and vampire ',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 1,
            'title'=> 'It ends with us',
            'author' => 'Colleen',
            'year' => '1999',
            'synopsis' => 'a young college graduate who moves to Boston and opens her own floral business. She develops feelings for surgeon Ryle Kincaid, who is initially reluctant towards having a serious relationship with her',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 1,
            'title'=> 'The notebook',
            'author' => 'Nicholas',
            'year' => '2004',
            'synopsis' => 'This is a book that tell a love story between allie, the uptown girl and noah callhoun a farm boy lives in seabrook',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 1,
            'title'=> 'A walk to remember',
            'author' => 'Spark',
            'year' => '2000',
            'synopsis' => 'the story of an only son of a wealthy family that finds true love with the most unexpected person',
            'image' => 'image/BookCover.jpg'
        ]);
        //category 3, fiction
        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Train to Busan',
            'author' => 'Owen',
            'year' => '2018',
            'synopsis' => 'This is a book that tell a story about zombie apocalypse fenomena',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Tin Tin',
            'author' => 'BT',
            'year' => '2021',
            'synopsis' => 'This is a book that tell a story about adventure boy',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 3,
            'title'=> 'The night circus',
            'author' => 'Erin',
            'year' => '2011',
            'synopsis' => 'phantasmagorical fairy tale set near an ahistorical Victorian London in a wandering magical circus that is open only from sunset to sunrise',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 3,
            'title'=> 'Life of pi',
            'author' => 'Martel',
            'year' => '2001',
            'synopsis' => 'Piscine Molitor "Pi" Patel, an Indian boy from Pondicherry, experienced spirituality and practicality from a young age.',
            'image' => 'image/BookCover.jpg'
        ]);
        //category 2, science
        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Gorilla and the apes',
            'author' => 'Joe',
            'year' => '2010',
            'synopsis' => 'This is a book that tell a true story about friendship between gorilla and apes',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 2,
            'title'=> 'A Brief History of Time',
            'author' => 'Stephen',
            'year' => '1988',
            'synopsis' => 'Hawking writes in non-technical terms about the structure, origin, development and eventual fate of the Universe, which is the object of study of astronomy and modern physics.',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 2,
            'title'=> 'How the Mind Works',
            'author' => 'Pinker',
            'year' => '1998',
            'synopsis' => 'The author attempts to explain some of the human minds poorly understood functions and quirks in evolutionary terms.' ,
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 2,
            'title'=> 'Pale Blue Dot',
            'author' => 'Carl',
            'year' => '1994',
            'synopsis' => 'photograph of planet Earth taken on February 14, 1990, by the Voyager 1 space probe from a record distance of about 6 billion kilometers (3.7 billion miles, 40.5 AU.' ,
            'image' => 'image/BookCover.jpg'
        ]);
        // category 4, legend
        Book::create([
            'publisher_id'=> 4,
            'title'=> 'The Lightning Thief',
            'author' => 'Rick',
            'year' => '2022',
            'synopsis' => 'Percy Jackson is a good kid, but he cant seem to focus on his schoolwork or control his temper. And lately, being away at boarding school is only getting worse.' ,
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 4,
            'title'=> 'The Sea of Monsters
            ',
            'author' => 'Riordan',
            'year' => '2002',
            'synopsis' => ' The Sea of Monsters, Percy sets out to retrieve the Golden Fleece before his summer camp is destroyed,',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 4,
            'title'=> 'Darth Plagueis',
            'author' => 'James',
            'year' => '2012',
            'synopsis' => 'Darth Plagueis: one of the most brilliant Sith Lords who ever lived.',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 4,
            'title'=> 'Outbound Flight (Star Wars)',
            'author' => 'Timothy',
            'year' => '2006',
            'synopsis' => 'The Clone Wars have yet to erupt when Jedi Master Jorus C’baoth petitions the Senate for support of a singularly ambitious undertaking',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 4,
            'title'=> 'Le Morte dArthur',
            'author' => 'Thomas',
            'year' => '1998',
            'synopsis' => ' In order to tell a "complete" story of Arthur from his conception to his death, Malory compiled, rearranged, interpreted and modified',
            'image' => 'image/BookCover.jpg'
        ]);
        //category 5, fantasy
        Book::create([
            'publisher_id'=> 5,
            'title'=> 'A Wizard of Earthsea',
            'author' => 'Ursula',
            'year' => '2000',
            'synopsis' => 'Hungry for power and knowledge, Sparrowhawk tampered with long-held secrets and loosed a terrible shadow upon the world.',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 5,
            'title'=> 'A Game of Thrones',
            'author' => 'Martin',
            'year' => '1986',
            'synopsis' => 'Upon the death of Lord Jon Arryn, the principal advisor to King Robert Baratheon',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 5,
            'title'=> 'The Way of Kings',
            'author' => 'Brandon',
            'year' => '1999',
            'synopsis' => 'Roshar is a world of stone and storms',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 5,
            'title'=> 'The Dark is Rising',
            'author' => 'Susan',
            'year' => '2005',
            'synopsis' => 'Will Stanton begins to have strange and magical experiences on his 11th birthday, which is at the winter solstice',
            'image' => 'image/BookCover.jpg'
        ]);
        Book::create([
            'publisher_id'=> 5,
            'title'=> 'Watership Down',
            'author' => 'Adams',
            'year' => '1972',
            'synopsis' => 'this stirring tale of adventure, courage and survival follows a band of very special creatures on their flight from the intrusion of man and the certain destruction of their home',
            'image' => 'image/BookCover.jpg'
        ]);
    }
}
