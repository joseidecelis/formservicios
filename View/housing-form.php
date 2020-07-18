<?php include_once'../header.php'; ?>


<section class="container">
        <div style="height: 10px">
        </div>

        <div class="row">
            <div class="col-6 card bg-light mx-auto">
                <div style="height: 5px">
                </div>
                <form action="Controller/fhousing.php" method="POST" class="needs-validation">
                    <div class="alert alert-info ">Solicitud para Housing en CEMCC
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label d-none d-sm-block">Nombre </label>
                        <input type="text" name="nombre" placeholder="nombre" class="form-control col-sm-10"
                            required="required" />
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label d-none d-sm-block">Email</label>
                        <input type="email" name="email" placeholder="user@email.com" class="form-control col-sm-10"
                            required="required" />
                    </div>
                    <div class="form-group row">
                        <label for="proyecto" class="col-sm-4 col-form-label d-none d-sm-block">Nombre del proyecto</label>
                        <input type="text" name="proyecto" placeholder="nombre proyecto" class="form-control col-sm-8"
                            required="required" />
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-4 col-form-label d-none d-sm-block">Descripcion del proyecto</label>
                        <input type="text" name="descripcion" placeholder="descripcion del proyecto"
                            class="form-control col-8" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="altura">Altura del servidor </label>
                        <select id="altura" name="altura" class="form-control" required="required">
                            <option value="">Seleccionar altura servidor</option>
                            <!-- Asigno un string vacío para hacer funcionar el required-->
                            <option value="1">1U</option>
                            <option value="2">2U</option>
                            <option value="4">4U</option>
                            <option value="+4">+4U</option>
                        </select>
                    </div>
                    <div class="form-check"">
                            <label >¿Necesita administración o soporte técnico? </label>            
                        <div>
                            <input class="form-check-input" type="radio" name="radio1" id="radio1"value="0" checked>
                            <label class="form-check-label" for="st4">No</label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" name="radio1" id="radio2" value="1">
                            <label class="form-check-label" for="st4">
                                Sí
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="plazo">Tiempo de uso para la Máquina Virtual </label>
                        <select id="plazo" name="plazo" class="form-control" required="required">
                            <option value="">Seleccionar tiempo estimado</option>
                            <option value="6">6 meses</option>
                            <option value="12">12 meses</option>
                            <option value="18">18 meses </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btb btn-primary"> </button>
                    </div>
                </form>
            </div>
        </div>

    </section>


<?php include_once'footer.php'; ?>