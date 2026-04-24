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
        'limite_alto' => 80, 
        'limite_baixo' => 20,
        'imagem' => './Imagem/chave-de-fenda.webp',
        'desc' => 'Ferramenta essencial para parafusos'
    ],
    [
        'id' => 2,
        'nome' => 'Tinta Acrílica 18L',
        'preco' => 189.90,
        'cat' => 'Acabamento',
        'qtd' => 40,
        'limite_alto' => 50, 
        'limite_baixo' => 10,
        'imagem' => './Imagem/tinta_acrilica.webp',
        'desc' => 'Tinta acrílica lavável para paredes'
    ],
    [
        'id' => 3,
        'nome' => 'Tijolo Cerâmico',
        'preco' => 1.20,
        'cat' => 'Bruto',
        'qtd' => 1000,
        'limite_alto' => 800,
        'limite_baixo' => 300,
        'imagem' => './Imagem/tijolo.jpg',
        'desc' => 'Tijolo resistente para alvenaria'
    ],
    [
        'id' => 4,
        'nome' => 'Furadeira Elétrica',
        'preco' => 249.90,
        'cat' => 'Ferramentas',
        'qtd' => 4,
        'limite_alto' => 25,
        'limite_baixo' => 5,
        'imagem' => './Imagem/furadeira.jpeg',
        'desc' => 'Furadeira potente para uso profissional'
    ],
    [
        'id' => 5,
        'nome' => 'Cimento 50kg',
        'preco' => 38.90,
        'cat' => 'Bruto',
        'qtd' => 200,
        'limite_alto' => 150,
        'limite_baixo' => 50,
        'imagem' => './Imagem/cimento.jfif',
        'desc' => 'Cimento resistente ideal para construção geral'
    ],
    [
        'id' => 6,
        'nome' => 'Verniz Madeira',
        'preco' => 79.90,
        'cat' => 'Acabamento',
        'qtd' => 35,
        'limite_alto' => 40,
        'limite_baixo' => 10,
        'imagem' => './Imagem/verniz.jfif',
        'desc' => 'Proteção e brilho para madeira'
    ],
    [
        'id' => 7,
        'nome' => 'Areia Média (m³)',
        'preco' => 120.00,
        'cat' => 'Bruto',
        'qtd' => 15,
        'limite_alto' => 20,
        'limite_baixo' => 5,
        'imagem' => './Imagem/areia.jfif',
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
        'nome' => 'Giodásio Filho',
        'cargo' => 'Gerente de Vendas',
        'salario' => 3800,
        'vendas' => 29
    ],
    [
        'nome' => 'Raissa Carvalho',
        'cargo' => 'Vendedor',
        'salario' => 2300,
        'vendas' => 15
    ],
    [
        'nome' => 'Ana Costa',
        'cargo' => 'Vendedor',
        'salario' => 2300,
        'vendas' => 28
    ],
    [
        'nome' => 'Carlos Lima',
        'cargo' => 'Vendedor',
        'salario' => 2300,
        'vendas' => 25
    ],
    [
        'nome' => 'Natal Silverio',
        'cargo' => 'Vendedor-Sênior',
        'salario' => 2950,
        'vendas' => 13
    ],
    [
        'nome' => 'Catarina Zimmer',
        'cargo' => 'Vendedor',
        'salario' => 2300,
        'vendas' => 14
    ],
    [
        'nome' => 'Maria das Dores',
        'cargo' => 'Vendedor-Sênior',
        'salario' => 2950,
        'vendas' => 19
    ],
    [
        'nome' => 'Givanildo Almeida',
        'cargo' => 'Vendedor-Junior',
        'salario' => 1621,
        'vendas' => 16
    ],
    [
        'nome' => 'Rodrigo Stanieck',
        'cargo' => 'Vendedor',
        'salario' => 2300,
        'vendas' => 20
    ],
    [
        'nome' => 'Carol Azevedo',
        'cargo' => 'Vendedor-Junior',
        'salario' => 1621,
        'vendas' => 22
    ]
];