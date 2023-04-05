<?php
$web_title = "Страница админа: Заявки";
?>

<?php include "header-admin.php" ?>
<?php include "./include/function.php" ?>

<section class="applications container">
  <div class="applications-title">
    <h2>Заявки:</h2>
    <a href="/admin">Вернуться назад</a>
  </div>
  <div class="applications-content d-flex flex-row gap-4">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Имя</th>
          <th scope="col">Номер телефона</th>
          <th scope="col">Действие</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($result_sql as $res) { ?>

          <tr>
            <td><?= $res->id; ?></td>
            <td><?= $res->name; ?></td>
            <td><?= $res->phone; ?></td>
            <td>
              <a href="?=<?= $res->id; ?>" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-primary">
                <i class="bi bi-telephone-outbound-fill"></i>
              </a>
              <a href="?=<?= $res->id; ?>" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">
                <i class="bi bi-trash3-fill"></i>
              </a>
            </td>
          </tr>

        <!-- Modal Contact -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-6" id="exampleModalLabel">Связаться с заявкой под номером: ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h3><?= $res->phone; ?></h3>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <a href="tel:<?= $res->phone; ?>" type="button" class="btn btn-primary">Связаться</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header d-flex justify-content-between gap-3">
                <h1 class="modal-title fs-6" id="exampleModalLabel">Удалить заявку под номером: <?= $res->id; ?>?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <form action="/applications?=<?= $res->id; ?>?={$id}" method="post">
                  <button type="submit" class="btn btn-danger" name="delete">Удалить</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

      </tbody>
    </table>
  </div>
</section>

<?php include "footer-admin.php" ?>