/*
* @Alumno: Ing. Kevin C. Lopez Gonzalez
* @Fecha: 20 de Agosto, 2023
* @Carrera: Ing. Sistemas Computacionales
* @Univeridad: UVEG
* @Maestra:Ing. Dora Alicia Álvarez Medina
* @Archivo: registro.js
*/

document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.getElementById("registro-form");
    formulario.addEventListener("submit", function (event) {
        event.preventDefault();

        const nombre = document.getElementById("nombre").value;
        const apellidos = document.getElementById("apellidos").value;
        const edad = document.getElementById("edad").value;
        const correo = document.getElementById("correo").value;

        localStorage.setItem("nombre", nombre);
        localStorage.setItem("apellidos", apellidos);
        localStorage.setItem("edad", edad);
        localStorage.setItem("correo", correo);

        formulario.submit();
    });
});
