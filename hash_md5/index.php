<?php 



 ?>

<form action="" method="POST">
	<textarea name="hash" rows="1" cols="40" id="hash_input" placeholder="Collez un ou plusieurs hashs (maximum 500)"></textarea><br>
	<input id="captcha" type="text" name="captcha58" placeholder="Email requis">
	<input type="hidden" name="ahah58" value="3ce665cd94d3fe3c517967d52848e7a4">
	<input type="submit" name="crypt" value="Crypter" class="submit">
	<input type="submit" name="decrypt" value="Décrypter" class="submit">
	<br>
</form>


<script type="text/javascript">
	
$(document).ready(function() {   

  $('#decrypt').click(function() {

   var hash         = $("#hash").val(); 
   var ahah58 		= "3ce665cd94d3fe3c517967d52848e7a4";
   var Crypter      = $("#idPrest").val();


  $.post("https://md5decrypt.net/#answer", {
    tipoRede              : tipoRede,
    redePrincipalHidden   : redePrincipalHidden,
    idPrest               : idPrest},

    function(data){
      $("#respostaRede").html(data);
      alert('Responde!');
      '<?= ?>';
         } , "html");
});

});

</script>