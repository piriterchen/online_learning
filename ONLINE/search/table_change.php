﻿<?php
class TableChange{
	var $input;
	var $output;
	var $table_name;
	var $search_array;
	var $conn;
	function TableChange($input,$output,$table_name,$search_array,$conn){
		$this->input=$input;
		$this->output=$output;
		$this->table_name=$table_name;
		$this->search_array=$search_array;
		$this->conn=$conn;
	}
	function ExecChange(){
		$result_array=array();
		if($num=count($this->search_array)){
			$sql="select $this->output from $this->table_name where $this->input=$this->search_array[0]";
			for($i=1;$i < $num;$i++){
				$sql.=" or $this->input=$this->search_array[$i]";
			}
			$result=mysql_query($sql,$this->conn);
			if($result){
				while($row=mysql_fetch_array($result)){
					$result_array[]=$row[$this->output];
				}
			}
			return $result_array;	
		}
		else{
			return false;
		}
	}
} 
?>