<?php

namespace App\DataFixtures;

use App\Entity\Genere;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Genres extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $genere = new Genere();
        $genere->setCode("0");
        $genere->setName("Blues");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("1");
        $genere->setName("Classic Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("2");
        $genere->setName("Country");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("3");
        $genere->setName("Dance");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("4");
        $genere->setName("Disco");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("5");
        $genere->setName("Funk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("6");
        $genere->setName("Grunge");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("7");
        $genere->setName("Hip-Hop");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("8");
        $genere->setName("Jazz");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("9");
        $genere->setName("Metal");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("10");
        $genere->setName("New Age");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("11");
        $genere->setName("Oldies");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("12");
        $genere->setName("Other");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("13");
        $genere->setName("Pop");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("14");
        $genere->setName("R&B");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("15");
        $genere->setName("Rap");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("16");
        $genere->setName("Reggae");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("17");
        $genere->setName("Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("18");
        $genere->setName("Techno");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("19");
        $genere->setName("Industrial");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("20");
        $genere->setName("Alternative");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("21");
        $genere->setName("Ska");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("22");
        $genere->setName("Death Metal");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("23");
        $genere->setName("Pranks");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("24");
        $genere->setName("Soundtrack");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("25");
        $genere->setName("Euro-Techno");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("26");
        $genere->setName("Ambient");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("27");
        $genere->setName("Trip-Hop");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("28");
        $genere->setName("Vocal");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("29");
        $genere->setName("Jazz+Funk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("30");
        $genere->setName("Fusion");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("31");
        $genere->setName("Trance");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("32");
        $genere->setName("Classical");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("33");
        $genere->setName("Instrumental");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("34");
        $genere->setName("Acid");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("35");
        $genere->setName("House");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("36");
        $genere->setName("Game");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("37");
        $genere->setName("Sound Clip");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("38");
        $genere->setName("Gospel");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("39");
        $genere->setName("Noise");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("40");
        $genere->setName("Alternative Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("41");
        $genere->setName("Bass");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("42");
        $genere->setName("Soul");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("43");
        $genere->setName("Punk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("44");
        $genere->setName("Space");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("45");
        $genere->setName("Meditative");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("46");
        $genere->setName("Instrumental Pop");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("47");
        $genere->setName("Instrumental Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("48");
        $genere->setName("Ethnic");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("49");
        $genere->setName("Gothic");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("50");
        $genere->setName("Darkwave");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("51");
        $genere->setName("Techno-Industrial");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("52");
        $genere->setName("Electronic");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("53");
        $genere->setName("Pop-Folk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("54");
        $genere->setName("Eurodance");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("55");
        $genere->setName("Dream");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("56");
        $genere->setName("Southern Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("57");
        $genere->setName("Comedy");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("58");
        $genere->setName("Cult");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("59");
        $genere->setName("Gangsta");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("60");
        $genere->setName("Top 40");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("61");
        $genere->setName("Christian Rap");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("62");
        $genere->setName("Pop/Funk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("63");
        $genere->setName("Jungle");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("64");
        $genere->setName("Native US");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("65");
        $genere->setName("Cabaret");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("66");
        $genere->setName("New Wave");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("67");
        $genere->setName("Psychadelic");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("68");
        $genere->setName("Rave");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("69");
        $genere->setName("Showtunes");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("70");
        $genere->setName("Trailer");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("71");
        $genere->setName("Lo-Fi");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("72");
        $genere->setName("Tribal");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("73");
        $genere->setName("Acid Punk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("74");
        $genere->setName("Acid Jazz");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("75");
        $genere->setName("Polka");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("76");
        $genere->setName("Retro");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("77");
        $genere->setName("Musical");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("78");
        $genere->setName("Rock & Roll");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("79");
        $genere->setName("Hard Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("80");
        $genere->setName("Folk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("81");
        $genere->setName("Folk-Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("82");
        $genere->setName("National Folk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("83");
        $genere->setName("Swing");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("84");
        $genere->setName("Fast Fusion");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("85");
        $genere->setName("Bebob");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("86");
        $genere->setName("Latin");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("87");
        $genere->setName("Revival");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("88");
        $genere->setName("Celtic");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("89");
        $genere->setName("Bluegrass");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("90");
        $genere->setName("Avantgarde");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("91");
        $genere->setName("Gothic Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("92");
        $genere->setName("Progressive Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("93");
        $genere->setName("Psychedelic Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("94");
        $genere->setName("Symphonic Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("95");
        $genere->setName("Slow Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("96");
        $genere->setName("Big Band");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("97");
        $genere->setName("Chorus");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("98");
        $genere->setName("Easy Listening");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("99");
        $genere->setName("Acoustic");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("100");
        $genere->setName("Humour");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("101");
        $genere->setName("Speech");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("102");
        $genere->setName("Chanson");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("103");
        $genere->setName("Opera");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("104");
        $genere->setName("Chamber Music");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("105");
        $genere->setName("Sonata");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("106");
        $genere->setName("Symphony");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("107");
        $genere->setName("Booty Bass");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("108");
        $genere->setName("Primus");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("109");
        $genere->setName("Porn Groove");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("110");
        $genere->setName("Satire");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("111");
        $genere->setName("Slow Jam");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("112");
        $genere->setName("Club");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("113");
        $genere->setName("Tango");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("114");
        $genere->setName("Samba");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("115");
        $genere->setName("Folklore");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("116");
        $genere->setName("Ballad");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("117");
        $genere->setName("Power Ballad");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("118");
        $genere->setName("Rhythmic Soul");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("119");
        $genere->setName("Freestyle");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("120");
        $genere->setName("Duet");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("121");
        $genere->setName("Punk Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("122");
        $genere->setName("Drum Solo");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("123");
        $genere->setName("Acapella");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("124");
        $genere->setName("Euro-House");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("125");
        $genere->setName("Dance Hall");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("126");
        $genere->setName("Goa");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("127");
        $genere->setName("Drum & Bass");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("128");
        $genere->setName("Club-House");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("129");
        $genere->setName("Hardcore");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("130");
        $genere->setName("Terror");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("131");
        $genere->setName("Indie");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("132");
        $genere->setName("BritPop");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("133");
        $genere->setName("Negerpunk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("134");
        $genere->setName("Polsk Punk");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("135");
        $genere->setName("Beat");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("136");
        $genere->setName("Christian Gangsta Rap");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("137");
        $genere->setName("Heavy Metal");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("138");
        $genere->setName("Black Metal");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("139");
        $genere->setName("Crossover");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("140");
        $genere->setName("Contemporary Christian");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("141");
        $genere->setName("Christian Rock");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("142");
        $genere->setName("Merengue");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("143");
        $genere->setName("Salsa");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("144");
        $genere->setName("Thrash Metal");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("145");
        $genere->setName("Anime");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("146");
        $genere->setName("JPop");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("147");
        $genere->setName("Synthpop");
        $manager->persist($genere);

        $genere = new Genere();
        $genere->setCode("148");
        $genere->setName("Unknown");
        $manager->persist($genere);

        $manager->flush();
    }
}
