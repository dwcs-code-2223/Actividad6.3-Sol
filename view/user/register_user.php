
<section class="vh-100" style="background-color: #eee;">

    <?php if (isset($dataToView["data"]) && ($dataToView["data"]->getStatus() === Util::OPERATION_OK)): ?>

        <div class="alert alert-success" role="alert" >
            El usuario se ha creado correctamente
            <a href="FrontController.php?controller=Usuario&action=list">Ir al listado de usuarios </a>
        </div>

    <?php elseif (isset($dataToView["data"]) && ($dataToView["data"]->getStatus() === Util::OPERATION_NOK)): ?>
        <div class="alert alert-danger" role="alert">
            Ha ocurrido un error y no se ha podido crear el usuario.
            <br/>

            <?php
            if (count($dataToView["data"]->getErrors()) > 0) {
                $errors = $dataToView["data"]->getErrors();
                foreach ($errors as $msg) {
                    echo "$msg <br/>";
                }
            }
            ?>
        </div>
    <?php endif; ?> 
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Regístrese</p>

                                <form class="mx-1 mx-md-4" method="post" action="FrontController.php?controller=Usuario&action=register">



                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" class="form-control" name="email" required/>
                                            <label class="form-label" for="form3Example3c">Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" class="form-control" name="pwd1" required/>
                                            <label class="form-label" for="form3Example4c">Contraseña</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4cd" class="form-control"  name="pwd2" required/>
                                            <label class="form-label" for="form3Example4cd">Repita su contraseña</label>
                                        </div>
                                    </div>


<!--                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <select id="roles" name="role" class="form-control" multiple required>
                                                <?php foreach ($roles as $rol) : ?>
                                                    <option value="<?= $rol->getId() ?>"><?php $rol->getName() ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label class="form-label" for="roles">Seleccione su Rol/es</label>
                                        </div>
                                    </div>-->


                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Registrar usuario"/>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="../files/no-picture.jpg"
                                     class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>