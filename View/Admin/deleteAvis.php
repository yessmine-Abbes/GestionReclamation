<?PHP
	include "../../Controller/avisC.php";

	$avisC=new avisC();
	
	if (isset($_POST["id"])){
		$avisC->supprimerAvis($_POST["id"]);
		header ('Location:listAvis.php');
	}
?>