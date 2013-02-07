<?php

namespace Crud\Model;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;

class TabelaTable extends AbstractTableGateway {
	
	protected $table = "tabela";
	
	public function __construct(Adapter $adapter) {
		$this->adapter = $adapter;
		$this->resultSetPrototype = new ResultSet();
		$this->resultSetPrototype->setArrayObjectPrototype(new Tabela());
		$this->initialize();
	}
	
}