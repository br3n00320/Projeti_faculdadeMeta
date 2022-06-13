<?php 


include ('config2.php');
$nome2 = $_POST['nome'];
$email2 = $_POST['email'];
$telefone2 = $_POST[ 'telefone'];
$cpf2 = $_POST['cpf'];
$setor2 = $_POST['setor'];
$cargo2 = $_POST['cargo'];
$acesso2 = $_POST['acesso'];
$nome_login2 = $_POST['nome_login'];
$senha2 = $_POST['senha'];
$confirma_senha2 = $_POST['confirma_senha'];


$sql = ("INSERT INTO usuario (nome,email,telefone,cpf,setor,cargo,acesso,nome_login,senha,confirma_senha) VALUES ('$nome2','$email2','$telefone2','$cpf2','$setor2','$cargo2','$acesso2','$nome_login2','$senha2','$confirma_senha2')");

mysqli_query($conexao2, $sql);

mysqli_close($conexao2);

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>

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
        <form action="Cadastrarusuario.php" method="POST"> 
            <fieldset>
                <legend>   <b> CADASTRAR USUÁRIO  </b> </legend>

                <div class="inputBox"><input type ="text" name="municipio" id="municipio" class="inputUser" required >
                    <label for="municipio" class="labelInput" >Nome completo </label></div>

                <br>

                <div class="inputBox"> <input type ="text" name="gleba" id="gleba" class="inputUser" required >
                <label for="gleba" class="labelInput" >Email</label>
                </div>

                <br>

                <div class="inputBox"><input type ="text" name="entrada" id="entrada" class="inputUser" required >
                    <label for="entrada" class="labelInput" >Telefone</label></div>

           



                    <br>
                <div class="inputBox"><input type ="text" name="area" id="area" class="inputUser" required >
                        <label for="area" class="labelInput" >CPF</label></div>

                <br> 

                <div class="inputBox"><input type ="text" name="nome" id="nome" class="inputUser" required >
                    <label for="nome" class="labelInput" > Setor </label>
                    </div>
                
                <br>

                <div class="inputBox"><input type ="text"name="processo"id="processo" class="inputUser"  required >
                <label for="processo" class="labelInput"> Cargo </label></div>

                <p>Acesso</p>
                <input type="radio" id="administrador" name="administrador" value="administrador" > 
                <label for="administrador">Administrador</label>
                <input type="radio" id="usuario" name="usuario" value="usuario"> 
                <label for="usuario">Usuário</label>

                    <br><br>

                <div class="inputBox"><input type ="text"name="processo"id="processo" class="inputUser"  required >
                <label for="processo" class="labelInput"> Nome login </label></div>
                    <br>
                <div class="inputBox"><input type ="password"name="processo"id="processo" class="inputUser"  required >
                <label for="processo" class="labelInput"> Senha </label></div>
                <br>
                <div class="inputBox"><input type ="password"name="processo"id="processo" class="inputUser"  required >
                <label for="processo" class="labelInput"> Confirma Senha </label></div>
<br><br>
                <input type="submit" nome="submit" id= "submit"> 
                </fieldset>

            </form>
        </div>
</body>
</html>