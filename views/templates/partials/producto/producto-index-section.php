  <section id="producto" class="bg-dark py-5">

  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card rounded-0 border-0">
          <div class="row no-gutters">
            <div class="col-lg-12">
              <div class="card-body bg-danger">
                <h2 class="card-title text-light text-uppercase text-center">productos</h2>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-12">
              <div class="card-body bg-warning">
                <h3 class="card-title text-light text-uppercase text-center">categorías</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container py-5"> 
      <div class="row">
        {% for categoria in categorias %}
        <div class="col-lg-6 mb-5 mx-auto">
          <a href="{{ base_url() }}/page/producto/{{categoria.id}}">
            <div class="card border-0 rounded-0 bg-danger">
              <img src="{{ base_url() }}/img/categoria/{{ categoria.img }}" alt="" class="card-img rounded-0">
              <div class="card-body rounded-0 bg-danger">
                <h3 class="text-light text-center text-uppercase">{{ categoria.nombre }}</h3>
              </div>
            </div>              
          </a>
        </div>
        {% endfor %}
      </div>
    </div>

  </section>