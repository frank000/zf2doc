<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Doctrine\ORM\EntityManager;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	/**
	 * 
	 * @var EntityManager
	 */
	protected $em;
	
	
	
    /**
	 * @return the $em
	 */
	protected function getEm() {
		if(null === $this->em)
		{
			$this->setEm($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
		}
		return $this->em;
	}

	/**
	 * @param \Doctrine\ORM\EntityManager $em
	 */
	protected function setEm(EntityManager $em) {
		$this->em = $em;
		return $this;
	}

	public function indexAction()
    {
    	$repo = $this->getEm()->getRepository('Application\Entity\Teste');
    	$all = $repo->findAll();
    	
    	
    	$arr = array('a1'=>$all);
        return new ViewModel($arr);
    }
}
