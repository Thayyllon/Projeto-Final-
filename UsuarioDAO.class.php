<?php

    class UsuarioDAO{
        
        public function cadastrar($conn, $usuario){

            $modelo = $usuario->getModelo();
            $fabricante = $usuario->getFabricante();
            $cor = $usuario->getCor();
            $placa = $usuario->getPlaca();
            $ano = $usuario->getAno();
            

       

        try{
                //guardar o comando SQL
            $stmt = $conn->prepare("INSERT INTO Automoveis (modelo,fabricante,cor,placa,ano) VALUES (?,?,?,?,?)");

                //enviar os dados para o banco
            $stmt->bindParam(1, $modelo);
            $stmt->bindParam(2, $fabricante);
            $stmt->bindParam(3, $cor);
            $stmt->bindParam(4, $placa);
            $stmt->bindParam(5, $ano);

                //executar o comando SQL
            $stmt->execute();
        }
        catch(PDOException $e){
            //Mensagem de erro caso o cadastro não seja concluido 
            echo 'Erro:' . $e->getMessage();
        }
    }
}





?>