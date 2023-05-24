<?php require_once 'includes/header.php'; ?>
    <!-- Slider principal start -->
    <section class="slider_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="banner-slide">
                        <div><img src="img/1.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider principal end -->
    <!-- Contact form start -->
    <section class="section_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="row">
                        <h2 class="text-azulmarino text-40">Contáctanos <br>
                            <span class="text-azulclaro text-30">Queremos saber sobre ti</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group row">
                                    <div class="col-md-12 form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text background-verde"><i class="text-white fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre completo*" id="name" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    <div class="col-md-6 form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text background-verde"><i class="text-white fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="mail" placeholder="E-mail*" id="mail" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    <div class="col-md-6 form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text background-verde"><i class="text-white fas fa-phone-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tel" placeholder="Teléfono*" id="tel" required>
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="form-group">
                                            <textarea name="comentario" class="form-control comentario" placeholder="Comentario*" id="message" required></textarea>
                                            <div class="help-block with-errors text-danger"></div>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        </div>
                                        <p>*Campos obligatorios</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex form-group justify-content-left">
                                            <button class="btn px-5 background-azulclaro text-white" id="form-submit" type="submit">Enviar</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Contact form end -->
    <?php require_once 'includes/footer.php'; ?>