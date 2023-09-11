<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $question1 = new Question();
        $question1->setQuestion("Quelle est la capitale de la France ?");
        $question1->setOptionA("Paris");
        $question1->setOptionB("Londres");
        $question1->setOptionC("Berlin");
        $question1->setCorrectAnswer(1);

        $manager->persist($question1);

        $manager->flush();
    }
}
