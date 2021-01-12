  <section id="cotiza" class="py-5">
    <div class="container py-5">

      <div class="row">

        <div class="col-md-10 col-lg-12 mx-auto">

          <div class="card rounded-0 border-0">

            <div class="card-header rounded-0 bg-danger">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="text-white text-uppercase">Cotiza con Nosotros</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <h4 class="text-white text-uppercase">Nuestro erquipo atenderá tu solicitud.</h4>
                </div>
              </div>
            </div>

            <div class="card-body rounded-0 bg-dark">
              <form action="{{ base_url() }}/cotiza" method="POST">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" class="form-control rounded-0 flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="nombre" id="inputName" placeholder="nombre completo" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control rounded-0 flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="email" id="inputEmail" placeholder="correo electrónico" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" class="form-control rounded-0 flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="telefono" id="inputEstado" placeholder="teléfono" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" class="form-control rounded-0 flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="empresa" id="inputEmpresa" placeholder="empresa/compañía" required>
                  </div>
                  <div class="form-group col-lg-12">
                    <textarea rows="5" class="form-control rounded-0 flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="mensaje" id="inputCotizacion" placeholder="mensaje" required></textarea>
                  </div>
                  <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-danger rounded-0 mx-auto btn-block" style="background-color:rgba(200,30,35,1);">COTIZAR</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="card-footer rounded-0 border-0 bg-danger">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="text-light">HORARIO DE ATENCION:</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <h4 class="text-light">L-V 8:30 am - 5:30 pm</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <h4 class="text-light">S 8:30 am - 1:00 pm</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <a href="{{socialNetworks.whatsapp}}"><h4 class="text-light">Telefono: +52 (81)13 57 89 95</h4></a>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
      
    </div>
  </section>