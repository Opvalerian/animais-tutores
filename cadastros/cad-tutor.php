<h1>Cadastro de tutor</h1>

<!-- Formulario cad-tutor -->
<div class="form">
    <form action="index.php?menu=inserir-tutor" method="post">
        <!-- Primeira input Nome -->
        <div class="input-group">
            <i class="bi bi-person">Nome</i>
            <input type="text" name="nomeTutor" id="nomeTutor">
        </div>
        <!-- Segundo input telefone -->
        <div class="input-group">
            <i class="bi bi-telephone">Telefone</i>
            <input type="text" name="telefoneTutor" id="telefoneTutor">
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

