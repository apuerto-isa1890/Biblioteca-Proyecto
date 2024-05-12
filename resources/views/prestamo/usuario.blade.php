
<label for="prestamo">Selecciona un recurso:</label>
<select id="prestamo-usuario" name="usuario_id" class="form-control"></select>

<script>
  async function populateCountries() {
    const select = document.getElementById('prestamo-usuario');
    select.innerHTML = '';
    try {
    
      const response = await fetch('usuario/json/get');
      const categorias = await response.json();

      categorias.forEach(categoria => {
        const option = document.createElement('option');
        option.value = categoria.id;
        option.text = categoria.nombres + ' ' + categoria.apellidos;
        select.appendChild(option);
      });
    } catch (error) {
      console.error('Error fetching country data:', error);
    }
  }
  document.addEventListener('DOMContentLoaded', populateCountries);
</script>
