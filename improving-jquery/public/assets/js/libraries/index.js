const Page = {
    init: () => {
        // Page.setGlobalListeners();

        $(document).ready(function() {
            $("#summernote").summernote({
                height: 300,
            });
        });
    },
    // setGlobalListeners: () => {
    // },
};

Page.init();
