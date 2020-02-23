<?php

namespace App;

use App\DTOs\ArtistOutputDTO;
use App\DTOs\GenreInputDTO;
use App\DTOs\GenreOutputDTO;
use App\Entity\Album;
use App\Entity\Artist;
use App\Entity\Genere;
use AutoMapperPlus\AutoMapperPlusBundle\AutoMapperConfiguratorInterface;
use AutoMapperPlus\Configuration\AutoMapperConfigInterface;
use Doctrine\ORM\Mapping\Entity;

class AutoMapperConfig implements AutoMapperConfiguratorInterface
{
    public function configure(AutoMapperConfigInterface $config): void
    {
        $config->registerMapping(\App\Entity\Album::class, \App\DTOs\AlbumsPagedOutputDto::class)
        ->forMember('artists', function(Album $album) {
            foreach ($album->getArtists() as $item) {
                yield ["id" => $item->getId(), "name" => $item->getName()];
            }
        })
        ->forMember('generes', function (Album $album) {
            foreach($album->getGeneres() as $item) {
                yield ["id" => $item->getId(), "name" => $item->getName()];
            }
        });

        $config->registerMapping(\App\Entity\Album::class, \App\DTOs\AlbumOutputDTO::class)
            ->forMember('artists', function(Album $album) {
                foreach ($album->getArtists() as $item) {
                    yield ["id" => $item->getId(), "name" => $item->getName()];
                }
            })
            ->forMember('genres', function (Album $album) {
                foreach ($album->getGeneres() as $item) {
                    yield ["id" => $item->getId(), "name" => $item->getName()];
                }
            });

            $config->registerMapping(Artist::class, ArtistOutputDTO::class);
            $config->registerMapping(Genere::class, GenreOutputDTO::class);
            //$config->registerMapping(GenreInputDTO::class, Genere::class);
        // And so on..
    }
}