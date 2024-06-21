<?php
    function imprimir_matriz($matriz){
        foreach($matriz as $fila){
            echo implode (" ", $fila). "\n";
        }//fin del for
    }//fin de la funcion

    function matriz_triangular($matriz){
        $fila = count($matriz);
        $cds = count($matriz[0]);
        for ($i=0; $i < $fila-1; $i++) { 
            $pivote = $matriz[$i][$i];
            for ($j=$i+1; $j < $fila; $j++) { 
                $ratio = $matriz[$j][$i]/$pivote;
                for ($k=$i; $k < $cds; $k++) { 
                    $matriz[$j][$k]-= $ratio * $matriz[$i][$k];
                }//fin del for
            }//fin del for
        }// fin del for
        return $matriz;
    }

    $matriz = [
            [2,1,-1,8],
            [-3,-1,2,-11],
            [-2,4,1,3]
    ];

    $matriz_escalonada = matriz_triangular($matriz);
    imprimir_matriz($matriz_escalonada);

?>

<?php


$matrizA = [
    [46, 7, 8],
    [17, 6, 25],
    [31, 2, 64]
];


$matrizB = [
    [3, 6, 9],
    [12, 15, 17],
    [21, 24, 27]
];

function imprimir_matriz1($matrizA, $matrizB){
    foreach($matriz as $fila){
        echo implode (" ", $fila). "\n";
    }//fin del for
}//fin de la funcion
// Fusionar matrices
function fusionarMatrices($matrizA, $matrizB) {
    $matrizFusionada = [];
    for ($i = 0; $i < count($matrizA); $i++) {
        $matrizFusionada[$i] = [];
        for ($j = 0; $j < count($matrizA[0]); $j++) {
            $matrizFusionada[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
        }//fin del for
    }//fin del for
    return $matrizFusionada;

    echo [$matriz_fusionada = fusionarMatrices($matrizA, $matrizB)];
    echo imprimir_matriz1($matriz_fusionada);

}

// 2. Producto de una matriz por un escalar
function productoEscalar($matriz, $escalar) {
    $matrizResultado = [];
    for ($i = 0; $i < count($matriz); $i++) {
        $matrizResultado[$i] = [];
        for ($j = 0; $j < count($matriz[0]); $j++) {
            $matrizResultado[$i][$j] = $matriz[$i][$j] * $escalar;
        }//fin del for
    }//fin del for
    return $matrizResultado;
}

// 3. Matriz Transversal
function matrizTransversal($matriz) {
    $matrizTransversal = [];
    for ($i = 0; $i < count($matriz[0]); $i++) {
        $matrizTransversal[$i] = [];
        for ($j = 0; $j < count($matriz); $j++) {
            $matrizTransversal[$i][$j] = $matriz[$j][$i];
        }//fin del for
    }//fin del for
    return $matrizTransversal;
}
