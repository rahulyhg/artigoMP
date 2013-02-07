<?php

namespace Crud\Model;

class TabelaService {
	
	protected $tabelaTable;
	
	public function __construct(TabelaTable $table) {
		$this->tabelaTable = $table;
	}
	
	public function fetchAll() {
		
		$resultSet = $this->tabelaTable->select();
		return $resultSet;
		
	}
	
	public function insert($set) {
	
		$resultSet = $this->tabelaTable->insert($set);
		return $resultSet;
	
	}
	
	public function edit($set,$where) {
	
		$resultSet = $this->tabelaTable->update($set,$where);
		return $resultSet;
	
	}
	
	public function delete($where) {
	
		$resultSet = $this->tabelaTable->delete($where);
		return $resultSet;
	
	}
}