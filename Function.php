<?php

	function valemail($Email,$Confemail)
	{
		if ($Email == $Confemail) {
			return true;
		}else{
			die ("<script>alert('Emails Diferentes');
			history.back()
			</script>");

			return false;
		}
	}

	function valsenha($senha,$confsenha)
	{
		if ($senha == $confsenha) {
			return true;
		}else{
			die ("<script>alert('Senhas Diferentes');
			history.back()
			</script>");

			return false;
		}
	}
	
?>	