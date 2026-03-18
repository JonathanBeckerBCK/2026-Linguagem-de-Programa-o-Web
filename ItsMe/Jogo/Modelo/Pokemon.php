<?php

class Pokemon
{
    private $img;
    private $palpite;

    /**
     * Get the value of palpite
     */
    public function getPalpite()
    {
        return $this->palpite;
    }

    /**
     * Set the value of palpite
     */
    public function setPalpite($palpite): self
    {
        $this->palpite = $palpite;

        return $this;
    }
}