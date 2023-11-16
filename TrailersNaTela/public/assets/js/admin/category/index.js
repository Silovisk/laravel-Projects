const Page = {
    init: () => {
    },

    destroyCategory: (data) => {
        console.log("🚀 ~ file: index.js:45 ~ Page.data:", data);
        Swal.fire({
            title: 'Tem certeza, que deseja apagar a categoria ' + data.name + ' ?',
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
                    url: "/admin/categorias/" + data.id,
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        Swal.fire(
                            'Apagado!',
                            'A categoria foi apagada.',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/admin/categorias";
                            }
                        });
                    },
                    error: function (response) {
                        Swal.fire(
                            'Erro!',
                            'Ocorreu um erro ao apagar a categoria.',
                            'error'
                        )
                    }
                });
            }
        })
    }
};


Page.init();
