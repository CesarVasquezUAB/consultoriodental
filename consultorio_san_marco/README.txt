Este proyecto fue escrito desde cero, utilizando IA para solucionar detalles sobre las funcionalidades
partes del codigo donde se utilizo fue en bloquear todos los dias anteriores al dia siguiente

manana.setDate(manana.getDate() + 1);
inputFecha.min = manana.toISOString().split('T')[0]; 

En los estilos de los card de los servicios que realiza el Dr Marcelo se utilizo https://uiverse.io/tags/universe
para sacar la transicion en eje y al momento de que el cursor pase por el elemento service-card:hover

.service-card {
    background: white;
    padding: 30px 20px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

