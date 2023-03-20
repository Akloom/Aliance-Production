<?php
// Название страницы
$web_title = "Страница Админа: Заявки"
?>
<?php
include "./include/function.php";
?>

<?php include "./layout/header.php" ?>

<section class="applications container">
  <h1>Заявки</h1>
  <a href="/admin">Вернуться назад</a>
  <div class="applications-content">
    <div class="applications-card">
      <h3>Таблица заявок на консультацию:</h3>
      <table class="applications-card__table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Номер</th>
            <!-- <th>Действие</th> -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result_sql as $res) { ?>
            <tr>
              <td><?= $res->id; ?></td>
              <td><?= $res->name; ?></td>
              <td><?= $res->phone; ?></td>
              <!-- <td>
              <a href="" class="applications-card__table-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="applications-card__table-icon">
                  <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
              </a>
              <form action="" method="post">
                <button class="applications-card__table-btn bg-danger" type="submit" name="delete" style="width: 100px">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="applications-card__table-icon">
                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                  </svg>
                </button>
              </form>
            </td> -->
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="applications-card">
      <h3>Таблица заявок на сотрудничество:</h3>
      <table class="applications-card__table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Номер</th>
            <!-- <th>Действие</th> -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result_sql2 as $res2) { ?>
            <tr>
              <td><?= $res2->id; ?></td>
              <td><?= $res2->name; ?></td>
              <td><?= $res2->phone; ?></td>
              <!-- <td>
              <a href="" class="applications-card__table-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="applications-card__table-icon">
                  <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
              </a>
              <form action="" method="post">
                <button class="applications-card__table-btn bg-danger" type="submit" name="delete" style="width: 100px">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="applications-card__table-icon">
                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                  </svg>
                </button>
              </form>
            </td> -->
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?php include "./layout/footer.php" ?>