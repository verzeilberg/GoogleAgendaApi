<?php
namespace GoogleAgendaApi\Controller\Factory;

use Interop\Container\ContainerInterface;
use GoogleAgendaApi\Controller\IndexController;
use Zend\ServiceManager\Factory\FactoryInterface;
use GoogleAgendaApi\Service\googleAgendaService;
/**
 * This is the factory for AuthController. Its purpose is to instantiate the controller
 * and inject dependencies into its constructor.
 */
class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {   
        
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $googleAgendaService = new googleAgendaService();
        return new IndexController($entityManager, $googleAgendaService);
    }
}