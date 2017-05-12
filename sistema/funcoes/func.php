<?php
	$dbhost   = "localhost";   #Nome do host
	$db       = "farmacia";   #Nome do banco de dados
	$user     = "root"; #Nome do usuário
	$password = "";   #Senha do usuário

	mysql_connect($dbhost,$user,$password) or die("Não foi possível a conexão com o servidor!");
	mysql_select_db("$db") or die("Não foi possível selecionar o banco de dados!");
	
	if(isset($_POST['acao'])){
		$acao = $_POST['acao'];
	}else{
		$acao = 'listarItens';
	}
	
	$arr;
	
	if($acao == 'listarUtimosItens'){
		$sql = "SELECT * FROM `tab_pro` order by `pro_id` DESC LIMIT 3";
		
		$query = mysql_query($sql);
		$linhas = "";
		
		while ($rec = mysql_fetch_assoc($query)){
			$linha = '<tr>';
            $linha .= '<td>'.$rec['pro_id'].'</td>';
            $linha .= '<td>'.$rec['pro_nom'].'</td>';
            $linha .= '<td>R$ '.number_format($rec['pro_val'], 2, ',', '.').'</td>';
            $linha .= '<td>'.utf8_encode($rec['pro_tip']).'</td>';
			$linha .='</tr>';
			
			$linhas = $linhas.$linha;
		}
		$arr['table'] = $linhas;
	}
	else if($acao == 'listarItens'){
		
		$sql = "SELECT * FROM `tab_pro` order by pro_tip";
		
		$query = mysql_query($sql);
		$linhas = "";
		
		while ($rec = mysql_fetch_assoc($query)){
			$linha = '<tr>';
            $linha .= '<td>'.$rec['pro_id'].'</td>';
            $linha .= '<td>'.$rec['pro_nom'].'</td>';
            $linha .= '<td>R$ '.number_format($rec['pro_val'], 2, ',', '.').'</td>';
            $linha .= '<td> '.$rec['pro_vol'].'</td>';
            $linha .= '<td>'.utf8_encode($rec['pro_tip']).'</td>';
			$linha .='</tr>';
			
			$linhas = $linhas.$linha;
		}
		$arr['table'] = $linhas;
	}
	else if($acao == 'login'){
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$sql = 'SELECT * FROM `tab_usr` WHERE `usr_ema` = "'.$email.'" AND `usr_sen` = "'.$senha.'" ';
		
		$result = mysql_query($sql);
		
		if(mysql_num_rows($result)){
			session_start();
			
			$row = mysql_fetch_assoc($result);
			$_SESSION['usuario'] = $row['usr_nom'];
			$_SESSION['senha'] = $row['usr_sen'];
			$_SESSION['email'] = $row['usr_ema'];
			$_SESSION['cod'] = $row['usr_id'];
			
			$arr['status'] = 'OK';
		}else{
			$arr['status'] = 'ERRO';
		}
	}
	else if($acao == 'sair'){
		session_destroy();
	}
	else if($acao == 'atualizarUsuario'){
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		
		$sql = " UPDATE `tab_usr` SET `usr_nom`= '".$nome."',`usr_sen`='".$senha."',`usr_ema`='".$email."' WHERE `usr_id` = ".$id;

		$result = mysql_query($sql);
		
		if($result){
			$arr['status'] = 'OK';
			$_SESSION['usuario'] = $nome;
			$_SESSION['senha'] = $senha;
			$_SESSION['email'] = $email;
		}else{
			$arr['status'] = 'ERRO';
		}
	}
	else if($acao == 'adicionarItem'){
		
		$nome = $_POST['nome'];
		$valor = $_POST['valor'];
		$volume = $_POST['volume'];
		$tipo = $_POST['tipo'];
		
		$sql = " INSERT INTO `tab_pro`( `pro_nom`, `pro_val`, `pro_tip`, `pro_vol`) VALUES ('".$nome."',".$valor.",'".$tipo."','".$volume."')";

		$result = mysql_query($sql);
		
		if($result){
			$arr['status'] = 'OK';
		}else{
			$arr['status'] = 'ERRO';
		}
	}
	
	echo json_encode($arr);
	
?>