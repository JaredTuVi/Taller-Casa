<?php

$nombre_heladeria = "Heladería Monsterr";
$nombre_administrador = "Ronny Jared Tupue Villota";
$ciudad = "Pasto";


$edad_usuario = 18;


$dia_actual = "martes"; 


$sabor_disponible = true; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $nombre_heladeria; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    
    <!-- Información principal -->
    <header>
        <h1><?php echo $nombre_heladeria; ?></h1>
        <h2>Los Mejores Helados De La Ciudad</h2>
        <p>Administrador: <strong><?php echo $nombre_administrador; ?></strong> | Ubicada en: <strong><?php echo $ciudad; ?></strong></p>
        <img src="img/Imagen Logo.jpeg" alt="Fotografía logo">
    </header>

    <main>
    
        <!-- 💬 RETO 2 y RETO 3 integrados en el diseño -->
        <section class="Seccion">
            <h2>¡Avisos Especiales!</h2>
            <p>
                <?php 
                // Reto 2: Mensaje según la edad
                if ($edad_usuario >= 18) {
                    echo "¡Bienvenido! Conoce nuestras promociones especiales.";
                } else {
                    echo "¡Bienvenido! Descubre nuestros deliciosos sabores.";
                }
                ?>
            </p>
            <p>
                <?php 
                // Reto 3: Promoción según el día
                if (strtolower($dia_actual) === "martes") {
                    echo "🎉 ¡Hoy tenemos 2x1 en conos!";
                } else {
                    echo "🍦 Hoy puedes disfrutar de nuestros sabores habituales.";
                }
                ?>
            </p>
        </section>

        <section class="Seccion" id="Descripcion">    
            <h2>Endulza Tu Dia</h2>
            <p>
              Somos una heladería artesanal en <strong><?php echo $ciudad; ?></strong>, un lugar donde los sabores frescos y la calidad se unen para crear momentos mágicos. Queremos ser ese espacio cálido y acogedor donde las sonrisas se comparten y los recuerdos más dulces se construyen, cucharada a cucharada.
            </p>
            <p>
              Desde los clásicos favoritos hasta nuestras creaciones más originales, cada helado cremoso está elaborado pensando en la felicidad de grandes y pequeños. Porque para nosotros, la familia es el ingrediente secreto de todas nuestras recetas.
            </p>
        </section>
        
        <!-- Sabores / Productos -->
        <section class="Seccion">
            <h1>Dulce Abrazo De Arequipe</h1>
            <img src="img/arequipe.jpeg" alt="Imagen Arequipe" width="350">
            <h2>Descripción: Un cremoso helado de vainilla artesanal con generosos remolinos de arequipe tradicional y trocitos crujientes de galleta casera.</h2>
            <h2>Para qué público: Un clásico infaltable que encanta por igual a grandes y chicos, evocando los sabores más entrañables de casa.</h2>
            <h2>Precio: 5.500$</h2>
        </section>
         
        <section class="Seccion" id="tarjeta-especial">
            <h1>Sonrisa De Frutos Del Bosque</h1>
            <img src="img/frutos.jpeg" alt="Imagen frutos" width="350">
            <h2>Descripción: Una refrescante y cremosa base de helado con una infusión natural de moras, agraz y fresas silvestres cultivadas en nuestra región, con un toque agridulce perfecto.</h2>
            <h2>Para qué público: Ideal para quienes buscan un equilibrio entre lo frutal, lo fresco y lo artesanal.</h2>
            <h2>Precio: 6.500$</h2>
            
            <!-- 💬 RETO 4: Disponibilidad del sabor -->
            <p style="font-weight: bold; margin-top: 10px;">
                <?php 
                if ($sabor_disponible) {
                    echo " ¡Este sabor está disponible!";
                } else {
                    echo " Lo sentimos, este sabor está agotado.";
                }
                ?>
            </p>
        </section>

        <section class="Seccion">
            <h1>Magia De Chocolate</h1>
            <img src="img/chocolate.jpeg" alt="Imagen chocolate" width="350">
            <h2>Descripción: Intenso helado de chocolate oscuro artesanal con trocitos de brownie húmedo y sutiles notas de canela, recordando los dulces momentos compartidos en la tarde.</h2>
            <h2>Para qué público: El favorito indiscutible de los verdaderos amantes del chocolate.</h2>
            <h2>Precio: 5.500$</h2>
        </section>

        <section class="Seccion">
            <h1>Besito de Nata y Almendras Tostadas</h1>
            <img src="img/Almendras.jpeg" alt="Imagen almendras" width="350">
            <h2>Descripción: Un sabor suave y reconfortante a base de nata pura, coronado con almendras tostadas y un hilo de miel artesanal.</h2>
            <h2>Para qué público: Una opción delicada, cremosa y elegante que transmite la calidez de un hogar.</h2>
            <h2>Precio: 5.500$</h2>
        </section>

        <section class="Seccion" id="Promociones">
            <h1>Compra Dos Helados, Paga Uno</h1>
            <img src="img/2x1.jpeg" alt="Imagen promocion" width="350">
            <h2>Compra Dos Helados Que Contengan Un Precio de 5.500$ Y Paga El Valor De Uno</h2>
            <h2>La Promoción Solo Sirve Para Tu Primera Compra</h2>
            <h2>La Promoción No Aplica La Compra Del Helado "Frutos Del Bosque"</h2>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <h2>Información de contacto 📞</h2>
        <p>Administrador: <strong><?php echo $nombre_administrador; ?></strong></p>
        <p>Correo: <a href="mailto:tupuejared@gmail.com">tupuejared@gmail.com</a></p>
        <p>Telefono: <a href="https://www.whatsapp.com">315 751 6717</a></p>
        <p>Ciudad: <?php echo $ciudad; ?>, Colombia ☕</p>
    </footer>

</body>
</html>