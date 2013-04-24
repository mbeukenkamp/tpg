<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Game for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Game\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Helper\ViewModel;

class GameController extends AbstractActionController {
	protected $_RoundTable;
	public function indexAction() {
		return new ViewModel ( array (
				'round' => $this->getRoundTable ()->fetchAll () 
		) );
	}
	public function getRoundTable() {
		if (! $this->_RoundTable) {
			$sm = $this->getServiceLocator ();
			$this->_RoundTable = $sm->get ( 'Game\Model\RoundTable' );
		}
		return $this->_RoundTable;
	}
}
