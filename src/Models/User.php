<?php

require_once __DIR__ . '/../config/Database.php';

class User
{
	private  string $CPF;
	private  string $name;
	private  string $date_nasc;
	private  string $table;
	public function save()
	{
		try {
            		$conn = Database::getConnection();
            		$stmt = $conn->prepare("INSERT INTO " . getenv('DB_TABLE')  . " (cpf, name, data_nasc) VALUES (:cpf,:name,:date_nasc);");
            		$stmt->bindParam(':cpf', $this->CPF);
         	        $stmt->bindParam(':name', $this->name);
          		$stmt->bindParam(':date_nasc', $this->date_nasc);
	    		$stmt->execute();

        	} catch (PDOException $e) {
            		echo "Error: " . $e->getMessage();
        	} 
	}
	public function __construct($cpf,$name,$date_n)
	{
			$this->CPF = $cpf;
			$this->name = $name;
			$this->date_nasc = $date_n;
	}
}

?>
