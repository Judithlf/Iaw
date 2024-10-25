<?php
// Función para recuperar y validar los valores
function recupera($campo) {
    return isset($_POST[$campo]) ? intval($_POST[$campo]) : 0;
}