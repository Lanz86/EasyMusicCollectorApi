<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlbumRepository")
 */
class Album
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=2048, nullable=true)
     */
    private $cover;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Artist", inversedBy="albums", cascade={"PERSIST"})
     */
    private $artists;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Track", mappedBy="album")
     */
    private $tracks;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Genere", inversedBy="albums")
     */
    private $generes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $support;

    public function __construct()
    {
        $this->artists = new ArrayCollection();
        $this->tracks = new ArrayCollection();
        $this->generes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(?string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @return Collection|Artist[]
     */
    public function getArtists(): Collection
    {
        return $this->artists;
    }

    public function addArtist(Artist $artist): self
    {
        if (!$this->artists->contains($artist)) {
            $this->artists[] = $artist;
        }

        return $this;
    }

    public function removeArtist(Artist $artist): self
    {
        if ($this->artists->contains($artist)) {
            $this->artists->removeElement($artist);
        }

        return $this;
    }

    /**
     * @return Collection|Track[]
     */
    public function getTracks(): Collection
    {
        return $this->tracks;
    }

    public function addTrack(Track $track): self
    {
        if (!$this->tracks->contains($track)) {
            $this->tracks[] = $track;
            $track->setAlbum($this);
        }

        return $this;
    }

    public function removeTrack(Track $track): self
    {
        if ($this->tracks->contains($track)) {
            $this->tracks->removeElement($track);
            // set the owning side to null (unless already changed)
            if ($track->getAlbum() === $this) {
                $track->setAlbum(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Genere[]
     */
    public function getGeneres(): Collection
    {
        return $this->generes;
    }

    public function addGenere(Genere $genere): self
    {
        if (!$this->generes->contains($genere)) {
            $this->generes[] = $genere;
        }

        return $this;
    }

    public function removeGenere(Genere $genere): self
    {
        if ($this->generes->contains($genere)) {
            $this->generes->removeElement($genere);
        }

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSupport(): ?int
    {
        return $this->support;
    }

    public function setSupport(?int $support): self
    {
        $this->support = $support;

        return $this;
    }
}
