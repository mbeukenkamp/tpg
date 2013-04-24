<?php
// module Game\src\Game\Model\Entity
namespace Game\Model\Entity;

class Round {
	protected $id;
	protected $id_game;
	protected $id_role;
	protected $id_round;
	protected $id_product;
	protected $receiving_delay;
	protected $shipping_delay;
	protected $in_stock;
	protected $backlog;
	protected $ordered;
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $id_game
	 */
	public function getId_game() {
		return $this->id_game;
	}

	/**
	 * @return the $id_role
	 */
	public function getId_role() {
		return $this->id_role;
	}

	/**
	 * @return the $id_round
	 */
	public function getId_round() {
		return $this->id_round;
	}

	/**
	 * @return the $id_product
	 */
	public function getId_product() {
		return $this->id_product;
	}

	/**
	 * @return the $receiving_delay
	 */
	public function getReceiving_delay() {
		return $this->receiving_delay;
	}

	/**
	 * @return the $shipping_delay
	 */
	public function getShipping_delay() {
		return $this->shipping_delay;
	}

	/**
	 * @return the $in_stock
	 */
	public function getIn_stock() {
		return $this->in_stock;
	}

	/**
	 * @return the $backlog
	 */
	public function getBacklog() {
		return $this->backlog;
	}

	/**
	 * @return the $ordered
	 */
	public function getOrdered() {
		return $this->ordered;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $id_game
	 */
	public function setId_game($id_game) {
		$this->id_game = $id_game;
	}

	/**
	 * @param field_type $id_role
	 */
	public function setId_role($id_role) {
		$this->id_role = $id_role;
	}

	/**
	 * @param field_type $id_round
	 */
	public function setId_round($id_round) {
		$this->id_round = $id_round;
	}

	/**
	 * @param field_type $id_product
	 */
	public function setId_product($id_product) {
		$this->id_product = $id_product;
	}

	/**
	 * @param field_type $receiving_delay
	 */
	public function setReceiving_delay($receiving_delay) {
		$this->receiving_delay = $receiving_delay;
	}

	/**
	 * @param field_type $shipping_delay
	 */
	public function setShipping_delay($shipping_delay) {
		$this->shipping_delay = $shipping_delay;
	}

	/**
	 * @param field_type $in_stock
	 */
	public function setIn_stock($in_stock) {
		$this->in_stock = $in_stock;
	}

	/**
	 * @param field_type $backlog
	 */
	public function setBacklog($backlog) {
		$this->backlog = $backlog;
	}

	/**
	 * @param field_type $ordered
	 */
	public function setOrdered($ordered) {
		$this->ordered = $ordered;
	}

	
}
?>