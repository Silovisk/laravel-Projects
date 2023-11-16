const Page = {
    init: () => {
        Page.ajaxViacep();
    },

    destroyDirector: (data) => {
        console.log("🚀 ~ file: index.js:45 ~ Page.data:", data);
        Swal.fire({
            title: 'Tem certeza, que deseja apagar o diretor ' + data.name + ' ?',
            text: "Você não poderá reverter isso!",
            icon: 'warning',
            reverseButtons: true,
            showCancelButton: true,
            confirmButtonColor: '#2c3e50',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, apague!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/diretores/" + data.id,
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        Swal.fire(
                            'Apagado!',
                            'O Diretor foi apagado.',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/admin/diretores";
                            }
                        });
                    },
                    error: function (response) {
                        Swal.fire(
                            'Erro!',
                            'Ocorreu um erro ao apagar o diretor.',
                            'error'
                        )
                    }
                });
            }
        })
    },

    ajaxViacep: () => {
        $("#zipcode").on("blur", function () {
            let zipcode = $(this).val().replace(/\D/g, "");
            $.ajax({
                url: "https://viacep.com.br/ws/" + zipcode + "/json/",
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $("#address").val(data.logradouro);
                    $("#neighbourhood").val(data.bairro);
                    $("#city").val(data.localidade);
                    $("#state").val(data.uf);
                    $("#complement").val(data.complemento);
                },
                error: function () {
                    Swal.fire(
                        'Erro!',
                        'Ocorreu um erro ao buscar o CEP.',
                        'error'
                    )
                },
            });
        });
    },
};


Page.init();
