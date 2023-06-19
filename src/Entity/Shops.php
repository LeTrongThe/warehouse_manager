<?php

namespace App\Entity;

use App\Repository\ShopsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShopsRepository::class)]
class Shops
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nameshop = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\OneToMany(mappedBy: 'shops', targetEntity: Product::class)]
    private Collection $pro;

    public function __construct()
    {
        $this->pro = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameshop(): ?string
    {
        return $this->nameshop;
    }

    public function setNameshop(string $nameshop): static
    {
        $this->nameshop = $nameshop;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return Collection<int, product>
     */
    public function getPro(): Collection
    {
        return $this->pro;
    }

    public function addPro(Product $pro): static
    {
        if (!$this->pro->contains($pro)) {
            $this->pro->add($pro);
            $pro->setShops($this);
        }

        return $this;
    }

    public function removePro(Product $pro): static
    {
        if ($this->pro->removeElement($pro)) {
            // set the owning side to null (unless already changed)
            if ($pro->getShops() === $this) {
                $pro->setShops(null);
            }
        }

        return $this;
    }
    public function __toString() {
        return $this->nameshop;
    }
}
