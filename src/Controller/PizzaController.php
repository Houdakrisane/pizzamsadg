<?php

namespace App\Controller;

use App\Entity\Pizza;
use App\Form\PizzaType;
use App\Repository\PizzaRepository;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pizza')]
class PizzaController extends AbstractController
{
    #[Route('/', name: 'app_pizza_index', methods: ['GET'])]
    public function index(PizzaRepository $pizzaRepository): Response
    {
        return $this->render('pizza/index.html.twig', [
            'pizzas' => $pizzaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_pizza_new', methods: ['GET', 'POST'])]
    public function new(Request $request,SluggerInterface $slugger, PizzaRepository $pizzaRepository): Response
    {
        $pizza = new Pizza();
        $form = $this->createForm(PizzaType::class, $pizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imagePizza = $form->get('imagepizza')->getData();
            if ($imagePizza) {

                $originalFilename = pathinfo($imagePizza->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imagePizza->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imagePizza->move(
                        $this->getParameter('imagepizza_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $pizza->setImagePizza($newFilename);



            $pizzaRepository->save($pizza, true);

            return $this->redirectToRoute('app_pizza_index', [], Response::HTTP_SEE_OTHER);
        }
    }
        return $this->renderForm('pizza/new.html.twig', [
            'pizza' => $pizza,
            'form' => $form,
        ]);
    }
    
    #[Route('/{id}', name: 'app_pizza_show', methods: ['GET'])]
    public function show(Pizza $pizza): Response
    {
        return $this->render('pizza/show.html.twig', [
            'pizza' => $pizza,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pizza_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pizza $pizza, PizzaRepository $pizzaRepository): Response
    {
        $form = $this->createForm(PizzaType::class, $pizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pizzaRepository->save($pizza, true);

            return $this->redirectToRoute('app_pizza_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pizza/edit.html.twig', [
            'pizza' => $pizza,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pizza_delete', methods: ['POST'])]
    public function delete(Request $request, Pizza $pizza, PizzaRepository $pizzaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pizza->getId(), $request->request->get('_token'))) {
            $pizzaRepository->remove($pizza, true);
        }

        return $this->redirectToRoute('app_pizza_index', [], Response::HTTP_SEE_OTHER);
    }
}
