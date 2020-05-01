<?php
// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
  public function show(Environment $twig)
  {
    $content = $twig->render('Home/show.html.twig');

    return new Response($content);
  }
}