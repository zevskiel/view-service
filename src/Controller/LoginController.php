<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class LoginController extends AbstractController
{
    //php bin/console cache:clear   
    //symfony server:start
    //curl -X POST -d "username=testuser&password=testpass" http://localhost:8000/login
    private $entityManager;
    private $logger;

    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        $username = $data['username'];
        $password = $data['password'];

        if (empty($username) || empty($password)) {
            return new Response('Username and password are required', Response::HTTP_BAD_REQUEST);
        }

        $user = $this->entityManager->getRepository(Users::class)->findOneBy(['username' => $username, 'password' => $password]);

        if (!$user) {
            return new Response('Invalid credentials', Response::HTTP_UNAUTHORIZED);
        }

        // Assuming you have some kind of token generation or session management
        // For simplicity, we'll just return a success message
        return new Response('Login successful', Response::HTTP_OK);
    }
}