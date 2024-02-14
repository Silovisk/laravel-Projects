const Page = {
    init: () => {
        // Page.setGlobalListeners();
        $(document).ready(function() {
            $('#modalSelect2').select2({
                dropdownParent: $('#newMedicineModal')
            });
        });
    },
    // setGlobalListeners: () => {
    // },
};

Page.init();
