<?php
// Establece el tipo de contenido a JSON
header('Content-Type: application/json');

// Lista de libros (puedes añadir más libros si lo deseas)
$libros = [
    [
        'titulo' => 'Cien años de soledad',
        'autor' => 'Gabriel García Márquez',
        'genero' => 'Realismo Mágico'
    ],
    [
        'titulo' => '1984',
        'autor' => 'George Orwell',
        'genero' => 'Distopía'
    ],
    [
        'titulo' => 'El gran Gatsby',
        'autor' => 'F. Scott Fitzgerald',
        'genero' => 'Ficción clásica'
    ],
    [
        'titulo' => 'Matar a un ruiseñor',
        'autor' => 'Harper Lee',
        'genero' => 'Ficción histórica'
    ],
    [
        'titulo' => 'La sombra del viento',
        'autor' => 'Carlos Ruiz Zafón',
        'genero' => 'Ficción contemporánea'
    ]
];

// Prepara la respuesta con la lista de libros
$response = array(
    'libros' => $libros
);

// Envía la respuesta como JSON
echo json_encode($response);
?>
