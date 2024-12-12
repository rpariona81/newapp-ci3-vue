<?php

class My_Session
{
	//https://culttt.com/2013/02/04/how-to-save-php-sessions-to-a-database
	/**
	 * Db Object
	 */
	private $ci;
	private $db;

	public function __construct()
	{
		// Instantiate new Database object
		$this->ci = &get_instance(); // Esto para acceder a la instancia que carga la librería
		$this->ci->load->model('Session_eloquent');
		$this->ci->db;

		// Set handler to overide SESSION
		session_set_save_handler(
			[$this, "_open"],
			[$this, "_close"],
			[$this, "_read"],
			[$this, "_write"],
			[$this, "_destroy"],
			[$this, "_gc"]
		);

		// Start the session
		session_start();
	}

	/**
	 * Open
	 */
	public function _open()
	{
		// If successful
		if ($this->ci->db) {
			// Return True
			Session_Eloquent::insertSession(session_id());
			return true;
		}
		// Return False
		return false;
	}

	/**
	 * Close
	 */
	public function _close()
	{
		// Close the database connection
		// If successful
		if ($this->ci->db->close()) {
			// Return True
			return true;
		}
		// Return False
		return false;
	}

	/**
	 * Read
	 */
	public function _read($id)
	{
		// Set query
		$result = Session_Eloquent::where('id', '=', $id)->first();
		if ($result) {
			return $result->data;
		} else {
			return '';
		}
	}

	/**
	 * Write
	 */
	public function _write($id, $data = NULL)
	{
		// Create time stamp
		$access = time();

		// Set query
		$model = Session_Eloquent::where('id', '=', $id)->first();

		// If successful
		if ($model) {
			$model->data = $_SESSION;
			$model->timestamp = $access;
			$model->save();
			// Return True
			return true;
		}

		// Return False
		return false;
	}

	/**
	 * Destroy
	 */
	public function _destroy($id)
	{
		// Set query
		$this->db->query("DELETE FROM sessions WHERE id = :id");

		// Bind data
		$this->db->bind(":id", $id);

		// Attempt execution
		// If successful
		if ($this->db->execute()) {
			// Return True
			return true;
		}

		// Return False
		return false;
	}

	/**
	 * Garbage Collection
	 */
	public function _gc($max)
	{
		// Calculate what is to be deemed old
		$old = time() - $max;

		// Set query
		$this->db->query("DELETE * FROM sessions WHERE access < :old");

		// Bind data
		$this->db->bind(":old", $old);

		// Attempt execution
		if ($this->db->execute()) {
			// Return True
			return true;
		}

		// Return False
		return false;
	}
}
