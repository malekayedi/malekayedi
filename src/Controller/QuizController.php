<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Question;
use App\Repository\QuestionRepository;



class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'app_quiz')]
    public function index(QuestionRepository $questionRepository): Response
    {
        $questions = $questionRepository->findAll();

        return $this->render('quiz/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
