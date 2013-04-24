<?php

namespace Game\Model;
 
use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\AbstractTableGateway;

class RoundTable extends AbstractTableGateway
{
	protected $table = 'h_rounds';
			
	public function __construct (Adapter $adapter)
		{
			$this->adapter = $adapter;
		}
	
		public function fetchAll ()
		{
			$resultSet = $this->select(function  ($select)
			{
				$select->order('id ASC');
			});
			$entities = array();
			foreach ($resultSet as $row) {
				$entity = new Entity\Round();
				$entity->setAuto_id($row->id)
				->setId_game($row->id_game)
				->setId_role($row->id_role)
				->setId_round($row->id_round)
				->setId_product($row->id_product)
				->setReceiving_delay($row->receiving_delay)
				->setShipping_delay($row->shipping_delay)
				->setIn_stock($row->in_stock)
				->setBacklog($row->backlog)
				->setOrdered($row->ordered);
				$entities[] = $entity;
			}
	
			return $entities;
		}
	
		public function getRound ($id)
		{
			$row = $this->select(array(
					'id' => (int) $id
			))->current();
			if (! $row)
				return false;
	
			$Round = new Entity\Round(array(
					'auto_id' => $row->auto_id,
					'url' => $row->url,
					'status' => $row->status,
					'status_check' => $row->status_check,
					'reden' => $row->reden
			));
			return Round;
		}
	
		public function saveRound (Entity\Round $Round)
		{
			$data = array(
					'note' => $Round->getNote(),
					'created' => $Round->getCreated()
			);
	
			$id = (int) $Round->getId();
	
			if ($id == 0) {
				$data['created'] = date("Y-m-d H:i:s");
				if (! $this->insert($data))
					return false;
				return $this->getLastInsertValue();
			} elseif ($this->getRound($id)) {
				if (! $this->update($data, array(
						'id' => $id
				)))
					return false;
				return $id;
			} else
				return false;
		}
	
		public function removeRound ($id)
		{
			return $this->delete(array(
					'id' => (int) $id
			));
		}
}

