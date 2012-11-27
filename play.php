<?php
umask(0000);

require_once __DIR__.'/app/bootstrap.php.cache';
require_once __DIR__.'/app/AppKernel.php';

use Symfony\Component\HttpFoundation\Request;

/*if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array(
        '127.0.0.1',
        '::1',
    ))
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';
*/
$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
/*$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();*/
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request',Request::createFromGlobals());

use Gost\BookBundle\Entity\Book;

$event = new Book();
$event->setName('Введите имя');
$event->setEmail('Email');
$event->setTexts('Введите сообщения');

$em = $container->get('doctrine')->getEntityManager();
$em->persist($event);
$em->flush();

/*$templating = $container->get('templating');

echo $templating->render('BookBundle:Default:index.html.twig',array(
    'name' => 'Kcyxa',
    'count'=> 5,
));*/
//$kernel-> handle(Request::createFromGlobals())->send();
