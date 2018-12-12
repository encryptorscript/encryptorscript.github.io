<?php

class Siswa_model {
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM siswa');
        return $this->db->resultSet();
    }

	public function getSiswaByID($id)
	{
		$this->db->query('SELECT * FROM siswa WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}
}