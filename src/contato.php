<?php
if($_POST){
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
}
if(empty($nome) or empty($nome)or empty($assunto)or empty($mensagem)){
$class=("alert alert-error");
$resultado="preencha todos os campos para enviar a mensagem ";
  $cod=FALSE;

}else{
    $resultado="Campos preenchidos com sucesso!";
    echo "<h1>DADOS ENVIADOS COM SUCESSO!</h1>";

    $cod=TRUE;


}
?>


<div class="span10"> <div class="well"> 
                            <?php 
 
 if($cod==true){
     echo "<h5>Seus dados que foram enviados!:";
 echo "<h5>Nome: " . $_POST['nome'] . " <br>";
echo "Email: " . $_POST['email'] . " <br>";
echo "Assunto: " . $_POST['assunto'] . " <br>";
echo "Mensagem: " . $_POST['mensagem'] . " <br>";
 }
?>
    
    <h1> Contato </h1> 
 

<div class="row">
  <div class="span12">


      <form class="form-horizontal" action='' method="POST" >
          <div id="legend">
              <h1></h1>
          </div>
          <div class="">
             
       
          </div>
          <div class="control-group">
              <label class="control-label" for="nome">Nome:</label>
              <div class="controls">
                  <input type="text" id="nome" name="nome" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="email">E-mail:</label>
              <div class="controls">
                  <input type="text" id="email" name="email" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="assunto">Assunto:</label>
              <div class="controls">
                  <input type="text" id="assunto" name="assunto" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="mensagem">Mensagem:</label>
              <div class="controls">
                  <textarea rows="5" name="mensagem"></textarea>
              </div>
          </div>
          <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                  <button>Enviar Mensagem</button>

              </div>
          </div>
      </form>
  </div>
</div>

<hr />	
 </div> 
 </div>




