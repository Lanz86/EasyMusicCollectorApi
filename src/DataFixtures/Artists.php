<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Artists extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $artist = new Artist();
        $artist->setName("The Beatles");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Bob Dylan");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Elvis Presley");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Rolling Stones");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Chuck Berry");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Jimi Hendrix");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("James Brown");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Little Richard");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Aretha Franklin");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Ray Charles");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Bob Marley");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Beach Boys");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Buddy Holly");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Led Zeppelin");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Stevie Wonder");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Sam Cooke");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Muddy Waters");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Marvin Gaye");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Velvet Underground");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Bo Diddley");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Otis Redding");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("U2");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Bruce Springsteen");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Jerry Lee Lewis");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Fats Domino");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Ramones");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Prince");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Clash");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Who");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Nirvana");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Johnny Cash");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Smokey Robinson and The Miracles");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Everly Brothers");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Neil Young");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Michael Jackson");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Madonna");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Roy Orbison");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("John Lennon");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("David Bowie");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Simon & Garfunkel");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Doors");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Van Morrison");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Sly & The Family Stone");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Public Enemy");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Byrds");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Janis Joplin");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Patti Smith");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Run DMC");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Elton John");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Band");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Pink Floyd");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Queen");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Allman Brothers Band");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Howlin' Wolf");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Eric Clapton");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Dr. Dre");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Grateful Dead");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Parliament-Funkadelic");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Aerosmith");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Sex Pistols");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Metallica");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Joni Mitchell");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Tina Turner");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Phil Spector");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Kinks");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Al Green");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Cream");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Temptations");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Jackie Wilson");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Police");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Frank Zappa");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("AC/DC");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Radiohead");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Hank Williams");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Eagles");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Shirelles");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Beastie Boys");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Stooges");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Four Tops");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Elvis Costello");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Drifters");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Creedence Clearwater Revival");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Eminem");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("James Taylor");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Black Sabbath");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Tupac Shakur");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Gram Parsons");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Jay-Z");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("The Yardbirds");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Carlos Santana");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Tom Petty");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Guns N'Roses");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Booker T. & the M.G.'s");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Nine Inch Nails");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Lynyrd Skynyrd");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Diana Ross and the Supremes");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("R.E.M.");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Curtis Mayfield");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Carl Perkins");
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setName("Talking Heads");
        $manager->persist($artist);

        $manager->flush();
    }
}
