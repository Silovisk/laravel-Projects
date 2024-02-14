const PageSorteador = {
    init: () => {
        console.log("PageSorteador init");
        PageSorteador.sortear();
    },

    sortear: () => {
        $("#btn-sortear").on("click", function () {
            let quantidadeDeNumeros = parseInt($("#quantidade").val(), 10);
            let numeroDe = parseInt($("#de").val(), 10);
            let numeroAte = parseInt($("#ate").val(), 10);
            let resultados = [];

            for (let i = 0; i < quantidadeDeNumeros; i++) {
                let randomNum =
                    Math.floor(Math.random() * (numeroAte - numeroDe + 1)) +
                    numeroDe;
                resultados.push(randomNum);
            }

            $("#resultado")
                .children()
                .text("Números sorteados: " + resultados.join(", "));
        });

        $("#btn-reiniciar").on("click", function () {
            $("#quantidade").val("");
            $("#de").val("");
            $("#ate").val("");
            $("#resultado")
                .children()
                .text('Números sorteados: nenhum até agora')
        });
    },
};

PageSorteador.init();
