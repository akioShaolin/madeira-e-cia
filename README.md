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

Para testar o projeto, utilizei o próprio servidor embutido do PHP. Baixei o PHP para Windows em formato `.zip`, extraí a pasta do PHP dentro da pasta do projeto e executei o `php.exe` pelo PowerShell.

No meu caso, o comando usado foi:

```powershell
& "C:\Users\pedro.sakuma\OneDrive - EcoPower Energia Solar\Área de Trabalho\madeira e cia\php-8.5.9-nts-Win32-vs17-x64\php.exe" -S localhost:8000
```

Depois é só testar as três formas de pagamento.

## Autor

Pedro Akio Sakuma
