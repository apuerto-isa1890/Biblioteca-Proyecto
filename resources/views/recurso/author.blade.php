
<label for="recurso">Selecciona un author:</label>
<select id="recurso-author" name="author_id" class="form-control"></select>

<script>
  async function populateCountries() {
    const select = document.getElementById('recurso-author');
    select.innerHTML = '';
    try {
    
      const response = await fetch('author/json/get');
      const autores = await response.json();

      autores.forEach(author => {
        const option = document.createElement('option');
        option.value = author.id;
        option.text = author.nombres + author.apellidos;
        select.appendChild(option);
      });

      console.log(select);
    } catch (error) {
      console.error('Error fetching country data:', error);
    }
  }
  document.addEventListener('DOMContentLoaded', populateCountries);
</script>
