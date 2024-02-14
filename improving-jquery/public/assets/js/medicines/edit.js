const Page = {
    init: () => {
        // Page.setGlobalListeners();

        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: "Selecione um efeito colateral",
                allowClear: true,
                dropdownCssClass: 'custom-select2-dropdown'
            });
        });
    },
    // setGlobalListeners: () => {
    // },
};

Page.init();
