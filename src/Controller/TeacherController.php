<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{ 
    #[Route('/showTeacher', name: 'app_teacher')]
    public function showTeacher($name)
    {
        return $this->render('teacher/index.html.twig', [
            'name' => $name,
        ]);
    }

    public function goToIndex()
    {
        return $this->redirectToRoute('student_index');
    }
}
