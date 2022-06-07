<?php 




if (isset($_POST['submit']))


// {
//     print_r ($_post['gleba']);
//     print_r ($_post['municipio']);
//     print_r ($_post['nome']);


//  }



{
     include_once ('config.php');

 $gleba = $_POST['gleba'];
 $municipio = $_POST['municipio'];
 $nome = $_POST[ 'nome'];
 $processo = $_POST['processo'];
 $entrada = $_POST ['entrada'];
 $area = $_POST ['area'];
 $vistoria = $_POST['vistoria'];
 $caixa = $_POST['caixa'];
 $estatus = $_POST['estatus'];
 $observacoes = $_POST ['observacoes'];

$result = mysqli_query ($conexao, "INSERT INTO cadastro (gleba, municipio, nome, processo, entrada, area, vistoria, caixa, estatus, observacoes) VALUES ('$gleba', '$municipio', '$nome', '$processo', '$entrada', '$area', '$vistoria', '$caixa', '$estatus', '$observacoes')");
 }
?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>

        <style>
            
        .box{
               position: absolute;
               top:50%;
               left:50%;      
               transform: translate(-50%,-50%);
         }
             
         /* .inputuser{
            
         }       */
        
            
         </style>


</head>
<body>
    
    <div class="box"> 
        <form action="Cadastrar.php" method="POST"> 
            <fieldset>
                <legend>   <b> FORMULÁRIO DE PROTOCOLO  </b> </legend>
                <br>

                <div class="inputFor"> <input type ="text" name="gleba" id="gleba" class="inputUser" required >
                <label for="gleba" class="labelInput" >Gleba</label>
                </div>

                <br> 

                <div class="inputFor"><input type ="text" name="municipio" id="municipio" class="inputUser" required >
                    <label for="municipio" class="labelInput" >Município </label></div>

                <br> 

                <div class="inputFor"><input type ="text" name="nome" id="nome" class="inputUser" required >
                    <label for="nome" class="labelInput" > Nome completo </label>
                    </div>
                
                <br>

                <div class="inputFor"><input type ="text"name="processo"id="processo" class="inputUser"  required >
                <label for="processo" class="labelInput">Nº Processo </label></div>

                <br>

                <div class="inputFor"><input type ="text" name="entrada" id="entrada" class="inputUser" required >
                    <label for="entrada" class="labelInput" >Entrada</label></div>

                <br>
                
                <div class="inputFor"><input type ="text" name="area" id="area" class="inputUser" required >
                    <label for="area" class="labelInput" >Área (ha / m^2)</label></div>

                

                <p>Vistoria</p>
                <input type="radio" id="vistoria" name="vistoria" value="sim" required> 
                <label for="vistoria">Sim</label>
                <input type="radio" id="vistoria" name="vistoria" value="Não" required> 
                <label for="vistoria">Não</label>

                <br> <br>

                <div class="inputFor"><input type ="text" name="caixa" id="caixa" class="inputUser" required >
                    <label for="caixa"class="labelInput" >Caixa</label></div>

                <br>

                <div class="inputFor"><input type ="text" name="estatus" id="estatus" class="inputUser" required >
                    <label for="estatus" class="labelInput" >Estatus</label></div>

                <br>

                <div class="inputFor"><input type ="text" name="observacoes" id="observacoes" class="inputUser" required >
                    <label for="observacoes" class="labelInput" >observações</label>
                </div>

                <br>
                
           <input type="submit" nome="submit" id= "submit"> 

            </fieldset>

        </form>
    </div>
</body>
</html>