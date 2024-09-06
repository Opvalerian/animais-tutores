<?php

require_once "Tutor.php";

class TutorDAO
{
    public function create(Tutor $tutor)
    {
        require_once "../config.php";

        try {
            // Consulta SQL
            $query = "INSERT INTO tutores (nome, telefone, endereco) VALUES (:NOME, :TELEFONE, :ENDERECO)";

            // Preparando consulta
            $stmt = $pdo->prepare($query);

            // Negocio que o prof explicou mas eu não lembro
            $stmt->bindValue(':NOME', $tutor->getNome());
            $stmt->bindValue(':TELEFONE', $tutor->getTelefone());
            $stmt->bindValue(':ENDERECO', $tutor->getEndereco());

            // Executa o comando que eu também não sei o que faz

            $stmt->execute();

            echo "Tutor cadastrado com sucesso";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function read()
    {
        require_once '../config.php';

        try {
            // Declarar a consulta SQL
            $query = "SELECT * FROM base";
            // Executar a consulta
            $result = $pdo->query($query);
            // Retorna o resultado da consulta
            return $result;
        } catch (PDOException $e) {
            // Exibe os erros caso aconteçam
            echo $e->getMessage();
        }
    }

    public function delete($id)
    {
        require_once "../config.php";

        try {
            // Consulta
            $query = "DELETE FROM base WHERE id = :ID";

            $stmt = $pdo->prepare($query);

            $stmt->bindvalue(":ID", $id);

            $stmt->execute();

            echo "Tutor excluido";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}