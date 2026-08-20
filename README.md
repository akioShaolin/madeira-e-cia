# Madeira e Cia Ltda. - Promoção de Aniversário

Projeto feito para a atividade de Desenvolvimento de Sistemas, usando PHP, HTML e CSS.

A ideia é simples: o cliente informa o nome, o valor da compra e a forma de pagamento. Depois disso, o sistema calcula o desconto correto e mostra o valor final da compra.

## Regras da promoção

- Depósito: 10% de desconto
- Boleto: 8% de desconto
- Cartão de crédito: sem desconto

## O que foi corrigido

No código original, os descontos de depósito e boleto estavam invertidos. Também faltava mostrar o valor final da compra depois do desconto.

Nesta versão, o sistema calcula:

```text
valor do desconto = valor da compra * percentual
valor final = valor da compra - desconto
```

## Escolha visual

Usei tons de marrom e bege porque combinam com o nome da empresa, já que "Madeira e Cia" lembra madeira, loja, móveis e construção. O formulário ficou centralizado para facilitar o preenchimento.

## Tecnologias usadas

- HTML
- CSS
- PHP

## Como executar

Para testar, coloque os arquivos em um servidor local, como XAMPP ou WAMP, e acesse o arquivo `index.php` pelo navegador.

Exemplo no XAMPP:

```text
htdocs/madeira-e-cia-promocao/index.php
```

Depois é só testar as três formas de pagamento.

## Autor

Pedro Akio Sakuma
