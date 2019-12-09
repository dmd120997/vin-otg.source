<html lang="ua">
<head>
<meta charset="utf-8" />
<meta name="author" content="Maryna Salimonenko">
<title>Оновлення даних(таблиці)</title>
</head>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/inc/head-links.php');
include($_SERVER['DOCUMENT_ROOT'].'/born-dead/functions.php');
?>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'].'/inc/nav.php');
  ?>

    <div class="container-fluid">
      <div class="row">
        <?php
        include($_SERVER['DOCUMENT_ROOT'].'/born-dead/left-nav.php');
        ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Природний та міграційний рух населення Виноградівської ОТГ, осіб</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Оновлення таблиці
                </button>
                <button type="submit" name="Export" class="btn btn-outline-success" value="export to excel">
                Експорт
              </button>
              </div>
            </div>
          </div>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
                  <fieldset>
                      <div class="row">
                          <label class="col-md-8 control-label" for="filebutton">Виберіть файл для оновлення (Природний та міграційний рух населення.csv)</label>
                          <div class="col-10">
                            <div class="input-group">
                              <input type="file" name="file" class="custom-file-input" id="file" aria-describedby="inputGroupFileAddon04">
                                 <label class="custom-file-label" for="file">Виберіть файл</label>
                                 </div>
                          </div>
                          <div class="col-2">
                               <button style="width: 100%; height: 36px;" type="submit" id="file" name="Import" class="btn btn-warning" data-loading-text="Loading...">Завантажити</button>
                          </div>
                      </div>
                  </fieldset>
            </div>
          </div>
          <BR>
          <?php
          get_all_records();
          ?>
          </form>
        </main>
      </div>
    </div>
</body>
</html>
