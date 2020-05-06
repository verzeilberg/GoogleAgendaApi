<?php

namespace GoogleAgendaApi\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\Authentication\Result;
use Laminas\Uri\Uri;

/**
 * This controller is responsible for letting the user to log in and log out.
 */
class IndexController extends AbstractActionController
{
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    private $entityManager;
    private $googleAgendaService;
    
    /**
     * Constructor.
     */
    public function __construct($entityManager, $googleAgendaService)
    {
        $this->entityManager = $entityManager;
        $this->googleAgendaService = $googleAgendaService;
    }
    
    /**
     * Authenticates user given email address and password credentials.     
     */
    public function indexAction()
    {

        $test = $this->googleAgendaService->getGoogleAgenda();
        
        return new ViewModel([
        ]);
    }
    
}