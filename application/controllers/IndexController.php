<?php

class IndexController implements IController {

	public function actionIndex() {
		$fc = FrontController::getInstance();

		$params=$fc->getParams();
		$view = new View();

		$categories=new Categories();
		$products=new Products(); 
		$view->categorieslist=$categories->showCategories();
		// $view->name = $params->name;
		// $view->age = $params->age;
		
		$result = $view->render('/application/views/home/index.php');
		$fc->setBody($result);
	}
}