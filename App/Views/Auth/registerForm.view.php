<?php /** @var Array $data */ ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-sm-6">

            <?php if ($data['error'] != "") { ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?= $data['error'] ?>
                </div>
            <?php } ?>

            <form class = "registration" name="reg" method="post" action="?c=auth&a=register" novalidate>
                <h2 class="text-center bold">Registrácia</h2>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Meno</label>
                    <input type="name" id="meno" class="form-control form-control" name="username" onkeyup="validateName()" placeholder="Meno..." required/>
                    <div id="valid"></div>
                </div>


                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Priezvisko</label>
                    <input type="name" id="priezvisko" class="form-control" name="surname" onkeyup="validateSurname()" placeholder="Priezvisko..." required/>
                    <div id="valid"></div>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">E-mail</label>
                    <input type="email" id="mail" class="form-control" name="login" onkeyup="validateEmail()" placeholder="E-mail..." required/>
                    <div id="valid"></div>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Heslo</label>
                    <input type="password" id="heslo" class="form-control" name="password" onkeyup="validatePassword()" placeholder="Heslo..." required/>
                    <div id="valid"></div>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Kontrola hesla</label>
                    <input type="password" id="hesloKontrola" class="form-control" name="confirmPassword" onkeyup="validatePasswordControl()" placeholder="Kontrola hesla..." required/>
                    <div id="valid"></div>
                </div>

                <div class="d-flex justify-content-center" id="submit-info">
                    <button type="submit" id="registrovat" class="btn btn-success validate">Registrovať</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Máš už vytvorený účet? <a href="?c=auth&a=login" class="fw-bold text-body"><u>Prihlás sa.</u></a></p>

            </form>
        </div>
    </div>
</div>