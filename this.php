<?php

class Student{
	private $std_name;

	function getData($sname){
		$this->std_name = $sname;
	}

	function showData(){
		echo $this->std_name."<br>";
	}
}

$std = new Student();
$std->getData("Amit");
$std->showData();

$std2 = new Student();
$std2->getData("Anup");
$std2->showData();

$std3 = new Student();
$std3->getData("Pawan");
$std3->showData();
?>