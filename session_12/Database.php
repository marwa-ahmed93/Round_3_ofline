<?php

interface Database{

public function select($column ,  $table ,$condation ,$key ,$operators , $value);
public function selectAll($column , $table);
public function insert();
public function update();
public function delete();



}