<?php


use AutoMapperPlus\AutoMapperPlusBundle\AutoMapperConfiguratorInterface;
use AutoMapperPlus\Configuration\AutoMapperConfigInterface;

class AutoMapperConfig implements AutoMapperConfiguratorInterface
{
    public function configure(AutoMapperConfigInterface $config): void
    {
        $config->registerMapping(\App\Entity\Album::class, \App\DTOs\AlbumOutputDTO::class)
            ->forMember('name', function (\App\Entity\Album $source) {
                return $source->getName();
            });

        // And so on..
    }
}