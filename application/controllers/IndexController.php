<?php

class IndexController implements IController {

	public function actionIndex() {
		$fc = FrontController::getInstance();

		$params = $fc->getParams();
		$view = new View();

		$categories = new Categories();//create categories object
		$products = new Products(); //create products object
		$menu = new Menu();//create menu object
		$manufactures = new Manufactures();//create Manufacture object
		$view->categorieslist = $categories->showCategories();
		$view->lastProducts = $products->showLastProducts();
		$view->recomendedProducts = $products->showRecomendedProducts();
		$view->menu = $menu->showMenu();
		$view->manufactures = $manufactures->showManufactures();
		
		$result = $view->render('/application/views/home/index.php');
		$fc->setBody($result);
	}
}