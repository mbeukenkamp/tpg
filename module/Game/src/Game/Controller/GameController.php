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
// use Zend\View\Helper\ViewModel;
use Zend\View\Model\ViewModel;

class GameController extends AbstractActionController {
	protected $_RoundTable;
	public function indexAction() {
		return new ViewModel ( array (
				// 'round' => $this->getRoundTable ()->fetchAll ()
				'round' => array (
						'id' => '1',
						'id_game' => '1',
						'id_role' => '1',
						'id_round' => '1',
						'id_product' => '1',
						'receiving_delay' => '4',
						'shipping_delay' => '4',
						'in_stock' => '12',
						'backlog' => '1',
						'ordered' => '3' 
				) 
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
