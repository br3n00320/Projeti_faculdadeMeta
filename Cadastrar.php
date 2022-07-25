<?php 


include ('config.php');
$gleba = $_POST['gleba'];
$municipio = $_POST['municipio'];
$nome = $_POST[ 'nome'];
$processo = $_POST['processo'];
$entrada = $_POST['entrada'];
$area = $_POST['area'];
$vistoria = $_POST['vistoria'];
$caixa = $_POST['caixa'];
$estatus = $_POST['estatus'];
$observacoes = $_POST['observacoes'];


$sql = ("INSERT INTO cadastro (gleba, municipio, nome, processo, entrada, area, vistoria, caixa, estatus, observacoes) VALUES ('$nome', '$municipio', '$nome', '$processo', '$entrada', '$area','$vistoria', '$caixa', '$estatus', '$observacoes')");

mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>

        <style>
            body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 25px;
            width: 35%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput
        
        {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        
        #submit{
            
            background-color: dodgerblue;
            border: none; 
            padding: 12px; 
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px; 
        }
        #submit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
            
         </style>


</head>
<body>
    
    <div class="box"> 
        <form action="Cadastrar.php" method="POST"> 
            <fieldset>
                <legend>   <b> FORMULÁRIO DE PROTOCOLO  </b> </legend>
                <br>

                <div class="inputBox"> <input type ="text" name="gleba" id="1" class="inputUser" required >
                <label for="gleba" class="labelInput" >Gleba</label>
                </div>

                <br> 

                <div class="inputBox"><input type ="text" name="municipio" id="2" class="inputUser" required >
                    <label for="municipio" class="labelInput" >Município </label></div>

                <br> 

                <div class="inputBox"><input type ="text" name="nome" id="3" class="inputUser" required >
                    <label for="nome" class="labelInput" > Nome completo </label>
                    </div>
                
                <br>

                <div class="inputBox"><input type ="text"name="processo"id="4" class="inputUser"  required >
                <label for="processo" class="labelInput">Nº Processo </label></div>

                <br>

                <div class="inputBox"><input type ="text" name="entrada" id="5" class="inputUser" required >
                    <label for="entrada" class="labelInput" >Entrada</label></div>

                <br>
                
                <div class="inputBox"><input type ="text" name="area" id="6" class="inputUser" required >
                    <label for="area" class="labelInput" >Área (ha / m^2)</label></div>

                

                <p>Vistoria</p>
                <input type="radio" id="7" name="vistoria" value="sim" required> 
                <label for="vistoria">Sim</label>
                <input type="radio" id="8" name="vistoria" value="Não" required> 
                <label for="vistoria">Não</label>

                <br> <br>

                <div class="inputBox"><input type ="text" name="caixa" id="9" class="inputUser" required >
                    <label for="caixa"class="labelInput" >Caixa</label></div>

                <br>

                <div class="inputBox"><input type ="text" name="estatus" id="10" class="inputUser" required >
                    <label for="estatus" class="labelInput" >Estatus</label></div>

                <br>

                <div class="inputBox"><input type ="text" name="observacoes" id="11" class="inputUser" required >
                    <label for="observacoes" class="labelInput" >observações</label>
                </div>

                <br>
                
           <input type="submit" nome="submit" id= "submit"> 

            </fieldset>

        </form>
    </div>
</body>
</html>