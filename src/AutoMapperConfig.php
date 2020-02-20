<?php

namespace App;

use App\Entity\Album;
use App\Entity\Artist;
use AutoMapperPlus\AutoMapperPlusBundle\AutoMapperConfiguratorInterface;
use AutoMapperPlus\Configuration\AutoMapperConfigInterface;

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

        // And so on..
    }
}