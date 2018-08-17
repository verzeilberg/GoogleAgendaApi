<?php

namespace GoogleAgendaApi\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\Result;
use Zend\Uri\Uri;

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