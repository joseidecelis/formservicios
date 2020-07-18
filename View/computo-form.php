<?php include_once'../header.php'; ?>

<section class="container">
    <div style="height: 10px">
    </div>
    
    <div class="row">
        <div class="col-6 card bg-light mx-auto">
            <div style="height: 5px">
            </div>
            <form action="Controller/formvt2.php" method="POST" class="needs-validation">
                <div class="alert alert-info ">Solicitud para máquina virtual en CEMCC                        
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
                    <input type="text" name="proyecto" placeholder="nombre proyecto" class="form-control col-sm-8"
                        required="required" />
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-4 col-form-label">Descripcion del proyecto</label>
                    <input type="text" name="descripcion" placeholder="descripcion del proyecto"
                        class="form-control col-8" required="required" />
                </div>
                <div class="form-group">
                    <label for="os">Sistema operativo para la máquina virtual </label>
                    <select id="os" name="os" class="form-control" required="required">
                        <option value="">Seleccionar tiempo estimado</option> <!-- Asigno un string vacío para hacer funcionar el required-->
                        <option value="Linux">Linux (Debian/CentOS/Fedora/...)</option>
                        <option value="Windows">MS Windows (windows 8/10)</option>
                        <option value="FreeBSD">FreeBSD/OpenBSD/NetBSD</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ram">Memoria RAM </label>
                    <select id="ram" name="ram" class="form-control" required="required">
                        <option value="">Seleccionar Memoria Ram</option>
                        <option value="1 GB">1 GB</option>
                        <option value="2 GB">2 GB</option>
                        <option value="8 GB">8 GB</option>
                        <option value="16 GB">16 GB</option>
                        <option value="+16 GB">+16 GB</option>
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