<?php
declare(strict_types=1);

use MinichanRouter\Router\Router;
use RF\Controller\Controller;

Router::get('/', [Controller::class, 'index']);
Router::get('/food', [Controller::class,'food']);
Router::get('/about', [Controller::class,'about']);
Router::get('/faq', [Controller::class,'faq']);

Router::executeRoutes();