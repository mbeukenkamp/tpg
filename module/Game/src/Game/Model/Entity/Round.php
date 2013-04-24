<?php
// module Game\src\Game\Model\Entity
namespace Game\Model\Entity;

class Round {
	protected $id;
	protected $id_game;
	protected $id_role;
	protected $id_round;
	protected $id_product;
	protected $id_receiving_delay;
	protected $id_shipping_delay;
	protected $id_backlog;
	protected $id_ordered;
	/**
	 *
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 *
	 * @return the $id_game
	 */
	public function getId_game() {
		return $this->id_game;
	}
	
	/**
	 *
	 * @return the $id_role
	 */
	public function getId_role() {
		return $this->id_role;
	}
	
	/**
	 *
	 * @return the $id_round
	 */
	public function getId_round() {
		return $this->id_round;
	}
	
	/**
	 *
	 * @return the $id_product
	 */
	public function getId_product() {
		return $this->id_product;
	}
	
	/**
	 *
	 * @return the $id_receiving_delay
	 */
	public function getId_receiving_delay() {
		return $this->id_receiving_delay;
	}
	
	/**
	 *
	 * @return the $id_shipping_delay
	 */
	public function getId_shipping_delay() {
		return $this->id_shipping_delay;
	}
	
	/**
	 *
	 * @return the $id_backlog
	 */
	public function getId_backlog() {
		return $this->id_backlog;
	}
	
	/**
	 *
	 * @return the $id_ordered
	 */
	public function getId_ordered() {
		return $this->id_ordered;
	}
	
	/**
	 *
	 * @param field_type $id        	
	 */
	public function setId($id) {
		$this->id = $id;
	}
	
	/**
	 *
	 * @param field_type $id_game        	
	 */
	public function setId_game($id_game) {
		$this->id_game = $id_game;
	}
	
	/**
	 *
	 * @param field_type $id_role        	
	 */
	public function setId_role($id_role) {
		$this->id_role = $id_role;
	}
	
	/**
	 *
	 * @param field_type $id_round        	
	 */
	public function setId_round($id_round) {
		$this->id_round = $id_round;
	}
	
	/**
	 *
	 * @param field_type $id_product        	
	 */
	public function setId_product($id_product) {
		$this->id_product = $id_product;
	}
	
	/**
	 *
	 * @param field_type $id_receiving_delay        	
	 */
	public function setId_receiving_delay($id_receiving_delay) {
		$this->id_receiving_delay = $id_receiving_delay;
	}
	
	/**
	 *
	 * @param field_type $id_shipping_delay        	
	 */
	public function setId_shipping_delay($id_shipping_delay) {
		$this->id_shipping_delay = $id_shipping_delay;
	}
	
	/**
	 *
	 * @param field_type $id_backlog        	
	 */
	public function setId_backlog($id_backlog) {
		$this->id_backlog = $id_backlog;
	}
	
	/**
	 *
	 * @param field_type $id_ordered        	
	 */
	public function setId_ordered($id_ordered) {
		$this->id_ordered = $id_ordered;
	}
}

?>