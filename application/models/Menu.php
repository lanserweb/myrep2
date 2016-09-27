<?php

class Menu extends Model {
	public function showMenu() {
		$sql = "SELECT * FROM menu";
		$res = parent::$db->query($sql);
		if(!$res) 
			throw new Exception("Error! Can't connect to MySQL Database");
		$arr =Array();
		$i = 0;
		while($obj = $res->fetch(PDO::FETCH_OBJ)) {
			$arr[$i]['name'] = $obj->name; 
			$arr[$i]['id'] = $obj->id; 
			$arr[$i]['URIname'] = $obj->URIname; 
			$arr[$i]['image'] = $obj->image; 
			$i++;
		}

		return $arr;

	}

	

}