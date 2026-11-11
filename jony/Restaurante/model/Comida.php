<?php 

require_once __DIR__ . "/Tipo.php";
require_once __DIR__ . "/Intensidade.php";

class Comida
{
    private ?int $id;
    private ?string $nome;
    private ?Intensidade $intensidade;
    private ?Tipo $tipo;
    

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

   

    /**
     * Get the value of intensidade
     */
    public function getIntensidade(): ?Intensidade
    {
        return $this->intensidade;
    }

    /**
     * Set the value of intensidade
     */
    public function setIntensidade(?Intensidade $intensidade): self
    {
        $this->intensidade = $intensidade;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): ?Tipo
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(?Tipo $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}