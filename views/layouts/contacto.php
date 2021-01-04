{% extends 'templates/globals/main.php' %}

{% block content %}

  <!-- Navigation -->
  {% include 'templates/partials/general/navbar-section.php' %}
  <!-- End Navigation -->

  {% include 'templates/partials/contacto/contacto-section.php' %}

  {% include 'templates/partials/contacto/cotiza-section.php' %}

  <!-- Footer -->
  {% include 'templates/partials/general/footer-section.php' %}
  <!-- Termina Footer -->

  <!-- Feet -->
  {% include 'templates/partials/general/feet-section.php' %}
  <!-- Termina Feet -->

{% endblock %}