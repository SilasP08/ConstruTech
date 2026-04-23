<?php

$categoria = [
    'Bruto' => 'Bruto',
    'Ferramentas' => 'Ferramentas',
    'Acabamento' => 'Acabamento'
];

$produtos_gerais = [

    [
        'id' => 1,
        'nome' => 'Chave de Fenda',
        'preco' => 14.50,
        'cat' => 'Ferramentas',
        'qtd' => 150,
        'limite_baixo' => 20,
        'limite_alto' => 80,
        'imagem' => 'https://images.unsplash.com/photo-1581147036324-cb0d38b8b1e4',
        'desc' => 'Ferramenta essencial para parafusos'
    ],
    [
        'id' => 2,
        'nome' => 'Tinta Acrílica 18L',
        'preco' => 189.90,
        'cat' => 'Acabamento',
        'qtd' => 40,
        'limite_baixo' => 10,
        'limite_alto' => 50,
        'imagem' => 'https://images.unsplash.com/photo-1581578731548-c64695cc6952',
        'desc' => 'Tinta acrílica lavável para paredes'
    ],
    [
        'id' => 3,
        'nome' => 'Tijolo Cerâmico',
        'preco' => 1.20,
        'cat' => 'Bruto',
        'qtd' => 1000,
        'limite_baixo' => 300,
        'limite_alto' => 800,
        'imagem' => 'https://images.unsplash.com/photo-1581093458791-9f3c3900dfb0',
        'desc' => 'Tijolo resistente para alvenaria'
    ],
    [
        'id' => 4,
        'nome' => 'Furadeira Elétrica',
        'preco' => 249.90,
        'cat' => 'Ferramentas',
        'qtd' => 30,
        'limite_baixo' => 5,
        'limite_alto' => 25,
        'imagem' => 'https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc',
        'desc' => 'Furadeira potente para uso profissional'
    ],
    [
        'id' => 5,
        'nome' => 'Cimento 50kg',
        'preco' => 38.90,
        'cat' => 'Bruto',
        'qtd' => 200,
        'limite_baixo' => 50,
        'limite_alto' => 150,
        'imagem' => 'https://images.unsplash.com/photo-1590080877777-6c4c9b9b5c42',
        'desc' => 'Cimento resistente ideal para construção geral'
    ],
    [
        'id' => 6,
        'nome' => 'Verniz Madeira',
        'preco' => 79.90,
        'cat' => 'Acabamento',
        'qtd' => 35,
        'limite_baixo' => 10,
        'limite_alto' => 40,
        'imagem' => 'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea',
        'desc' => 'Proteção e brilho para madeira'
    ],
    [
        'id' => 7,
        'nome' => 'Areia Média (m³)',
        'preco' => 120.00,
        'cat' => 'Bruto',
        'qtd' => 80,
        'limite_baixo' => 5,
        'limite_alto' => 20,
        'imagem' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994',
        'desc' => 'Areia de granulometria média para obras'
    ]


];

$funcionarios = [
    [
        'nome' => 'Vicente Souza',
        'cargo' => 'Dono',
        'salario' => 6000,
        'vendas' => 32
    ],
    [
        'nome' => 'Maria Souza',
        'cargo' => 'Gerente',
        'salario' => 4000,
        'vendas' => 18
    ],
    [
        'nome' => 'Carlos Lima',
        'cargo' => 'Vendedor',
        'salario' => 2300,
        'vendas' => 25
    ],
    [
        'nome' => 'Ana Costa',
        'cargo' => 'Vendedor',
        'salario' => 2300,
        'vendas' => 28
    ]
];