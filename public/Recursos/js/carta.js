let currentCategory = null;
let currentPage = 1;
const itemsPerPage = 9;
let absoluteFilteredDishes = [];

document.addEventListener('DOMContentLoaded', () => {
    filterDishes(); // Mostrar todos los platos al cargar la página
});

function showCategory(category) {
    currentCategory = category;
    currentPage = 1;
    updateBreadcrumb();
    filterDishes();
}

function updateBreadcrumb() {
    const selectedFilters = Array.from(document.querySelectorAll('.filter-checkbox input'))
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.nextElementSibling.textContent);

    // Actualizar miga de pan en la barra de navegación
    const breadcrumbText = selectedFilters.length > 0 ? selectedFilters.join(', ') : 'Todos los platos';
    document.getElementById('breadcrumb-category').textContent = breadcrumbText;

    // Actualizar miga de pan junto al título "Platos"
    const breadcrumbFiltersText = selectedFilters.length > 0 ? ` - Filtros: ${selectedFilters.join(', ')}` : '';
    document.getElementById('breadcrumb-filters').textContent = breadcrumbFiltersText;
}

function filterDishes() {
    const searchInput = document.getElementById('searchBar').value.toLowerCase();
    const dishes = document.querySelectorAll('.dish-item');

    // Filtrar los platos basados en la búsqueda únicamente si hay texto en el cuadro de búsqueda
    absoluteFilteredDishes = Array.from(dishes).filter(dish => {
        const matchesSearch = dish.textContent.toLowerCase().includes(searchInput);

        // Si hay texto en el cuadro de búsqueda, ignorar el estado de los checkboxes
        if (searchInput) {
            return matchesSearch;
        }

        // Si no hay texto en el cuadro de búsqueda, aplicar filtros de checkbox normalmente
        const isAnyCheckboxChecked = Array.from(document.querySelectorAll('.filter-checkbox input')).some(checkbox => checkbox.checked);
        const matchesFilter = !isAnyCheckboxChecked || Array.from(dish.classList).some(className => {
            return document.getElementById('check-' + className)?.checked;
        });

        return matchesSearch && matchesFilter;
    });

    // Si hay texto en el cuadro de búsqueda, mostrar todos los resultados sin paginación
    if (searchInput) {
        currentPage = 1; // Reiniciar a la primera página
        updatePagination(1); // Ocultar la paginación
        displayDishes(absoluteFilteredDishes, true); // Mostrar todos los resultados
    } else {
        updatePagination(absoluteFilteredDishes.length); // Paginar normalmente si no hay búsqueda
        displayDishes(absoluteFilteredDishes, false); // Mostrar solo los platos de la página actual
    }

    // Actualizar la miga de pan después de filtrar
    updateBreadcrumb();
}

function updatePagination(totalItems) {
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    const paginationContainer = document.getElementById('pagination');
    paginationContainer.innerHTML = '';

    // Crear botones de paginación
    for (let i = 1; i <= totalPages; i++) {
        const button = document.createElement('button');
        button.textContent = i;
        button.onclick = () => {
            currentPage = i;
            filterDishes(); // Llamar a filterDishes para actualizar la visualización
            
            // Subir al primer plato después de cambiar de página
            document.querySelector('.dish-grid').scrollIntoView({ behavior: 'smooth', block: 'start' });
        };
        paginationContainer.appendChild(button);
    }
}


function displayDishes(filteredDishes) {
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    // Desplazarse a la parte superior de los resultados
    document.querySelector('.menu-container').scrollIntoView({ behavior: 'smooth', block: 'start' });

    // Ocultar todos los platos
    document.querySelectorAll('.dish-item').forEach(dish => dish.style.display = 'none');

    // Mostrar solo los platos de la página actual
    const dishesToShow = filteredDishes.slice(start, end);
    dishesToShow.forEach(dish => {
        dish.style.display = 'block';

        // Añadir clase para animación
        dish.classList.add('fade-in');
        // Remover la clase después de la animación para permitir que se reproduzca de nuevo
        dish.addEventListener('animationend', () => {
            dish.classList.remove('fade-in');
        }, { once: true });
    });
}






