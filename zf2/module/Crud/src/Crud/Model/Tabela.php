<?php

namespace Crud\Model;

class Tabela {
	public $id;
	public $nome;
	public $coluna1;
	public $coluna2;
	public $coluna3;
	
	public function exchangeArray($data) {
		$this->id = (isset($data["id"]) ? $data["id"] : null);
		$this->nome = (isset($data["nome"]) ? $data["nome"] : null);
		$this->coluna1 = (isset($data["coluna1"]) ? $data["coluna1"] : null);
		$this->coluna2 = (isset($data["coluna2"]) ? $data["coluna2"] : null);
		$this->coluna3 = (isset($data["coluna3"]) ? $data["coluna3"] : null);
	}
	
}