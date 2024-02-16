
<label for="recurso">Selecciona una categoria:</label>
<select id="recurso-categoria-editar" name="categoria_id" class="form-control"></select>

<script>
  async function populateCountries() {
    const select = document.getElementById('recurso-categoria-editar');
    select.innerHTML = '';
    try {
    
      const response = await fetch('categoria/json/get');
      const categorias = await response.json();

      categorias.forEach(categoria => {
        const option = document.createElement('option');
        option.value = categoria.id;
        option.text = categoria.name;
        select.appendChild(option);
      });

      console.log(select);
    } catch (error) {
      console.error('Error fetching country data:', error);
    }
  }
  document.addEventListener('DOMContentLoaded', populateCountries);
</script>
