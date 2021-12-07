<?php
        //Inclue as classes

        include '../dao/Conexao.class.php';
        include '../model/Usuario.class.php';
        include '../dao/UsuarioDAO.class.php';

        //Instancia os objetos

        $conexao = new Conexao();
        $usuario = new Usuario();
        $cadastro = new UsuarioDAO();

        //recebe os valores do HTML

        $usuario->setModelo($_POST['modelo']);
        $usuario->setFabricante($_POST['fabricante']);
        $usuario->setCor($_POST['cor']);
        $usuario->setPlaca($_POST['placa']);
        $usuario->setAno($_POST['ano']);
        

        //Cadastrar os dados do Usuario

        $cadastro->cadastrar($conexao->conexaoPDO(), $usuario);

        //Mensagem de Cadastro realizado com sucesso
        echo '<h1 align="center">Cadastro Realizado Com Sucesso</h1>';




?>