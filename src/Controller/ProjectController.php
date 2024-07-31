<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/project', name: 'project_')]
class ProjectController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'BlogController',
            'projects' => [
                [
                    'id' => 1,
                    'title' => 'Blog Post 1',
                    'description' => 'This is a great blog post number 1'
                ],
                [
                    'id' => 2,
                    'title' => 'Blog Post 2',
                    'description' => 'This is a great blog post number 2'
                ],
                [
                    'id' => 3,
                    'title' => 'Blog Post 3',
                    'description' => 'This is a great blog post number 3'
                ]
            ]
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show($id): Response
    {
        return $this->render('project/show.html.twig', [
            'controller_name' => 'BlogController',
            'project' => [
                'id' => $id,
                'title' => 'Blog Post ' . $id,
                'description' => 'This is a great blog post number ' . $id
            ]
        ]);
    }
}