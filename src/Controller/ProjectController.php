<?php

namespace App\Controller;

use App\Entity\Projects;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class ProjectController extends AbstractController
{
    //php bin/console cache:clear   
    //symfony server:start
    //curl http://localhost:8000/projects

    #[Route('/projects', name: 'get_projects', methods: ['GET'])]
    public function getProjects(ManagerRegistry $doctrine): Response
    {
        $projects = $doctrine->getRepository(Projects::class)->findAll();
        return $this->json($projects);
    }
}
