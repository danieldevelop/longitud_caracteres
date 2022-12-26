<?php

##
## Estilos basicos
##
$color_danger = "color: #D83B01";
$fw_bold = "font-weight: bold";
$ft_sans = "font-family: Arial, sans-serif";
$margin_0 = "margin: 0";


$nombreLibro = "Porque caminar si podes volar";
$longitudCaracteres = strlen($nombreLibro);

echo "<p style='$ft_sans;'>
    La frase <span style='$color_danger; $fw_bold;'>$nombreLibro</span> tiene 
    $longitudCaracteres caracteres.
</p>";



##
## Mostramos el texto de forma vertical
## ---
## Devolvemos un array, indicando el delimitador del string
##
$caracter = explode(" ", $nombreLibro);
echo "<p style='$ft_sans;'><u>Texto verticalmente</u>.</p>";

for ($i = 0; $i < sizeof($caracter); $i++) {
    echo "<p style='$ft_sans; $margin_0'>
        $caracter[$i]
    </p>";
}
