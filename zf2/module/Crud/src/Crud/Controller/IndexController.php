<?php

namespace Crud\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $tabelaService = $this->getServiceLocator()->get("Crud\Model\TabelaService");
        $dados = $tabelaService->fetchAll();
    	
        foreach ($dados as $dado) {
        
        	echo $dado->id." ".$dado->coluna1." ".$dado->coluna2." ".$dado->coluna3."<br/>";
        }
        exit;
        //die(count($dados)." registros listados");
    	//return new ViewModel(array("dados"=>$dados));
    }
    
    public function insertAction()
    {
    	$tabelaService = $this->getServiceLocator()->get("Crud\Model\TabelaService");
    	$dados = $tabelaService->insert(array("coluna1"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
    										  "coluna2"=>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. 
    													  Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. 
    													  Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et 
    													  netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. 
    													  Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque 
    													  at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. 
    													  Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit 
    													  feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia 
    													  nulla nisl eget sapien.",
    										  "coluna3"=>"12345678"));
    
    	die("$dados registros inseridos");  	 
    	//return new ViewModel(array("dados"=>$dados));
    	
    }
    
    public function editAction()
    {
    	$tabelaService = $this->getServiceLocator()->get("Crud\Model\TabelaService");
    	$dados = $tabelaService->edit(array("coluna1"=>"teste teste teste teste teste teste teste teste teste teste teste teste",
    										  "coluna2"=>"teste teste teste teste teste teste teste teste teste teste teste teste.
    													  Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
    													  Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et
    													  netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede.
    													  teste teste teste teste teste teste. Suspendisse dui purus, scelerisque
    													  at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.
    													  Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit
    													  feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia
    													  nulla nisl eget sapien.",
    										  "coluna3"=>"1234567890"),"id=4");
    
    	die("$dados registros editados");  	 
    }
    
    public function deleteAction()
    {
    	$tabelaService = $this->getServiceLocator()->get("Crud\Model\TabelaService");
    	$dados = $tabelaService->delete("id=5");
    
    	die("$dados registros excluídos");
    }
}
