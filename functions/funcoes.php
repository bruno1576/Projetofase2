<?php
    
    function Validarota(){
    
    
       $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
       $path = str_replace("/","",$rota['path']);
    
       $rotasValidas = array("home"=>1,"contato"=>2,"empresa"=>3,"produtos"=>4,"servicos"=>5,
       "resultado"=>6,"areaadm"=>7,"adm"=>8,"logout"=>9,"loginareaadm"=>10,"admhome"=>11,
       "admcontato"=>12,"admempresa"=>13,"admprodutos"=>14,"admservicos"=>15,"ClientesAcendente"=>16,
       "ClientesDescendente"=>17,"ListaClientes"=>17,"PaginaCliente"=>17);  
    
       $arquivo ="src/". $path . ".php";
        $arquivo2 ="admin/". $path . ".php";
       $urllimpa=str_replace("/","",$_SERVER['REQUEST_URI']); 
    
    
    
        if  ($urllimpa==""){  
            require_once('src/home.php');
        }
    
        elseif  (array_key_exists($path, $rotasValidas)){
    
            require_once($arquivo);
   
    
        }
         else{
    
            header('HTTP/1.0 404 Not Found');
            echo "<h1>404 Not Found</h1>";
            echo "The page that you have requested could not be found.";
    
            exit();
    
          }
    }    
    
    function enviacontato(){
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
            $resultado="Campos preenchidos com sucesso ";
            echo "<h3>DADOS ENVIADOS COM SUCESSO!</h3>";
    
            $cod=TRUE;    
    }
    
     if($cod==true){
        echo "<h5>Seus dados que foram enviados!:";
        echo "<h5>Nome: " . $_POST['nome'] . " <br>";
        echo "Email: " . $_POST['email'] . " <br>";
        echo "Assunto: " . $_POST['assunto'] . " <br>";
        echo "Mensagem: " . $_POST['mensagem'] . " <br>";
     }
     print $resultado;
    }
    
    
    
    
    
    
    
    
        function camposdocontato(){
    $conn=conexaoDB();
    
    $sql="select * from paginacontato ";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $conteudo=$stmt->fetch(PDO::FETCH_ASSOC);
    
     $conteudodapagina=$conteudo;
    
     return $conteudodapagina;
    
    }
    
    function consultaempresa(){
    
    $conn=conexaoDB();
    $sql="select * from pagina where titulo='Empresa'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $conteudo=$stmt->fetch(PDO::FETCH_ASSOC);
    $conteudodapagina=$conteudo;
    return $conteudodapagina;
    }
    function consultahome(){
    
    $conn=conexaoDB();
    
    $sql="select * from pagina where titulo='Pagina inicial'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $conteudo=$stmt->fetch(PDO::FETCH_ASSOC);
    
    $conteudodapagina=$conteudo;
    return $conteudodapagina;
    }
    function consultaproduto(){
    $conn=conexaoDB();
    
    $sql="select * from pagina where titulo='Produtos'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $conteudo=$stmt->fetch(PDO::FETCH_ASSOC);
    
    $conteudodapagina=$conteudo;
    return $conteudodapagina;
    }
    
    function consultaresultado(){
    
    $busca=$_POST['txtBusca'];
    $conn=conexaoDB();
    
    $sql="select * from pagina where conteudo LIKE '%".$busca."%'";
    
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    
    
    $row=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $row;
    }
    
    function consultaservicos(){
    
    $conn=conexaoDB();
    
    $sql="select * from pagina where id='4'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $conteudo=$stmt->fetch(PDO::FETCH_ASSOC);
    
    $conteudodapagina=$conteudo;
    return $conteudodapagina;
    }

  function updatehome(){
 if($_POST){
        $conteudo=$_POST['editor1'];

 
        $conn=conexaoDB();
          $smt=$conn->prepare("UPDATE pagina SET conteudo = :conteudo WHERE titulo='pagina inicial'");
          $smt->bindParam(':conteudo', $conteudo, PDO::PARAM_STR);  
    $smt->execute();

        }
   
  }

function updateempresa(){
 if($_POST){
        $conteudo=$_POST['editor1'];

 
        $conn=conexaoDB();
          $smt=$conn->prepare("UPDATE pagina SET conteudo = :conteudo WHERE titulo='empresa'");
          $smt->bindParam(':conteudo', $conteudo, PDO::PARAM_STR);  
    $smt->execute();

        }
}


function updateprodutos(){
 if($_POST){
        $conteudo=$_POST['editor1'];

 
        $conn=conexaoDB();
          $smt=$conn->prepare("UPDATE pagina SET conteudo = :conteudo WHERE titulo='produtos'");
          $smt->bindParam(':conteudo', $conteudo, PDO::PARAM_STR);  
    $smt->execute();

        }
}
function updateservicos(){
 if($_POST){
        $conteudo=$_POST['editor1'];

 
        $conn=conexaoDB();
          $smt=$conn->prepare("UPDATE pagina SET conteudo = :conteudo WHERE id = 4");
          $smt->bindParam(':conteudo', $conteudo, PDO::PARAM_STR);  
    $smt->execute();

        }
}

function Menuadm(){

       if(isset($_SESSION['logado']) and $_SESSION['logado']==1)
       {
           

           echo  " <li>"."<a href='admhome'>". "<i class='icon-star'>"."</i>". "Home adm"." </a>"."</li>";
            echo  " <li>"."<a href='admprodutos'>". "<i class='icon-star'>"."</i>". "Produtos adm"." </a>"."</li>";
             echo  " <li>"."<a href='admempresa'>". "<i class='icon-star'>"."</i>". "Empresa adm"." </a>"."</li>";
              echo  " <li>"."<a href='admservicos'>". "<i class='icon-star'>"."</i>". "serviços adm"." </a>"."</li>";
      
       }else{
           

              echo  " <li>"."<a href='areaadm'>". "<i class='icon-star'>"."</i>". "Area administrativa"." </a>"."</li>";

       }

}


    function botaologout(){
 if(isset($_SESSION['logado']) and $_SESSION['logado']==1)
       {
           

           echo  " <form class='navbar-search2' name='logout' id='logout' method='post'action='logout'>";
            echo  " <button type='submit' id='logout' name='logout' class='btn btn-success'>"."Logout"."</button>";
             echo  "</form'>";
             
      
       }
       }


     function adicionadorlistaclientesdescentendes($arraybyorden)
     {
         
         foreach ($arraybyorden as $value) {
          echo "<a href='ClientesDescendente?id=$value->id'>$value->Nome</a>";     
          echo "<br/>";    
       }

     }
          function adicionadorlistaclientesacentendes($arraybyorden)
     {
         
         foreach ($arraybyorden as $value) {
          echo "<a href='ClientesAcendente?id=$value->id'>$value->Nome</a>";     
          echo "<br/>";    
       }

     }
?>

