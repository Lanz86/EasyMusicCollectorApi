<?php

namespace App\DataFixtures;

use App\Entity\Album;
use App\Repository\ArtistRepository;
use App\Repository\GenereRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Albums extends Fixture implements DependentFixtureInterface
{

    private $_allArtists;
    private $_allGenres;

    public function __construct(ArtistRepository $artistRepository, GenereRepository $genereRepository)
    {
        $this->_allArtists = $artistRepository->findAll();
        $this->_allGenres = $genereRepository->findAll();
    }

    public function load(ObjectManager $manager)
    {
        for ($ix = 0; $ix < 10; $ix++) {
            $album = new Album();
            $album->setName("Test Album ".$ix);
            $album->setType(1);
            $album->setSupport(2);
            $album->setYear(1986 + $ix);
            $manager->persist($album);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            Artists::class,
            Genres::class,
        );
    }
}
