{% extends 'templates/globals/extra.php' %}

{% block extrahead %}
<link href="{{ base_url() }}/css/productos.css" rel="stylesheet" >
{% endblock %}

{% block content %}

{% include 'templates/partials/navbar-section.php' %}
<!-- Page Content -->
<section id="productos" class="bg-light">
  <div class="container mb-2">

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-6">
      <img class="img-fluid" src="{{ base_url() }}/img/productos/{{producto.getImg()}}" alt="">
    </div>

    <div class="col-md-6">
      <h3 class="text-danger my-3 text-capitalize">{{ producto.getNombre() }}</h3>
      <p class="text-dark">{{ producto.getDescripcion() }}</p>

      <ul class="list-group">
        {% for subproducto in subproductos %}
        <div class="row">
          <div class="col-lg-3 mt-2">
            <a href="" class="list-group-item list-group-item-action bg-transparent text-dark border-0">
              <img class="img-fluid" src="{{ base_url() }}/img/productos/subproducto.jpg" alt="">
            </a>
          </div>
          <div class="col-lg-9">
            <a href="" class="list-group-item list-group-item-action bg-transparent text-light border-0">
            {{subproducto.getNombre()}}
            </a>
          </div>
        </div>
        {% endfor %}
      </ul>
    </div>

  </div>

  <!-- Related Projects Row -->
  <h3 class="my-5 text-danger">Otros Productos</h3>

  <div class="row">
    {% for producto in productos %}
    <div class="col-md-3 col-sm-6 mb-4">
      <div class="card border-0 rounded-0 bg-transparent">
        <div class="card-header border-0 rounded-0 text-center bg-transparent">
          <h5 class="card-title text-dark">{{ producto.getNombre() }}</h5>
        </div>
        <a href="{{ base_url() }}/page/producto/{{producto.id}}">
          <img src="{{ base_url() }}/img/productos/{{producto.img}}" class="card-img border-0 shadow-lg border-0 rounded-0">
        </a>
      </div>
    </div>
    {% endfor %}
  </div>

  </div>
</section>
<footer class="bg-black small text-center text-light">
    <div class="container">Derechos Reservados &copy; Ferrumsa 2020</div>
</footer>
{% endblock %}