<?php
// Fecha de nacimiento en formato AAAA-MM-DD
$fechaNacimiento = "2002-04-29";

// Obtener el año actual
$añoActual = date("Y");

// Obtener el año de nacimiento
$añoNacimiento = intval(substr($fechaNacimiento, 0, 4));

// Calcular la edad
$edad = $añoActual - $añoNacimiento;

// Mostrar la edad por pantalla
echo "\nLa edad es: $edad años\n";

//------------------------------------------------------------------------------

// Variables
$primerNumero = 15;
$segundoNumero = 23;

// Determinamos el mayor
if ($primerNumero > $segundoNumero) {
    echo "\n$primerNumero es mayor que $segundoNumero\n";
} elseif ($primerNumero < $segundoNumero) {
    echo "\n$segundoNumero es mayor que $primerNumero\n";
} else {
    echo "\nAmbos números son iguales\n";
}

//------------------------------------------------------------------------------

// Variable
$numeroSeleccionado = 7;

// Determinar si es par o impar
if ($numeroSeleccionado % 2 == 0) {
    echo "\n$numeroSeleccionado es un número par\n";
} else {
    echo "\n$numeroSeleccionado es un número impar\n";
}

//------------------------------------------------------------------------------

// Número para calcular el factorial
$numeroBase = 7;

// Inicializar variables
$factorial = 1;
$i = 1;

// Calcular el factorial con un bucle while
while ($i <= $numeroBase) {
    $factorial *= $i;
    $i++;
}

// Mostrar el resultado por pantalla
echo "\nEl factorial de $numeroBase es: $factorial\n";

//------------------------------------------------------------------------------

// Generar 20 números aleatorios
$numeros = [];
for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 100); //Números aleatorios entre 1 y 100
}

// Mostrar los números desordenados
echo "\nNúmeros generados desordenados: " . implode(", ", $numeros) . "\n";

// Ordenar los números de mayor a menor
for ($i = 0; $i < count($numeros); $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] < $numeros[$j]) {
            // Intercambiar valores
            $temp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $temp;
        }
    }
}

// Mostrar los números ordenados
echo "\nNúmeros ordenados de mayor a menor: " . implode(", ", $numeros) ;
echo "\n";

//------------------------------------------------------------------------------

// Array Asociato y Foreach
// Crear un array asociativo con datos de 10 alumnos
$alumnos = array(
    array('alumno' => 'CARLOS SUCHITE', 'curso' => 'CALCULO II', 'nota' => 85),
    array('alumno' => 'ERICK RODAS', 'curso' => 'CALCULO I', 'nota' => 92),
    array('alumno' => 'ANDREW LOPEZ', 'curso' => 'PROGRAMACION II', 'nota' => 78),
    array('alumno' => 'GEOVANNY CHEVERRIA', 'curso' => 'PROGRAMACION III', 'nota' => 88),
    array('alumno' => 'ANDY AQUINO', 'curso' => 'FISICA II', 'nota' => 95),
    array('alumno' => 'GABRIEL ORTIZ', 'curso' => 'METODOS NUMERICOS', 'nota' => 89),
    array('alumno' => 'CARLOS GUERRA', 'curso' => 'ESTADISTICA II', 'nota' => 80),
    array('alumno' => 'BYRON MARTINEZ', 'curso' => 'PROGRAMACION III', 'nota' => 75),
    array('alumno' => 'ANTHONY ALDANA', 'curso' => 'ELECTRONICA ANALOGICA', 'nota' => 91),
    array('alumno' => 'FABRICIO ESCOBAR', 'curso' => 'EMPRENDEDORES DE NEGOCIOS', 'nota' => 87),
);

// Mostrar la información de los alumnos
foreach ($alumnos as $alumno) {
    echo "\nAlumno: {$alumno['alumno']}, Curso: {$alumno['curso']}, Nota: {$alumno['nota']}\n";
}

//------------------------------------------------------------------------------
// https://onlinephp.io/c/a1809b
//------------------------------------------------------------------------------
?>