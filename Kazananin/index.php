<?php  
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>


<?php include_once './parts/header.php';?>


        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Bizimle kazan</h1>
        <p class="lead fw-normal">Kayıtların açılmasına kalan süre</p>
        <h3 id="syac"></h3>
        <p class="lead fw-normal">Programın ücretsiz bir kopyasını kazanın</p>

        </div>
        <div class="contariner">
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Yukarıda belirtilen tarihteki canlı yayını Facebook sayfamdan takip edin</li>
            <li class="list-group-item">Yukarıda belirtilen tarihteki canlı yayını Facebook sayfamdan takip edin</li>
            <li class="list-group-item">Yukarıda belirtilen tarihteki canlı yayını Facebook sayfamdan takip edin</li>
            <li class="list-group-item">Yukarıda belirtilen tarihteki canlı yayını Facebook sayfamdan takip edin</li>
            <li class="list-group-item">Yukarıda belirtilen tarihteki canlı yayını Facebook sayfamdan takip edin1</li>
            </ul>
        </div>
    </div>

        <div class="container">
        <div class="position-relative  text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form  action="index.php" method = "POST">
        <h3>Lütfen bilgilerinizi giriniz</h3>
        <div class="mb-3">
        <label for="firstname" class="form-label">Ad</label>
        <input type="text" name="firstname" class="form-control" id="firstname" value = '<?php echo $firstname ?>' >
        <div id="emailHelp" class="form-text error"><?php echo $errors['firstnameerror' ] ?></div>
        </div>

        <div class="mb-3">
        <label for="lastname" class="form-label">Soyadı</label>
        <input type="text" name="lastname" class="form-control" id="lastname" value = '<?php echo $lastname ?>' >
        <div id="emailHelp" class="form-text error"><?php echo $errors['lastnameerror' ] ?></div>
        </div>

        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email" value = '<?php echo $email ?>' >
        <div id="emailHelp" class="form-text error"><?php echo $errors['emailerror' ] ?></div>
        </div>

         <button disabled type="submit" id ="kaydet" name = "submit" class="btn btn-primary">kaydet</button>
    </form>
        </div>
    </div>

    <div class="loader-con">
         <div id="loader">
	    <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>
        <!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5">
<button disabled  id ="winner" type="button" class="btn btn-primary ">
Kazananı seçmek
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"> kazanan </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php  foreach ($users as $user) :   ?>
        <h1 class ="model-title display-3 text-center "><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname'])?> <h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

        <div id = "cards" class="row mb-5 pb-5">
        <?php  foreach ($users as $user) :   ?>

            <div class="col-sm-6">

            <div class="card my-2 bg-light">
            <div class="card-body">

            <h5 class = "card-title"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']) ?> </h5>
            <P calss ="card-text"><?php echo htmlspecialchars($user['email'])?></P>

            </div>
          </div>
         </div>
         <?php endforeach; ?>
        </div>


    <?php include './parts/footer.php';?>
