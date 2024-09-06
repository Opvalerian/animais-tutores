<h1>Cadastro de tutor</h1>

<!-- Formulario cad-tutor -->
<div class="form">
    <form action="../inserir/inserir-tutor.php" method="post">
        <!-- Primeira input Nome -->
        <div class="input-group">
            <i class="bi bi-person">Nome</i>
            <input type="text" name="nomeTutor" id="nomeTutor">
        </div>
        <!-- Segundo input telefone -->
        <div class="input-group">
            <i class="bi bi-telephone">Telefone</i>
            <input type="tel" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"  name="telefoneTutor" id="telefoneTutor">
        </div>
        <!-- Terceiro input endereço -->
        <div class="input-group">
            <i class="bi bi-house">Endereço</i>
            <input type="text" name="enderecoTutor" id="enderecoTutor">
        </div>
        <!-- Botão para enviar o formulario -->
        <input class="btn btn-succes" type="submit" value="Enviar">
    </form>
</div>