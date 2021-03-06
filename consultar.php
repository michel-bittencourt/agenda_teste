<?php
include_once("templates/header.php");

?>

<main id="main_consultar">
    <h1>Consultar</h1>
    <a class="btn_voltar" href="index.php"><i class="bi bi-backspace-fill"> </i>Voltar</a>
    <form class="caixa_pesquisar col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Pesquisar" aria-label="Search">
        <a href="#"><i class="icone_menu bi bi-search"></i></a>
    </form>

    <table class="tbl_consultar table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Celular</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result) : ?>
                <tr>
                    <td scope="row"><?= $result["id_pessoa"] ?></td>
                    <td scope="row"><?= $result["nome"] ?></td>
                    <td scope="row"><?= $result["sobrenome"] ?></td>
                    <td scope="row"><?= $result["num_cel"] ?></td>
                    <td class="actions">
                        <a href="show.php?id=<?= $result['id_pessoa'] ?>"><i class="bi bi-eye-fill"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>

<?php
include_once("templates/footer.php");
?>