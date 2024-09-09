<?php
	require_once __DIR__ . '/../Controllers/UserController.php';
	
	class Route
	{
		public static function resolve($url,$method)
		{
			$routes = [
				'GET' => [
					'/' => 'UserController@index'	
				],
				'POST'=> [
					'/addUser/' => 'UserController@addUser'
				]
					
			];
		//	var_dump($url,$method);

			foreach ($routes[$method] as $route => $action){
				if(self::match($url,$route)){
					self::callAction($action,$url);
					return;
				}
			}
			http_response_code(404);
			echo json_encode(['error' => 'Route not found']);
		}

		private static function match($url,$route)
		{
			return preg_match("#^$route$#",$url);
		}

		private static function callAction($action,$url)
		{
			[$controller,$method] = explode('@',$action);
			call_user_func([new $controller,$method],$url);
		}
	}	

?>
