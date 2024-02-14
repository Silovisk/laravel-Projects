const PageSorteador = {
    init: function() {
        console.log("PageSorteador init");
        this.sortear();
        this.reiniciar();
    },

    getNumber: function(id) {
        return parseInt($(id).val(), 10);
    },

    sortear: function() {
        const btnSortear = $("#btn-sortear");
        btnSortear.off('click').on("click", () => {
            const quantidadeDeNumeros = this.getNumber("#quantidade");
            const numeroDe = this.getNumber("#de");
            const numeroAte = this.getNumber("#ate");
            const resultados = Array.from({length: quantidadeDeNumeros}, () => Math.floor(Math.random() * (numeroAte - numeroDe + 1)) + numeroDe);
            $("#resultado").children().text("Números sorteados: " + resultados.join(", "));
        });
        
    },

    reiniciar: function() {
        const btnReiniciar = $("#btn-reiniciar");
        btnReiniciar.off('click').on("click", () => {
            ["#quantidade", "#de", "#ate"].forEach(id => $(id).val(""));
            $("#resultado").children().text('Números sorteados: nenhum até agora');
        });
    },
};

PageSorteador.init();
