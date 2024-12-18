<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazonas 632</title>
<style>
    /* Dropdown - Menú desplegable */
.dropdown {
    position: relative;
    margin-top: 10px;
}

.dropdown-content {
    display: flex;
    flex-direction: column;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    top: 120%; /* Aparece justo debajo del botón */
    left: 0;
    background-color: rgba(0, 0, 0, 0.573);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    width: 150px;
    z-index: 1; 
    transform: translateY(-10px);
    transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s;
    margin-top: 50px;
    margin-left: 35px;
}

.dropdown-content a {
    padding: 10px 15px;
    color: white;
    text-decoration: none;
    display: block;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.dropdown-content a:hover {
    background-color: #ed641fb4;
}

/* Animación de deslizamiento suave para el menú desplegable */
.dropdown:hover .dropdown-content {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown2 {
    position: relative;
    margin-top: 10px;
}

.dropdown-2 {
    display: flex;
    flex-direction: column;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    top: 120%; /* Aparece justo debajo del botón */
    left: 0;
    background-color: rgba(0, 0, 0, 0.573);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    width: 150px;
    z-index: 1; 
    transform: translateY(-10px);
    transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s;
    margin-top: 50px;
    margin-left: 0px;
}

.dropdown-2 a {
    padding: 10px 15px;
    color: white;
    text-decoration: none;
    display: block;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.dropdown-2 a:hover {
    background-color: #ed641fb4;
}

/* Animación de deslizamiento suave para el menú desplegable */
.dropdown:hover .dropdown-2 {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}




.custom-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: #000000;
    position: fixed; /* Menú fijo */
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra sutil */
    width: 100%; /* Ocupa todo el ancho de la pantalla */
    margin: 0; /* Sin márgenes */
    border-bottom: 2px solid rgb(60, 60, 60); 
}

.custom-logo img {
    height: 60px;
    width: 400px;
}

.custom-menu {
    display: flex;
    margin: 0; /* Sin márgenes */
    margin-right: 60px;
}

.custom-menu-btn {
    margin-left: 25px;
    padding: 10px 15px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    position: relative;
    transition: color 0.3s ease;
    font-size: 25px; /* Aumentar el tamaño del texto */
    margin-right: 40px;
}

.custom-menu-btn::after {
    content: '';
    display: block;
    width: 0;
    height: 4px;
    background: #ff7c39;
    transition: width 0.3s ease;
    position: absolute;
    bottom: -21.5px; /* Línea más abajo */
    left: 0;
}

.custom-fixed-line {
    color: #ff7c39; /* Texto azul fijo */
}

.custom-menu-btn:hover {
    color: #ff7c39;
}

.custom-menu-btn:hover::after {
    width: 100%;
}

/* Mantener la línea fija solo en "Página 1" */
.custom-fixed-line::after {
    width: 100%; /* Línea completa siempre visible */
}

/* Estilo para el contenido principal */
main {
    padding-top: 100px; /* Evitar que el contenido quede detrás del menú */
}

/* Media queries para hacer el menú responsivo */

/* Tablet - pantallas medianas */
@media (max-width: 768px) {
    .custom-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .custom-logo img {
        margin-bottom: 10px;
    }

    .custom-menu {
        flex-direction: column;
        width: 100%;
    }

    .custom-menu-btn {
        margin: 10px 0;
        padding: 10px 20px;
        width: 100%;
        text-align: left;
    }
}

/* Móviles - pantallas pequeñas */
@media (max-width: 480px) {
    .custom-header {
        padding: 10px 20px;
    }

    .custom-menu-btn {
        font-size: 16px;
        padding: 10px;
    }

    .custom-logo img {
        height: 50px;
    }
}


.menu-container {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-image: url('../Recursos/img/wallpaper.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    color: #ffffff;
}
.container {
    display: flex;
    margin-top: 20px;
    width: 90%;
    margin-bottom: 100px;
}
.sidebar {
    width: 200px;
    padding: 20px;
    background-color: #ffc4c4;
    height: auto;
    box-sizing: border-box;
    margin-top: 80px;
}
.sidebar h3 {
    margin-top: 0;
}
.filter-checkbox {
    margin-bottom: 10px;
}
.categories-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    align-items: center;
}
.categories {
    display: flex;
}
.category-item {
    display: inline-block;
    margin: 10px;
    text-align: center;
    padding: 15px;
    cursor: pointer;
    background-color: #ffc4c4;
    border-radius: 10px;
}
#searchBar {
    padding: 8px;
    margin-left: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-top: 20px;
}
.results {
    margin-left: 20px;
    flex-grow: 1;
}
.dish-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
.dish-item {
    display: none;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 8px;
    text-align: center;
    background-color: #fff;
}
.dish-item img {
    width: 150px;
    height: 150px;
    margin-bottom: 10px;
    border-radius: 8px;
}
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.pagination button {
    padding: 5px 10px;
    margin: 0 5px;
    cursor: pointer;
    border: 1px solid #ccc;
    background-color: #f0f0f0;
    border-radius: 5px;
}
.breadcrumbs {
    margin: 10px 0;
    width: 100%;
}

    /* Animación de desvanecimiento */
.fade-in {
    animation: fadeIn 0.5s ease forwards;
}

/* Definición de la animación */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Estilos para el precio */
.price {
    font-size: 1.1em;
    color: #9d4f2a;
    font-weight: bold;
    margin-top: 5px;
}

/* Estilo para las migas de pan (breadcrumbs) */
.breadcrumbs {
    position: fixed; /* Fijo en la parte superior */
    top: 0; /* Alineado en la parte superior de la página */
    width: 100%; /* Ocupa todo el ancho */
    background-color: rgba(0, 0, 0, 0.6); /* Fondo semitransparente para legibilidad */
    padding: 10px 20px; /* Espaciado interno */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3); /* Sombra para destacar */
    z-index: 1000; /* Asegura que esté encima de otros elementos */
    color: #ffffff; /* Color de texto blanco */
    font-size: 1em;
    margin-top: 95px;
    margin-left: 30px;
}

.container {
    margin-top: 50px; /* Agrega un margen superior para evitar solapamiento con las migas de pan */
}

.breadcrumbs a {
    color: #ffffff;
    text-decoration: none;
    font-weight: bold;
}

.breadcrumbs a:hover {
    text-decoration: underline; /* Efecto hover para los enlaces */
}




/* Contenedor de búsqueda */
.search-container {
    display: flex;
    align-items: center;
    justify-content: left;
    margin-bottom: 20px;
    margin-left: 250px;
}

/* Estilo para el cuadro de texto */
#searchBar {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 300px;
    font-size: 16px;
    outline: none;
    transition: all 0.3s ease;
}

/* Efecto al escribir */
#searchBar:focus {
    border-color: #ff8400;
    box-shadow: 0 0 5px rgb(255, 174, 69);
}

/* Botón desplegable personalizado */
#customDropdownButton {
    padding: 10px 20px;
    margin-left: 10px;
    background-color: #a76128;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease; 
    margin-top: 20px;
}

/* Hover y active del botón */
#customDropdownButton:hover {
    background-color: #fa9b16;
    box-shadow: 0 0 5px rgb(255, 174, 69);
}

#customDropdownButton:active {
    background-color: #fa9b16;
}

/* Menú desplegable personalizado */
.custom-dropdown {
    position: relative;
}

.custom-dropdown-menu {
    position: absolute;
    text-align: center;
    top: 100%;
    left: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 200px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    z-index: 1000;
    margin-left: 12px;
}

/* Opciones del menú desplegable */
.custom-dropdown-menu a {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #eee;
    transition: background-color 0.2s ease;
}

/* Última opción sin borde inferior */
.custom-dropdown-menu a:last-child {
    border-bottom: none;
}

/* Hover de las opciones */
.custom-dropdown-menu a:hover {
    background-color: #f0f0f0;
}

/* Mostrar el menú desplegable */
.custom-dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}







/* Caja de checkboxes (sidebar) */
.sidebar {
width: 220px;
padding: 20px;
background-color: #fdd6b9;
border-radius: 10px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
margin-right: 20px;
margin-top: 100px;
}

.sidebar h3 {
color: #9d522a;
font-size: 1.2em;
margin-bottom: 15px;
text-align: center;
}

.filter-checkbox {
margin-bottom: 12px;
padding: 5px;
display: flex;
align-items: center;
border-radius: 5px;
transition: background-color 0.2s ease;
}

.filter-checkbox:hover {
background-color: #f9af8d;
}

.filter-checkbox label {
margin-left: 8px;
color: #555;
font-weight: 500;
}

.filter-checkbox input[type="checkbox"] {
accent-color: #9d5c2a; /* Cambia el color del checkbox */
}



/* Botones de paginación */
.pagination button {
padding: 8px 12px;
margin: 0 5px;
cursor: pointer;
border: none;
border-radius: 5px;
background-color: #9d562a;
color: #fff;
font-weight: bold;
transition: background-color 0.3s ease, transform 0.2s ease;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
}

.pagination button:hover {
background-color: #f78b48;
transform: translateY(-2px); /* Efecto de elevación */
}

.pagination button:focus {
outline: none;
box-shadow: 0 0 5px rgba(157, 73, 42, 0.6);
}

.pagination button:active {
background-color: #d0793b;
transform: scale(0.98); /* Efecto de clic */
}

/* Estilos para cada plato */
.dish-item {
display: none; /* Oculto por defecto */
border: 1px solid #ddd;
padding: 20px;
border-radius: 15px;  /* Bordes más redondeados */
text-align: center;
background-color: #fcefe5;
box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Sombra más suave */
transition: transform 0.3s ease, box-shadow 0.3s ease;
margin-bottom: 20px;  /* Espaciado entre los platos */
}

.dish-item:hover {
transform: translateY(-5px); /* Efecto de elevación */
box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Sombra más intensa al pasar el ratón */
}

/* Estilo para las imágenes de los platos */
.dish-item img {
width: 300px;  /* Hacer la imagen más ancha */
height: 200px;  /* Mantener la altura */
margin-bottom: 15px;
border-radius: 10px;
object-fit: cover;  /* Mantiene la proporción y recorta si es necesario */
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);  /* Sombra sutil en la imagen */
transition: transform 0.2s ease;
}

.dish-item img:hover {
transform: scale(1.05); /* Efecto de zoom en la imagen */
}

/* Estilo para el nombre del plato */
.dish-item h4 {
font-size: 1.3em;  /* Tamaño de fuente más grande */
margin: 10px 0;
color: #333;
font-weight: bold;
}

/* Estilo para la descripción del plato */
.dish-item p {
font-size: 1em;
color: #666;
margin: 0 0 10px;
line-height: 1.4;
}

/* Estilo para el precio del plato */
.dish-item .price {
font-size: 1.1em;
font-weight: bold;
color: #ac6450;
margin-top: 8px;
}


/* Encapsulación del footer para evitar conflictos con otros estilos */
.normal-footer {
    background-color: #000000;
    color: white;
    font-size: 25px;
    padding: 20px 0;
    width: 100%;
    border-top: 5px solid white; 
}

.normal-footer .footer-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.normal-footer .footer-logo img {
    width: 280px; /* Ajusta el tamaño del logo */
}

.normal-footer .footer-address, .normal-footer .footer-contact {
    text-align: left;
    margin: 0 15px; /* Añade márgenes para que no estén pegados */
}

.normal-footer h4 {
    margin-bottom: 5px;
}

.normal-footer p {
    margin: 3px 0;
}

/* Para pantallas pequeñas */
@media (max-width: 768px) {
    .normal-footer .footer-container {
        flex-direction: column;
        text-align: center;
    }

    .normal-footer .footer-logo img {
        margin-bottom: 15px;
    }
}

/* Hacer que el contenido ocupe todo el espacio disponible para empujar el footer al final */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

.main-content {
    min-height: 100vh; /* Hace que el contenido principal ocupe al menos el 100% de la ventana */
    padding-bottom: 50px; /* Espacio para asegurar que el footer no esté pegado al contenido */
    box-sizing: border-box;
}


</style>
</head>
<body>
<header class="custom-header">
    <!-- Logo en la parte izquierda -->
    <div class="custom-logo">
        <img src="{{ asset('Recursos/img/logo1.png') }}" alt="Logo" width="100">
    </div>
    <!-- Menú de botones alineado a la derecha -->
    <nav class="custom-menu">
        <a href="../Paginas/inicio.php" class="custom-menu-btn ">Inicio</a>
        <div class="dropdown">
            <a href="../Paginas/carta.php" class="custom-menu-btn custom-fixed-line">Carta</a>
            <div class="dropdown-2">
                        <a href="../Partes/popular.php">Mas populares</a>
                        <a href="../Partes/recomendaciones.php">Recomendaciones</a>
                        <a href="../Partes/especial.php">Especialidad</a>
                </div>
        </div>
        <div class="dropdown">
              <a href="../Paginas/promociones.php" class="custom-menu-btn">Promociones</a>
                <div class="dropdown-content">
                        <a href="../Partes/promo1.php">Promoción tragos</a>
                        <a href="../Partes/promo2.php">Promoción tragos mas tequeños</a>
                        <a href="../Partes/promo3.php">Cumpleaños</a>
                </div>
            </div>
        <a href="../Paginas/delivery.php" class="custom-menu-btn">Delivery</a>
        <a href="../Paginas/reserva.php" class="custom-menu-btn">Reserva</a>
    </nav>
</header>


<div class="menu-container">

    <!-- Barra de búsqueda y Categorías -->
    <header class="categories-container">
        <section class="categories">
            <div class="category-item" onclick="showCategory('platos')">Platos</div>
            <div class="category-item" onclick="showCategory('bebidas')">Bebidas</div>
            <div class="category-item" onclick="showCategory('postres')">Postres</div>
            <div class="category-item" onclick="showCategory('tragos')">Tragos</div>
        </section>
    </header>

    <!-- Migas de pan -->
    <nav class="breadcrumbs">
        <span><a href="../Paginas/inicio.php">Inicio</a> > <a href="../Paginas/carta.php">Carta</a> > <span id="breadcrumb-category">Categoría</span></span>
    </nav>
    <div class="container">
        <!-- Filtros de criterios específicos en el lateral izquierdo -->
        <aside class="sidebar">
            <h3>Filtrar por Opciones</h3>
            <!-- 17 filtros de checkbox -->
            <div class="filter-checkbox"><input type="checkbox" id="check-entradas" onclick="filterDishes()"> <label for="check-entradas">Entradas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-ensaladas" onclick="filterDishes()"> <label for="check-ensaladas">Ensaladas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-sopas" onclick="filterDishes()"> <label for="check-sopas">Sopas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-alitas" onclick="filterDishes()"> <label for="check-alitas">Alitas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-tacos" onclick="filterDishes()"> <label for="check-tacos">Tacos</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-hamburguesas" onclick="filterDishes()"> <label for="check-hamburguesas">Hamburguesas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-sandwiches" onclick="filterDishes()"> <label for="check-sandwiches">Sandwiches</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-fondos" onclick="filterDishes()"> <label for="check-fondos">Fondos</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-pastas" onclick="filterDishes()"> <label for="check-pastas">Pastas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-pizzas" onclick="filterDishes()"> <label for="check-pizzas">Pizzas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-postres" onclick="filterDishes()"> <label for="check-postres">Postres</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-bebidas_calientes" onclick="filterDishes()"> <label for="check-bebidas_calientes">Bebidas Calientes</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-bebidas_frias" onclick="filterDishes()"> <label for="check-bebidas_frias">Bebidas Frías</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-cervezas" onclick="filterDishes()"> <label for="check-cervezas">Cervezas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-botellas" onclick="filterDishes()"> <label for="check-botellas">Botellas</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-tragos" onclick="filterDishes()"> <label for="check-tragos">Tragos</label></div>
            <div class="filter-checkbox"><input type="checkbox" id="check-con_pisco" onclick="filterDishes()"> <label for="check-con_pisco">Con Pisco</label></div>
        </aside>

        <!-- Resultados de platos -->
        <section class="results">
            <!-- Barra de búsqueda y botón desplegable personalizado -->
<div class="search-container">  
    <div class="custom-dropdown">
        <button id="customDropdownButton">RECOMENDACIONES</button>
        <div id="customDropdownMenu" class="custom-dropdown-menu">
            <a href="../Partes/popular.php">Mas populares</a>
            <a href="../Partes/recomendaciones.php">Recomendaciones</a>
            <a href="../Partes/especial.php">Especialidad</a>
        </div>
    </div>
    <input type="text" id="searchBar" placeholder="Buscar platos..." onkeyup="filterDishes()">
</div>

            <div class="pagination pagination-top" id="pagination-top"></div>
            <div id="dishes" class="dish-grid">
                <!-- PLATOS DE ENTRADA -->
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/doraditas.jpg" alt="Doraditas">
                    <h4>DORADITAS</h4>
                    <p>Nuggets fritos servidos con yuquitas fritas y salsa al ajo</p>
                    <div class="price">S/18.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/chicharron de pollo.jpg" alt="Chicharron de pollo">
                    <h4>CHICHARRÓN DE POLLO</h4>
                    <p>Trocitos de pollo arrebozado, acompañado de papas fritas y mayonesa al ajo</p>
                    <div class="price">S/20.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/Quesadillas-de-queso.webp" alt="Quesadillas de queso">
                    <h4>QUESADILLAS DE QUESO</h4>
                    <p>Tortillas de trigo rellenas de abundante queso, servido con guacamole</p>
                    <div class="price">S/18.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/quesadilla de chorizo.jpeg" alt="Quesadillas de chorizo">
                    <h4>QUESADILLAS DE CHORIZO</h4>
                    <p>Tortillas de trigo rellenas de abundante queso y chorizo, servido con guacamole</p>
                    <div class="price">S/20.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/Patacones con revolcado de cecina y chorizo.png" alt="Patacones con revolcado de cecina y chorizo">
                    <h4>PATACONES CON REVOLCADO DE CECINA Y CHORIZO</h4>
                    <p>Sobre patacones de queso de plátano, revolcado de cecina y chorizo regional</p>
                    <div class="price">S/20.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/Tequeños de queso.jpg" alt="Tequeños de queso">
                    <h4>TEQUEÑOS DE QUESO</h4>
                    <p>Masita rellena de queso servido con guacamole</p>
                    <div class="price">S/18.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/Nachos con queso.jpg" alt="Nachos de queso">
                    <h4>NACHOS DE QUESO</h4>
                    <p>Nachos acompañado en salsa cheddar</p>
                    <div class="price">S/18.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/Papas bravas.jpg" alt="Papas bravas">
                    <h4>PAPAS BRAVAS</h4>
                    <p>Papas doradas y especiadas con chili, montadas con queso y tocino</p>
                    <div class="price">S/18.00</div>
                </div>
                <div class="dish-item entradas">
                    <img src="../Recursos/img/ENTRADAS/Pan al ajo.avif" alt="Pan al ajo">
                    <h4>PAN AL AJO</h4>
                    <p>En pan molde, ajo, mantequilla y coronado con mozerella</p>
                    <div class="price">S/18.00</div>
                </div>

                <!-- PLATOS DE ENSALADAS -->
                <div class="dish-item ensaladas">
                    <img src="../Recursos/img/ENSALADAS/EC.jpg" alt="Ensalada cesar">
                    <h4>ENSALADA CÉSAR</h4>
                    <p>Ensalada con trozos de lechuga, crotones, queso parmesano, y filete de pollo servido con aliño César</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item ensaladas">
                    <img src="../Recursos/img/ENSALADAS/ECAPRESE.jpg" alt="Ensalada caprese">
                    <h4>ENSALADA CAPRECE</h4>
                    <p>Rodajas de tomate, hojas de albahaca y queso mozzarella, con aceite de oliva</p>
                    <div class="price">S/18.00</div>
                </div>
                <div class="dish-item ensaladas">
                    <img src="../Recursos/img/ENSALADAS/SP.avif" alt="Sensación de pollo">
                    <h4>SENSACIÓN DE POLLO</h4>
                    <p>Chicharroncitos de pollo, palta, torzos de lechuga, choclito, arverja, daditos de queso, servido con vinagreta de la casa</p>
                    <div class="price">S/25.00</div>
                </div>

                <!-- PLATOS DE SOPAS -->
                <div class="dish-item sopas">
                    <img src="../Recursos/img/SOPAS/sopa-criolla.png" alt="Sopa criolla">
                    <h4>SOPA CRIOLLA</h4>
                    <p>Sopa confortadora a base de ají panca, trocitos de carne de res, leche, huevo y fideos</p>
                    <div class="price">S/22.00</div>
                </div>
                <div class="dish-item sopas">
                    <img src="../Recursos/img/SOPAS/DP.jpg" alt="Dieta de pollo">
                    <h4>DIETA DE POLLO</h4>
                    <p>Caldo de pollo, trozos de pechuga, verduras y cabello de angel</p>
                    <div class="price">S/20.00</div>
                </div>

                <!-- PLATOS DE ALITAS -->
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/BBQ.JPG" alt="Alitas bbq">
                    <h4>ALITAS BBQ</h4>
                    <p>Alitas fritas, bañadas en salsa bbq, acompañado de papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/ABBQP.JPG" alt="Alitas maracuya">
                    <h4>ALITAS MARACUYÁ</h4>
                    <p>Alitas fritas, bañadas en salsa de maracuyá, acompañado con papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/AC.JPG" alt="Alitas crispy">
                    <h4>ALITAS CRISPY</h4>
                    <p>Alitas empanizadas, acompañadas con papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/ACEV.JPG" alt="Alitas acevichadas">
                    <h4>ALITAS ACEVICHADAS</h4>
                    <p>Alitas fritas, bañadas en salsa acevichada, acompañado de papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/ACEV.JPG" alt="Alitas acevichadas">
                    <h4>ALITAS ACEVICHADAS</h4>
                    <p>Alitas fritas, bañadas en salsa acevichada, acompañado de papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/AM.JPG" alt="Alitas bbq picante">
                    <h4>ALITAS BBQ PICANTE</h4>
                    <p>Alitas fritas, bañadas en salsa bbq picante acompañado con papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/AT.JPG" alt="Alitas teriyaki">
                    <h4>ALITAS TERIYAKI</h4>
                    <p>Alitas fritas, bañadas en salsa agridulce oriental, acompañadas de papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item alitas">
                    <img src="../Recursos/img/ALITAS/AB.JPG" alt="Alitas buffalo">
                    <h4>ALITAS BUFFALO</h4>
                    <p>Alitas fritas bañadas en salsa agridulce picante, acompañadas con papas fritas</p>
                    <div class="price">S/23.00</div>
                </div>

                <!-- PLATOS DE TACOS -->
                <div class="dish-item tacos">
                    <img src="../Recursos/img/TACOS/TR.JPG" alt="Taco regional">
                    <h4>TACO REGIONAL</h4>
                    <p>Sobre tortilla de trigo: frejol, guacamole, huevo, chorizo y cecina regional</p>
                    <div class="price">S/24.00</div>
                </div>
                <div class="dish-item tacos">
                    <img src="../Recursos/img/TACOS/TE.JPG" alt="Taco especial">
                    <h4>TACO ESPECIAL</h4>
                    <p>Sobre tortilla de trigo: frejol, guacamole, pollo, huevo, queso y jamón </p>
                    <div class="price">S/24.00</div>
                </div>
                <div class="dish-item tacos">
                    <img src="../Recursos/img/TACOS/TA.JPG" alt="Taco asado">
                    <h4>TACO ASADO</h4>
                    <p>Sobre tortilla de trigo: frejol, guacamole, pollo empanizado y queso cheedar </p>
                    <div class="price">S/24.00</div>
                </div>
                <div class="dish-item tacos">
                    <img src="../Recursos/img/TACOS/TC.JPG" alt="Taco crispy">
                    <h4>TACO CRISPY</h4>
                    <p>Sobre tortilla de trigo: frejol, guacamole, pollo empanizado y queso cheedar </p>
                    <div class="price">S/24.00</div>
                </div>

                <!-- PLATOS DE HAMBURGUEZA -->
                <div class="dish-item hamburguesas">
                    <img src="../Recursos/img/HAMBURGUESAS/A.JPG" alt="Autentica">
                    <h4>AUTÉNTICA</h4>
                    <p>En pan brioche de la casa: 160g de hamburguesa, lechuga, aros de cebolla, tomate, pickles. Acompañado con papas fritas </p>
                    <div class="price">S/21.00</div>
                </div>
                <div class="dish-item hamburguesas">
                    <img src="../Recursos/img/HAMBURGUESAS/CH.JPG" alt="Cheeseburguer">
                    <h4>CHEESEBURGUER</h4>
                    <p> En pan brioche de la casa: 160g de hamburguesa, queso andino, lechuga, tomate, pickles y aros de cebolla. Acompañado de papas fritas </p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item hamburguesas">
                    <img src="../Recursos/img/HAMBURGUESAS/A632.JPG" alt="Amazonas 632">
                    <h4>AMAZONAS 632</h4>
                    <p> En pan brioche de la casa: 160g de hamburguesa, tortilla de chorizo, maduros fritos, lechuga, tomate, pickles y ars de cebolla. Acompañado de papas fritas </p>
                    <div class="price">S/24.00</div>
                </div>
                <div class="dish-item hamburguesas">
                    <img src="../Recursos/img/HAMBURGUESAS/HAP.JPG" alt="Hamburguesa al plato a lo pobre">
                    <h4>HAMBURGUESA AL PLATO A LO POBRE</h4>
                    <p> 160g de hamburguesa, huevo frito, maduros fritos. Servido con papas fritas y arroz </p>
                    <div class="price">S/24.00</div>
                </div>

                <!-- PLATOS DE SANDWICHES -->
                <div class="dish-item sandwiches">
                    <img src="../Recursos/img/SANDWICHES/Triple de pollo.webp" alt="Triple de pollo">
                    <h4>TRIPLE DE POLLO</h4>
                    <p> En pan molde: pollo, mayonesa, queso y jamón</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item sandwiches">
                    <img src="../Recursos/img/SANDWICHES/TPL.JPG" alt="Triple de palta">
                    <h4>TRIPLE DE PALTA</h4>
                    <p> En pan molde: palta, huevo, sancochado, tomate y mayonesa</p>
                    <div class="price">S/12.00</div>
                </div>
                <div class="dish-item sandwiches">
                    <img src="../Recursos/img/SANDWICHES/MXC.JPG" alt="Mixto completo">
                    <h4>MIXTO COMPLETO</h4>
                    <p> En pan molde: jamón, queso, y huevo frito. Acompañado de papas fritas</p>
                    <div class="price">S/16.00</div>
                </div>
                <div class="dish-item sandwiches">
                    <img src="../Recursos/img/SANDWICHES/PDSH.JPG" alt="Pollo deshilachado">
                    <h4>MIXTO COMPLETO</h4>
                    <p> En pan brioche de la casa: pollo deshilachado, mayonesa, apio y pecanas. Servido con papas fritas</p>
                    <div class="price">S/20.00</div>
                </div>
                <div class="dish-item sandwiches">
                    <img src="../Recursos/img/SANDWICHES/CLBS.JPG" alt="Club sandwich">
                    <h4>CLUB SANDWICH</h4>
                    <p> En pan molde: pollo deshilachado, huevo frito, tocino y tomate. Acompañado con papas fritas</p>
                    <div class="price">S/25.00</div>
                </div>
                <div class="dish-item sandwiches">
                    <img src="../Recursos/img/SANDWICHES/SA.JPG" alt="Sandwich de asado">
                    <h4>SANDWICH DE ASADO</h4>
                    <p> En pan brioche de la casa: asadi regional deshilachado, cebollas caramelizadas y queso cheddar. Acompañado con papas fritas</p>
                    <div class="price">S/20.00</div>
                </div>

                <!-- PLATOS DE FONDOS -->
                <div class="dish-item fondos">
                    <img src="../Recursos/img/FONDOS/SALP.JPG" alt="Salchipapa a lo pobre">
                    <h4>SALCHIPAPA A LO POBRE</h4>
                    <p> Cortes de salchicha frankfurter, huevo frito, plátanos fritos y papas fritas, acompañadas de ensalada de repollo</p>
                    <div class="price">S/25.00</div>
                </div>
                <div class="dish-item fondos">
                    <img src="../Recursos/img/FONDOS/CHSEL.JPG" alt="Chaufa selvatico">
                    <h4>CHAUFA SELVÁTICO</h4>
                    <p> Arroz chaufa a base de cecina y chorizo regional, acompañado con maduro frito</p>
                    <div class="price">S/28.00</div>
                </div>
                <div class="dish-item fondos">
                    <img src="../Recursos/img/FONDOS/TMX.JPG" alt="Tacacho mixto">
                    <h4>TACAHO MIXTO</h4>
                    <p> Plátano verder frito, acompañado de chorizo, cecina y sarsa</p>
                    <div class="price">S/28.00</div>
                </div>
                <div class="dish-item fondos">
                    <img src="../Recursos/img/FONDOS/CHPLL.JPG" alt="Chaufa de pollo">
                    <h4>CHAUFA DE POLLO</h4>
                    <p> Chaufa oriental con trozos de pollo</p>
                    <div class="price">S/24.00</div>
                </div>
                <div class="dish-item fondos">
                    <img src="../Recursos/img/FONDOS/FPP.JPG" alt="Filete de pollo a la plancha fileteado pollo a la plancha">
                    <h4>FILETE DE POLLO A LA PLANCHA</h4>
                    <p> Pechuga a la plancha. Servido con papas fritas y ensalada</p>
                    <div class="price">S/27.00</div>
                </div>

                <!-- PLATOS DE PASTAS -->
                <div class="dish-item pastas">
                    <img src="../Recursos/img/PASTA/FA.JPG" alt="Fetuccini a lo alfredo">
                    <h4>FETUCCINI A LO ALFREDO</h4>
                    <p> Tallarines en salsa alfredo con jamón</p>
                    <div class="price">S/25.00</div>
                </div>
                <div class="dish-item pastas">
                    <img src="../Recursos/img/PASTA/FAO.JPG" alt="Fetuccini al oleo">
                    <h4>FETUCCINI AL OLEO</h4>
                    <p> Tallarines con champiñones salteados al ajo, parmesano y su toque de albahaca</p>
                    <div class="price">S/22.00</div>
                </div>
                <div class="dish-item pastas">
                    <img src="../Recursos/img/PASTA/FSBLG.JPG" alt="Fetuccini en salsa bolognesa">
                    <h4>FETUCCINI EN SALSA BOLOGNESA</h4>
                    <p> Tallarines en salsa bolognesa y parmesano</p>
                    <div class="price">S/25.00</div>
                </div>
                <div class="dish-item pastas">
                    <img src="../Recursos/img/PASTA/LMXT.JPG" alt="Lasaña mixta">
                    <h4>LASAÑA MIXTA</h4>
                    <p> Deliciossa pasta en capas de salsa bolognesa, alfredo y queso mozzarella</p>
                    <div class="price">S/27.00</div>
                </div>

                <!-- PLATOS DE PIZZAS -->
                <div class="dish-item pizzas">
                    <img src="../Recursos/img/PIZZAS/Pizza americana.jpg" alt="Pizza Americana">
                    <h4>PIZZA AMERICANA</h4>
                    <p> Masa artesanal y jamón ingles</p>
                    <div class="price">S/22.00</div>
                </div>
                <div class="dish-item pizzas">
                    <img src="../Recursos/img/PIZZAS/Pizza margarita.jpg" alt="Pizza Margarita">
                    <h4>PIZZA MARGARITA</h4>
                    <p> Masa artesanal con tomates y albahaca</p>
                    <div class="price">S/22.00</div>
                </div>
                <div class="dish-item pizzas">
                    <img src="../Recursos/img/PIZZAS/Pizza tres quesos.jpg" alt="Pizza tres 3 quesos">
                    <h4>PIZZA TRES QUESOS</h4>
                    <p> Masa artesanal con queso mozzarella, parmesano y andino añejo</p>
                    <div class="price">S/22.00</div>
                </div>
                <div class="dish-item pizzas">
                    <img src="../Recursos/img/PIZZAS/Pizza hawaiana.avif" alt="Pizza hawaiana">
                    <h4>PIZZA HAWAIANA</h4>
                    <p> Masa artesanal con jamón, piña y durazno en almibar</p>
                    <div class="price">S/23.00</div>
                </div>
                <div class="dish-item pizzas">
                    <img src="../Recursos/img/PIZZAS/Pizza amazonas.jpg" alt="Pizza amazonas 632">
                    <h4>PIZZA AMAZONAS 632</h4>
                    <p> Masa artesanal con cecina, chorizo selvático y tajaditas de maduro</p>
                    <div class="price">S/24.00</div>
                </div>

                <!-- POSTRES -->
                <div class="dish-item postres">
                    <img src="../Recursos/img/POSTRES/Brownie con helado.jpeg" alt="Brownie con helado">
                    <h4>BROWNIE CON HELADO</h4>
                    <div class="price">S/12.00</div>
                </div>
                <div class="dish-item postres">
                    <img src="../Recursos/img/POSTRES/Torta húmeda de chocolate.jpg" alt="Torta humeda de chocolate">
                    <h4>TORTA HÚMEDA DE CHOCOLATE</h4>
                    <div class="price">S/12.00</div>
                </div>
                <div class="dish-item postres">
                    <img src="../Recursos/img/POSTRES/Torta capuccino.jpg" alt="Torta capuccino">
                    <h4>TORTA CAPUCCINO</h4>
                    <div class="price">S/12.00</div>
                </div>
                <div class="dish-item postres">
                    <img src="../Recursos/img/POSTRES/Cinco leches.jpg" alt="Cinco leches">
                    <h4>CINCO LECHES</h4>
                    <div class="price">S/12.00</div>
                </div>
                <div class="dish-item postres">
                    <img src="../Recursos/img/POSTRES/Cinco leches de chocolate.jpg" alt="Cinco leches de chocolate">
                    <h4>CINCO LECHES DE CHOCOLATE</h4>
                    <div class="price">S/12.00</div>
                </div>
                <div class="dish-item postres">
                    <img src="../Recursos/img/POSTRES/Cheesecake horneado estilo New York.jpg" alt="Cheesecake horneado estilo New York">
                    <h4>CHEESECAKE HORNEADO ESTILO NEW YORK</h4>
                    <div class="price">S/12.00</div>
                </div>

                <!-- BEBIDAS CALIENTES -->
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/infucion.jpg" alt="Infusion">
                    <h4>INFUSIÓN</h4>
                    <p> Manzanilla, Menta, Cedrón, Hierba Luisa y Coca</p>
                    <div class="price">S/5.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/lechecaliente.jpg" alt="Leche caliente">
                    <h4>LECHE CALIENTE</h4>
                    <div class="price">S/7.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/chocolate caliente.webp" alt="Chocolate caliente">
                    <h4>CHOCOLATE CALIENTE</h4>
                    <p> (Chocolate Regional)</p>
                    <div class="price">S/8.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/cafe expreso.jpg" alt="Cafe expreso">
                    <h4>CAFÉ EXPRESO</h4>
                    <div class="price">S/6.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/cafe americano.webp" alt="Cafe americano">
                    <h4>CAFÉ EXPRESO</h4>
                    <div class="price">S/7.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/capuchino.jpeg" alt="Cafe capuccino">
                    <h4>CAFÉ CAPUCCION</h4>
                    <div class="price">S/9.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/capuchino con crema.jpg" alt="Cafe capuccino con crema">
                    <h4>CAFÉ CAPUCCION CON CREMA</h4>
                    <div class="price">S/10.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/cafe late.jpeg" alt="Cafe latte">
                    <h4>CAFÉ LATTE</h4>
                    <div class="price">S/9.00</div>
                </div>
                <div class="dish-item bebidas_calientes">
                    <img src="../Recursos/img/BEBIDAS CALIENTES/mocca.jpeg" alt="Cafe mocca">
                    <h4>CAFÉ MOCCA</h4>
                    <div class="price">S/10.00</div>
                </div>

                <!-- BEBIDAS FRIAS -->
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/maracuyaa.jpg" alt="la amarilla maracuya">
                    <h4>LA AMARILLA</h4>
                    <p> Refresco de maracuyá</p>
                    <div class="price">S/8.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/maracumango.jpg" alt="Maracumango">
                    <h4>MARACUMANGO</h4>
                    <p> Refresco de maracuyá y mango</p>
                    <div class="price">S/9.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/jugo de manzana verde.jpg" alt="La verde">
                    <h4>LA VERDE</h4>
                    <p>Jugo de manzana verde</p>
                    <div class="price">S/9.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/limonada de frutos rojos.jpg" alt="Limonada de frutos rojos">
                    <h4>LIMONADA DE FRUTOS ROJOS</h4>
                    <p>Fresas, cerezas y arándanos</p>
                    <div class="price">S/9.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/chicha moreda.jpg" alt="Chicha morada">
                    <h4>CHICHA MORADA</h4>
                    <p>Bebida a base de maíz morado</p>
                    <div class="price">S/8.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/refresco de matacuya.png" alt="Chichacuya">
                    <h4>CHICHACUYÁ</h4>
                    <p>Refresco de maracuyá y chicha morada</p>
                    <div class="price">S/8.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/PIÑA FRESCA.avif" alt="Piña fresca">
                    <h4>PIÑA FRESCA</h4>
                    <p>Jugo de piña, jengibre, menta y limón</p>
                    <div class="price">S/8.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/tropical.jpg" alt="Piña fresca">
                    <h4>PAPAYA TROPICAL</h4>
                    <p>Jugo de papaya, fresa y crema de coco</p>
                    <div class="price">S/8.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/jugo de papaya.jpg" alt="Papaya tropical">
                    <h4>PAPAYA Y COCO</h4>
                    <p>Jugo de papaya, limón y crema de coco</p>
                    <div class="price">S/8.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/milshake.jpg" alt="milshake de oreo">
                    <h4>MILSHAKE DE ÓREO</h4>
                    <p>Helado de vainilla, leche y óreo</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/batido fresa.avif"  alt="Batido de fresa">
                    <h4>BATIDO DE FRESA</h4>
                    <p>Fresa, leche evaporada y condensada</p>
                    <div class="price">S/11.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/frapu.jpg"  alt="Frappuccino de chocolate">
                    <h4>FRAPPUCCINO DE CHOCOLATE</h4>
                    <p>Bebida frapeada con chocolate al 60%</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/gaseosa.webp"  alt="Gaseosa">
                    <h4>GASEOSA 295ml</h4>
                    <p>Coca cola, Inka Cola personales</p>
                    <div class="price">S/4.00</div>
                </div>
                <div class="dish-item bebidas_frias">
                    <img src="../Recursos/img/BEBIDAS FRIAS/agua.jpg"  alt="Agua">
                    <h4>GASEOSA 295ml</h4>
                    <p>AGUA MINERAL SIN GAS, CON GAS</p>
                    <div class="price">S/5.00</div>
                </div>
                
                <!-- CERVEZAS -->
                <div class="dish-item cervezas">
                    <img src="../Recursos/img/CERVEZAS/CRVC.JPG"  alt="Cusqueña">
                    <h4>CUSQUEÑA</h4>
                    <p>Dorada, negra, roja, doble malta (330ml)</p>
                    <div class="price">S/9.00</div>
                </div>
                <div class="dish-item cervezas">
                    <img src="../Recursos/img/CERVEZAS/C.JPG"  alt="Cerveza importada">
                    <h4>CERVEZA IMPORTADA</h4>
                    <p>Corona, Stella Artois (330ml)</p>
                    <div class="price">S/10.00</div>
                </div>

                <!-- BOTELLAS -->
                <div class="dish-item botellas">
                    <img src="../Recursos/img/BOTELLAS/VR.JPG"  alt="Vino Rosé queirolo">
                    <h4>VINO ROSÉ QUEIROLO(750ml)</h4>
                    <div class="price">S/50.00</div>
                </div>
                <div class="dish-item botellas">
                    <img src="../Recursos/img/BOTELLAS/VTTABA.JPG"  alt="Vino tinto intipalka">
                    <h4>VINO TINTO INTIPALKA(750ml)</h4>
                    <p>Malbec, merlot, cabernet sauvignon</p>
                    <div class="price">S/60.00</div>
                </div>
                <div class="dish-item botellas">
                    <img src="../Recursos/img/BOTELLAS/VTCDBLO.JPG"  alt="Vino tinto casillero del diablo">
                    <h4>VINO CASILLERO DEL DIABLO</h4>
                    <p>Malbec, merlot, cabernet sauvignon</p>
                    <div class="price">S/60.00</div>
                </div>
                <div class="dish-item botellas">
                    <img src="../Recursos/img/BOTELLAS/VT.JPG"  alt="Vino tinto tabernero">
                    <h4>VINO TINTO TABERNERO(750ml)</h4>
                    <div class="price">S/35.00</div>
                </div>
                <div class="dish-item botellas">
                    <img src="../Recursos/img/BOTELLAS/VT.JPG"  alt="Vino tinto tabernero">
                    <h4>VINO TINTO TABERNERO(375ml)</h4>
                    <div class="price">S/20.00</div>
                </div>
                <div class="dish-item botellas">
                    <img src="../Recursos/img/BOTELLAS/ESPR.JPG"  alt="Espumante Ricardona">
                    <h4>ESPUMANTE RICARDONA</h4>
                    <div class="price">S/75.00</div>
                </div>

                <!-- TRAGOS -->
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/BLM.JPG"  alt="Blue Margarita">
                    <h4>BLUE MARGARITA</h4>
                    <p>Limón, curacao azul y tequila</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/PÑC.JPG"  alt="Piña colada">
                    <h4>PIÑA COLADA</h4>
                    <p>Piña fresca, crema de coco y ron</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/SNGR.JPG"  alt="Sangre chacha">
                    <h4>SANGRE CHACHA</h4>
                    <p>Maracuyá, granadina, menta y ron blanco</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/TR.JPG"  alt="Algarrobina">
                    <h4>ALGARROBINA</h4>
                    <p>Algarrobina, leche, canela y pisco</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/TALG.JPG"  alt="Daiquiri de fresa y durazno">
                    <h4>DAIQUIRI DE FRESA Y DURAZNO</h4>
                    <p>Fresa, durazno y ron dorado</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/M.JPG"  alt="Mojito">  
                    <h4>MOJITO</h4>
                    <p>YERBABUENA, GINGER Y RON BLANCO</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/SELXIR.JPG"  alt="Sacha elixir">
                    <h4>SACHA ELIXIR</h4>
                    <p>Piña, naranja, granadina y ron</p>
                    <div class="price">S/14.00</div>
                </div>
                <div class="dish-item tragos">
                    <img src="../Recursos/img/TRAGOS/SNGR.JPG"  alt="Sangria">
                    <h4>SANGRÍA</h4>
                    <p>Vino tinto, refresco frutal y pisco</p>
                    <div class="price">S/14.00</div>
                </div>

                <!-- CON PISCO -->
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLC.JPG"  alt="Chilcano clasico">
                    <h4>CHILCANO CLÁSICO</h4>
                    <p>Limón, ginger ale y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLM.JPG"  alt="Chilcano de maracuya">
                    <h4>CHILCANO DE MARCUYÁ</h4>
                    <p>Maracuyá, ginger ale y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLFR.JPG"  alt="Chilcano de frutos rojos">
                    <h4>CHILCANO DE FRUTOS ROJOS</h4>
                    <p>Cereza, fresas ginger ale y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLARA.JPG"  alt="Chilcano de arandanos">
                    <h4>CHILCANO DE ARÁNDANOS</h4>
                    <p>Arándonos, ginger ale y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/SRMRA.JPG"  alt="Chilcano de carambola">
                    <h4>CHILCANO DE CARAMBOLA</h4>
                    <p>Carambola, ginger ale y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLMNG.JPG"  alt="Chilcano de mango">
                    <h4>CHILCANO DE MANGO</h4>
                    <p>Mango, ginger ale y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLFR.JPG"  alt="Sour de frutos rojos">
                    <h4>SOUR DE FRUTOS ROJOS</h4>
                    <p>Cereza, fresas, clara de huevo y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/SRARAN.JPG"  alt="Sour de arandonos">
                    <h4>SOUR DE ARÁNDONOS</h4>
                    <p>Arándanos, clara de huevo y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLC.JPG"  alt="Sour de carambola">
                    <h4>SOUR DE CARAMBOLA</h4>
                    <p>Carambola, clara de huevo y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/CHLCARAM.JPG"  alt="Sour de maracuya">
                    <h4>MARACUYÁ SOUR</h4>
                    <p>Maracuyá, clara de huevo y pisco</p>
                    <div class="price">S/13.00</div>
                </div>
                <div class="dish-item con_pisco">
                    <img src="../Recursos/img/CON PISCO/SRMNG.JPG"  alt="Sour de mango">
                    <h4>SOUR DE MANGO</h4>
                    <p>Mango, clara de huevo y pisco</p>
                    <div class="price">S/13.00</div>
                </div>  
                <!-- Añadir más platos según sea necesario -->
            </div>

            <!-- Paginación -->
            <div class="pagination" id="pagination"></div>
        </section>
    </div>

</div>

<script src="../Recursos/js/carta.js"></script>

<script>
    // Selección del botón y el menú desplegable personalizados
const customDropdownButton = document.getElementById('customDropdownButton');
const customDropdownMenu = document.getElementById('customDropdownMenu');

// Función para mostrar y ocultar el menú desplegable
customDropdownButton.addEventListener('click', () => {
    customDropdownMenu.classList.toggle('show');
});

// Cerrar el menú si se hace clic fuera de él
document.addEventListener('click', (event) => {
    if (!customDropdownButton.contains(event.target) && !customDropdownMenu.contains(event.target)) {
        customDropdownMenu.classList.remove('show');
    }
});

</script>


</body>
</html>