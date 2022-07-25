<?php 


include ('config2.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST[ 'telefone'];
$cpf = $_POST['cpf'];
$setor = $_POST['setor'];
$cargo = $_POST['cargo'];
$acesso = $_POST['acesso'];
$nome_login = $_POST['nome_login'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];


$sql1 = ("INSERT INTO usuario (nome,email,telefone,cpf,setor,cargo,acesso,nome_login,senha,confirma_senha) VALUES ('$nome','$email','$telefone','$cpf','$setor','$cargo','$acesso','$nome_login','$senha','$confirma_senha')");

mysqli_query ($conexao2, $sql1);

mysqli_close ($conexao2);

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

                <div class="inputBox"><input type ="text" name="nome_completo" id="nome_completo" class="inputUser" required >
                    <label for="nome" class="labelInput" >Nome completo </label></div>

                <br>

                <div class="inputBox"> <input type ="text" name="email" id="email" class="inputUser" required >
                <label for="email" class="labelInput" >Email</label>
                </div>

                <br>

                <div class="inputBox"><input type ="text" name="telefone" id="telefone" class="inputUser" required >
                    <label for="telefone" class="labelInput" >Telefone </label></div>

           



                    <br>
                <div class="inputBox"><input type ="text" name="cpf" id="cpf" class="inputUser" required >
                        <label for="cpf" class="labelInput" >CPF</label></div>

                <br> 

                <div class="inputBox"><input type ="text" name="setor" id="setor" class="inputUser" required >
                    <label for="setor" class="labelInput" > Setor </label>
                    </div>
                
                <br>

                <div class="inputBox"><input type ="text"name="cargo" id="cargo" class="inputUser"  required >
                <label for="cargo" class="labelInput"> Cargo </label></div>

                <p>Acesso</p>
                <input type="radio" id="acesso" name="acesso" value="administrador" > 
                <label for="acesso">Administrador</label>
                <input type="radio" id="acesso" name="acesso" value="usuario"> 
                <label for="acesso">Usuário</label>

                    <br><br>

                <div class="inputBox"><input type ="text"name="nome_login"id="nome_login" class="inputUser"  required >
                <label for="nome_login" class="labelInput"> Nome login </label></div>
                    <br>
                <div class="inputBox"><input type ="password" name="senha" id="senha" class="inputUser"  required >
                <label for="senha" class="labelInput"> Senha </label></div>
                <br>
                <div class="inputBox"><input type ="password"name="confirma_senha"id="confirma_senha" class="inputUser"  required >
                <label for="confirma_senha" class="labelInput"> Confirma Senha </label></div>
<br><br>
                <input type="submit" nome="submit" id= "submit"> 
                </fieldset>

            </form>
        </div>
</body>
</html>