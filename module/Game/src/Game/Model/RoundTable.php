<?php

namespace Game\Model;
 
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
				$select->order('?????url ASC');
			});
			$entities = array();
			foreach ($resultSet as $row) {
				$entity = new Entity\Round();
				$entity->setAuto_id($row->auto_id)
				->setUrl($row->url)
				->setStatus($row->status)
				->setReden($row->reden);
				$entities[] = $entity;
			}
	
			return $entities;
		}
	
		public function getRounde ($id)
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

