// -----------------------------VER LA CONTRASEÑA----------------------------------------------------------
function mostrarContraseña(idInput) {
  const input = document.getElementById(idInput);
  if (input.type === 'password') {
    input.type = 'text';
  } else {
    input.type = 'password';
  }
}

// Función para mostrar la vista previa de la imagen al seleccionar una nueva imagen
document.getElementById('input-imagen').addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
      const reader = new FileReader();

      reader.onload = function(e) {
          document.getElementById('vista-previa').src = e.target.result;
      };

      reader.readAsDataURL(file);
  }
});

// Verificar si es un celular y abrir la galería al hacer clic en un botón
function abrirGaleria() {
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      // Es un dispositivo móvil, abrir la galería
      const inputImagen = document.getElementById('input-imagen');
      inputImagen.setAttribute('accept', 'image/*');
      inputImagen.click(); // Esto abrirá la galería para seleccionar una imagen
  }
}

// Para permitir eliminar la imagen también desde el celular
document.getElementById('eliminar-imagen').addEventListener('click', function() {
  eliminarImagen();
});

// -------------evita que copien el contenido----------
document.getElementById('identificacion').addEventListener('copy', function(event) {
  event.preventDefault(); // Evita que se copie el contenido
});
