<?php

class Products extends Model {
	public function showLastProducts() {
		$sql = "SELECT * FROM products WHERE status=1 ORDER BY DESC LIMIT 6";

		$res = parent::$db->query($sql);
		$arr =Array();
		$i = 0;
		while($obj = $res->fetch(PDO::FETCH_OBJ)) {
			$arr[$i]['name'] = $obj->name; 
			$arr[$i]['id'] = $obj->id;
			$i++;
		}

		return $arr;

	}
}