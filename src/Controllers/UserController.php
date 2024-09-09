<?php

	require_once __DIR__ . '/../Models/User.php';

	class UserController
	{
		public function index()

		{
			//header('Content-Type: application/json');	
			Database::setTable("users");	
			$db = Database::getConnection();
			$stmt = $db->query("SELECT * FROM " . Database::getTable());
			echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		public function addUser()
		{
			$data = json_decode(file_get_contents("php://input"),true);
			$user = new User($data['cpf'],$data['name'],$data['date_nasc']);
			$user->save();
			echo json_encode(['messager' => "Create user"]);
		}
	}
?>
