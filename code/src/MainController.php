<?php

namespace Doc;

class MainController
{
  public function indexAction()
  {
    require_once __DIR__ . '/../templates/index.html';
  }
}
