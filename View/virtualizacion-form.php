<?php include_once'../header.php'; ?>

<section class="container">
    <div style="height: 10px">
    </div>

    <div class="row">
        <div class="col-6 card bg-light mx-auto">
            <div style="height: 5px">
            </div>
            <div class="well well-sm">
                <form action="Controller/fcomputo.php" method="POST" class="needs-validation">
                    <div class="alert alert-info ">Solicitud para Computo en CEMCC
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre </label>
                        <input type="text" name="nombre" placeholder="nombre" class="form-control col-sm-10"
                            required="required" />
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" name="email" placeholder="user@email.com" class="form-control col-sm-10"
                            required="required" />
                    </div>
                    <div class="form-group row">
                        <label for="proyecto" class="col-sm-4 col-form-label">Nombre del proyecto</label>
                        <input type="text" name="proyecto" placeholder="nombre proyecto"
                            class="form-control col-sm-8" required="required" />
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-4 col-form-label">Descripcion del proyecto</label>
                        <input type="text" name="descripcion" placeholder="descripcion del proyecto"
                            class="form-control col-8" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="software">Indique software necesario, incluya ya versión. </label>
                        <input type="text" name="software" placeholder="Ej. Virtualbox v6.1" class="form-control"
                            required="required" />
                    </div>
                    <div class="form-group">
                        <label for="nucleos">Cantidad de nucleos </label>
                        <select id="nucleos" name="nucleos" class="form-control" required="required">
                            <option value="">Seleccionar Memoria Ram</option>
                            <option value="16 ">16</option>
                            <option value="32 ">32</option>
                            <option value="64 ">64</option>
                            <option value="+64 ">+64</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ram">Memoria RAM </label>
                        <select id="ram" name="ram" class="form-control" required="required">
                            <option value="">Seleccionar Memoria Ram</option>
                            <option value="16 GB">16 GB</option>
                            <option value="32 GB">32 GB</option>
                            <option value="64 GB">64 GB</option>
                            <option value="+64 GB">+64 GB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="disco">Almacenamiento </label>
                        <select id="disco" name="disco" class="form-control" required="required">
                            <option value="">Seleccionar Almacenamiento</option>
                            <option value="100 GB">100 GB</option>
                            <option value="256 GB">256 GB</option>
                            <option value="500 GB">500 GB</option>
                            <option value="+500 GB">+500 GB</option>
                        </select>
                    </div>
                    <div class="form-group form-check form-check-inline">
                        <label>GPU </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radiogpu" id="radio1" value="0"
                                checked>
                            <label class="form-check-label" for="gpu">No</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radiogpu" id="radio1"
                                value="1">
                            <label class="form-check-label" for="gpu">
                                Sí
                            </label>
                        </div>
                    </div>

                </div>
                <div class="form-group form-check form-check-inline ">
                    <label>MIC (Intel Xeon Phi)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radiomic" id="radio2" value="0"
                            checked>
                        <label class="form-check-label" for="mic">No</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radiomic" id="radio2" value="1">
                        <label class="form-check-label" for="mic">
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
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="politicas" required="required">
                    <label class="form-check-label" for="politicas">
                        <a href="https://bit.ly/3cPqUUN">Acepto las políticas</a>
                    </label>
                </div>
            
                <div class="form-group">
                    <input type="submit" class="btb btn-primary"> </button>
                </div>
                </form>
        </div>
    </div>
    

</section>
<?php include_once'footer.php'; ?>