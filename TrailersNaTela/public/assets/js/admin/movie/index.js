const Page = {
    init: () => {
        Page.initSelect2();
    },

    initSelect2: () => {
        $('.select2MovieCategory').select2(
            {
                placeholder: 'Selecione uma categoria',
                allowClear: true,
                language: {
                    noResults: function () {
                        return "Nenhuma categoria encontrada";
                    }
                },
            }
        );
    },

    destroyMovie: (data) => {
        console.log("🚀 ~ file: index.js:45 ~ Page.data:", data);
        Swal.fire({
            title: 'Tem certeza, que deseja apagar o filme ' + data.title + '?',
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
                    // rota para apagar o filme Route::delete('/{movie}', 'destroy')->name('movies.destroy');
                    url: "/admin/filmes/" + data.id,
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        Swal.fire(
                            'Apagado!',
                            'O filme foi apagado.',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/admin/filmes";
                            }
                        });
                    },
                    error: function (response) {
                        Swal.fire(
                            'Erro!',
                            'Ocorreu um erro ao apagar o filme.',
                            'error'
                        )
                    }
                });
            }
        })
    }
};


Page.init();
