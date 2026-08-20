<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["txtNome"]);
    $valorCompra = floatval(str_replace(",", ".", $_POST["txtValorCompra"]));
    $formaPagamento = $_POST["cmbPag"];

    $percentualDesconto = 0;
    $descricaoPagamento = "";

    if ($formaPagamento == "deposito") {
        $percentualDesconto = 0.10;
        $descricaoPagamento = "Depósito";
    } elseif ($formaPagamento == "boleto") {
        $percentualDesconto = 0.08;
        $descricaoPagamento = "Boleto";
    } elseif ($formaPagamento == "cartaoCredito") {
        $percentualDesconto = 0;
        $descricaoPagamento = "Cartão de crédito";
    } else {
        $resultado = "<div class='mensagem erro'>Forma de pagamento inválida.</div>";
    }

    if ($resultado == "") {
        $valorDesconto = $valorCompra * $percentualDesconto;
        $valorFinal = $valorCompra - $valorDesconto;

        $valorCompraFormatado = number_format($valorCompra, 2, ",", ".");
        $valorDescontoFormatado = number_format($valorDesconto, 2, ",", ".");
        $valorFinalFormatado = number_format($valorFinal, 2, ",", ".");

        if ($percentualDesconto > 0) {
            $resultado = "
                <div class='mensagem sucesso'>
                    <h2>Resultado da compra</h2>
                    <p>Olá, <strong>$nome</strong>!</p>
                    <p>Forma de pagamento escolhida: <strong>$descricaoPagamento</strong>.</p>
                    <p>Valor original da compra: <strong>R$ $valorCompraFormatado</strong>.</p>
                    <p>Desconto aplicado: <strong>R$ $valorDescontoFormatado</strong>.</p>
                    <p>Valor final com desconto: <strong>R$ $valorFinalFormatado</strong>.</p>
                </div>
            ";
        } else {
            $resultado = "
                <div class='mensagem sucesso'>
                    <h2>Resultado da compra</h2>
                    <p>Olá, <strong>$nome</strong>!</p>
                    <p>Forma de pagamento escolhida: <strong>$descricaoPagamento</strong>.</p>
                    <p>Valor original da compra: <strong>R$ $valorCompraFormatado</strong>.</p>
                    <p>Esta forma de pagamento não possui desconto.</p>
                    <p>Valor final da compra: <strong>R$ $valorFinalFormatado</strong>.</p>
                </div>
            ";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Promoção Madeira e Cia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <section class="card">
            <h1>Madeira e Cia Ltda.</h1>
            <p class="subtitulo">Promoção de aniversário</p>

            <form method="POST" action="">
                <label for="txtNome">Nome do cliente</label>
                <input type="text" id="txtNome" name="txtNome" required placeholder="Digite seu nome">

                <label for="txtValorCompra">Valor da compra</label>
                <input type="number" id="txtValorCompra" name="txtValorCompra" step="0.01" min="0" required placeholder="Ex: 250.00">

                <label for="cmbPag">Forma de pagamento</label>
                <select id="cmbPag" name="cmbPag" required>
                    <option value="">Selecione</option>
                    <option value="deposito">Depósito - 10% de desconto</option>
                    <option value="boleto">Boleto - 8% de desconto</option>
                    <option value="cartaoCredito">Cartão de crédito - sem desconto</option>
                </select>

                <button type="submit">Calcular desconto</button>
            </form>

            <?php echo $resultado; ?>
        </section>
    </main>

    <!--
        Comentário reflexivo:
        Para resolver a atividade, comecei comparando o enunciado com o código recebido.
        O principal problema estava nos descontos: o depósito precisava dar 10% e o boleto
        precisava dar 8%, mas no código original esses valores estavam trocados.

        Depois disso, eu separei a lógica em algumas variáveis simples, como percentualDesconto
        e descricaoPagamento, porque achei que assim ficaria mais fácil de entender o cálculo.
        O valor final foi feito pegando o valor da compra, calculando o desconto e depois
        subtraindo esse desconto do total.

        No visual da página, escolhi tons de marrom e bege porque combinam com o nome da
        empresa Madeira e Cia. A intenção foi fazer um formulário simples, centralizado e fácil
        de preencher. Também usei number_format() para mostrar os valores em reais com duas
        casas decimais, deixando a resposta mais clara para o cliente.
    -->
</body>
</html>
