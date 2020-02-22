<?php
require_once 'database.php';

class addresbook
{
	private $db;
  public $id;
  public $name;
  public $email;  
  public $address;
  public $phone;

	public function __CONSTRUCT()
	{
		$this->db = new Database();
	}

	public function index_data()
	{
    $result = $this->db->query(sprintf(
      <<<SQL
				SELECT * FROM addresbook
				SQL
    ));
    return $result;
	}

	public function search($id)
	{
		$search = $this->db->query("SELECT * FROM addresbook WHERE id = '".$id."'");
		$record = new stdClass();
		foreach ($search['rows'][0] as $key => $value)
		{
			$record->$key = $value;
		}
		return $record;
	}

	public function delete($id)
	{
		$delete = $this->db->query("DELETE FROM addresbook WHERE id = '".$id."'");
		print_r($delete);
	}

	public function update($data)
	{
		$update = $this->db->query("UPDATE addresbook SET    name = '".$data->name."', email = '".$data->email."', address = '".$data->address."', phone = '".$data->phone."' WHERE  id = '".$data->id."'");
	}

	public function create(addresbook $data)
	{
		$create = $this->db->query("INSERT INTO addresbook(name, email, address, phone) VALUES ('".$data->name."', '".$data->email."', '".$data->address."', '".$data->phone."')");
	}
}