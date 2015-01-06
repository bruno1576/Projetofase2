<div class="span10"> <div class="well"> <h1> Listagem de clientes </h1> 
 
 <hr /> <p>


<?php
    session_start();

    include("classes/Cliente.php");
      include("classes/Clientesarray.php");

if($_GET)
{
    $idcliente=$_GET['id'];
   
}




$cliente1=new Cliente(1,"chris",27,"masculino",123456789,"maua",45133703);
$cliente2=new Cliente(2,"Maria",28,"feminino",987654321,"maua",26298381);
$cliente3=new Cliente(3,"Ruroune kenshi",22,"masculino",324145122,"santos",233431223);
$cliente4=new Cliente(4,"Ryugi",23,"masculino",3123123,"santo andre",4545454232);
$cliente5=new Cliente(5,"joao",25,"masculino",412314123,"sao paulo",1232314132);
$cliente6=new Cliente(6,"kenshi",22,"masculino",924145122,"brasilia",433431223);
$cliente7=new Cliente(7,"samanouske",22,"masculino",324145122,"santos",233431223);
$cliente8=new Cliente(8,"Legolas",32,"masculino",434231231312,"são caetano",933431223);
$cliente9=new Cliente(9,"Renji",16,"masculino",824145122,"maua",633431223);
$cliente10=new Cliente(10,"Giovanni",42,"masculino",324145122,"sao bernado",833431223);

$Clientesarray = new Clientesarray ();
$Clientesarray->add($cliente1);
$Clientesarray->add($cliente2);
$Clientesarray->add($cliente3);
$Clientesarray->add($cliente4);
$Clientesarray->add($cliente5);
$Clientesarray->add($cliente6);
$Clientesarray->add($cliente7);
$Clientesarray->add($cliente8);
$Clientesarray->add($cliente9);
$Clientesarray->add($cliente10);

$_SESSION['clientes'] = $Clientesarray->items;

$arraybyorden=$_SESSION['clientes'];

arsort($arraybyorden);

adicionadorlistaclientesacentendes($arraybyorden);
   
       if($_GET){
if($_GET['id'] != NULL){
    $id_cliente = $_GET['id'];
    foreach($arraybyorden as $cliente){
        if($id_cliente == $cliente->id){
            echo "Nome :".$cliente->Nome;
            echo "<br/>";
            echo "Idade :".$cliente->idade;
              echo "<br/>";
            echo "Sexo :".$cliente->sexo;
              echo "<br/>";
            echo "cpf :".$cliente->cpf;
              echo "<br/>";
            echo "endereço :".$cliente->endereco;
              echo "<br/>";
            echo "telefone:".$cliente->telefone;
        }
    }
}
       }

?>
    
       </p> <hr />	
    <form method="post" action="ClientesAcendente">
    
        <input type="submit" name="troca1" value="ascendente"  />
    
</form>

    <form method="post" action="ClientesDescendente">
    
        <input type="submit" name="troca" value="descendente" />
      
</form>
    <form method="post" action="ListaClientes">
    
        <input type="submit" name="troca" value="Limpar" />
      
</form>
 </div> 
 </div>
