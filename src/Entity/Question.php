<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Question = null;

    #[ORM\Column(length: 255)]
    private ?string $Option_A = null;

    #[ORM\Column(length: 255)]
    private ?string $Option_B = null;

    #[ORM\Column(length: 255)]
    private ?string $Option_C = null;

    #[ORM\Column]
    private ?int $Réponse = null;

       /**
     * @ORM\Column(type="integer")
     */
    private $correctAnswer;

    #[ORM\Column]
    private ?int $number = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->Question;
    }

    public function setQuestion(string $Question): static
    {
        $this->Question = $Question;

        return $this;
    }

    public function getOptionA(): ?string
    {
        return $this->Option_A;
    }

    public function setOptionA(string $Option_A): static
    {
        $this->Option_A = $Option_A;

        return $this;
    }

    public function getOptionB(): ?string
    {
        return $this->Option_B;
    }

    public function setOptionB(string $Option_B): static
    {
        $this->Option_B = $Option_B;

        return $this;
    }

    public function getOptionC(): ?string
    {
        return $this->Option_C;
    }

    public function setOptionC(string $Option_C): static
    {
        $this->Option_C = $Option_C;

        return $this;
    }

    public function getRéponse(): ?int
    {
        return $this->Réponse;
    }

    public function setRéponse(int $Réponse): static
    {
        $this->Réponse = $Réponse;

        return $this;
    }
    public function getCorrectAnswer(): ?int
    {
        return $this->correctAnswer;
    }

    public function setCorrectAnswer(int $correctAnswer): self
    {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): static
    {
        $this->number = $number;

        return $this;
    }
}
