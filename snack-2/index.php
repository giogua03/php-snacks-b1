<?php
$email='';
$eta='';
$nome='';
	if (isset($_GET['email'])) {
		$email = $_GET['email'];
		$nec = strpos($email, '@');
		if ($nec && strpos($email, '.', $nec)) {
			$message = 'concesso';
        } else {
            $message = 'Negato';
        }
    };
    
    if (isset($_GET['nome'])) {
		$nome = $_GET['nome'];
		if (strlen($nome) > 3) {
			$message_nome = 'concesso';
        } else {
            $message_nome = 'Negato';
        }
    };
    
    if (isset($_GET['eta'])) {
		$eta = $_GET['eta'];
		if (is_numeric($eta)) {
			$message_eta = 'consesso';
		} else {
            $message_eta = 'Negato';
        }
    };
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>snak 2</title>
</head>
<body>
	<form action="" method="get">
		<label for="email">Email:</label>
		<input type="text" name="email" id="email" value="<?= $email ?>">

        <label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" value="<?= $nome ?>">
        
        <label for="eta">Eta:</label>
		<input type="text" name="eta" id="eta" value="<?= $eta ?>">
		
        <button>Accedi</button>
        
    
        <h3><?= $message ?></h3>
        <h3><?= $message_nome ?></h3>
        <h3><?= $message_eta ?></h3>
        
	</form>
   
</body>
</html>
