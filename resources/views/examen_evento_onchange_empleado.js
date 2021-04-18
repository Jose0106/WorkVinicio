function selectempleado() {
    let empleados = document.getElementById('empleados');
    let empleado = empleados.value;

    document.getElementById('empselect').innerText = 'Nombre: ${empleado}';
}