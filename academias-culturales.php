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
    <!-- Academias culturales start -->
    <section class="section_part">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_tittle text-center">
                        <h2 class="text-center text-50">Academias Culturales</h2>
                    </div>
                    <p>Las academias están dirigidas al aprendizaje autónomo del alumno, siendo imprescindible el desarrollo de técnicas y habilidades motrices que permitan la consecución de las competencias, presentaciones, y exposiciones, así mismo crea hábitos saludables, como compañerismo, sentido de pertenencia y un afán de superación ante cualquier problema adverso.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h2>Artes Plásticas</h2>
                    <img src="img/artes-plasticas.jpg" alt="" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <h4 class="mt-3">Horarios</h4>
                    <p>- Primaria
                        Martes y Jueves de 2:30pm a 3:30pm
                        - Secundaria y Preparatoria
                        Martes y Jueves de 3:30pm a 4:30pm</p>
                </div>
                <div class="col-md-6">
                    <h2>Coro</h2>
                    <img src="img/coro.jpg" alt="" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <h4 class="mt-3">Horarios</h4>
                    <p>- Primaria
                        Martes y Jueves de 2:30pm a 3:30pm
                        - Secundaria y Preparatoria
                        Martes y Jueves de 3:30pm a 4:30pm</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h2>Teatro</h2>
                    <img src="img/teatro.jpg" alt="" class="img-fluid">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <h4 class="mt-3">Horarios</h4>
                    <p>- Primaria
                        Martes y Jueves de 2:30pm a 3:30pm
                        - Secundaria y Preparatoria
                        Martes y Jueves de 3:30pm a 4:30pm</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Academias culturales end-->
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