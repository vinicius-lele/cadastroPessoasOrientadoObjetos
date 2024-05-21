<?php
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Criteria.php';
require_once 'classes/api/Repository.php';
require_once 'classes/api/Record.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/model/Produto.php';

try{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('chinelo/collection.txt'));
    
    $criteria = new Criteria;
    $criteria->add('descricao', 'like', '%WEBC%');
    $criteria->add('descricao', 'like', '%FILMAD%', 'or');
    
    $repository = new Repository('Produto');
    $repository->delete($criteria);
    
    Transaction::close();
}
catch(Exception $e){
    print $e->getMessage();
    Transaction::rollback();
}
