    <div class="container mt-5">
        <div class="rounded border border-secondary">
            <table class="table table-striped table-hover table-bordered table-rounded">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Animais</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row"><?php echo $tutor["id"] ?></th>
                        <td><?php echo $tutor["tutorNome"] ?></td>
                        <td><?php echo $tutor["tutorTelefone"] ?></td>
                        <td><?php echo $tutor["tutorEndereco"] ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-paw"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdowm-item btn btn-outline-success mb-1 container-fluid" role="button" href="#"><?php echo $tutor["animalTutor"] ?></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
<div class="text-center mt-5">
    <a class="btn btn-success" href="index.php?menu=home">Voltar</a>
</div>
