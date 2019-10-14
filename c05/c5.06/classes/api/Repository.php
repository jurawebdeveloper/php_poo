<?php
final class Repository{
	private $activeRecord;
	function __construct($class){
		$this->activeRecord = $class;
	}

	function load(Criteria $criteria){
		$sql = "SELECT * FROM ". constant($this->activeRecord. '::TABLENAME');
		if($criteria){
			$expression = $criteria->dump();
			if($expression){
				$sql .= 'WHERE '.$expression;
			}
			$order = $criteria->getProperty('order');
			$limit = $criteria->getProperty('limit');
			$offset = $criteria->getProperty('offset');

			if($order){
				$sql .= ' ORDER BY '.$order;
			}
			if($limit){
				$sql .= ' LIMIT '.$limit;
			}
			if($offset){
				$sql .= ' OFFSET '.$offset;
			}
		}
		if ($conn = Transaction::get()){
			Transaction::log($sql);
			$result = $conn->Query($sql);
			$results = array();
			if($result){
				while($row = $result->fetchObject($this->activeRecord)){
					$results[]=$row;
				}
			}
			return $results;
		}else{
			throw new Exception('Não há transação ativa!!');
		}
	}
	function delete(Criteria $criteria){
		$expression = $criteris->dump();
		$sql = "DELETE FROM " .constant($this->activeRecord.'::TABLENAME');
		if($expression){
			$sql .= ' WHERE '.$expression;
		}
		if ($conn = Transaction::get()){
			Transaction::log($sql);
			$result = $conn->Query($sql);
			$results = array();
			if($result){
				while($row = $result->fetchObject($this->activeRecord)){
					$results[]=$row;
				}
			}
			return $results;
		}else{
			throw new Exception('Não há transação ativa!!');
		}
	}

	function count(Criteria $criteria){
		$expression = $criteris->dump();
		$sql = " SELECT COUNT(*) FROM " .constant($this->activeRecord.'::TABLENAME');
		if ($expression) {
			$sql .= ' WHERE ' . $expression;
		}
		if ($conn = Transaction::get()){
			Transaction::log($sql);
			$result = $conn->Query($sql);
			$results = array();
			if($result){
				while($row = $result->fetchObject($this->activeRecord)){
					$results[]=$row;
				}
			}
			return $results;
		}else{
			throw new Exception('Não há transação ativa!!');
		}

	}






}