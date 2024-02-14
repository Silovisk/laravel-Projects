const Common = {
    init: () => {
        Common.setGlobalListeners();

        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: "Selecione um efeito colateral",
                allowClear: true
            });

            $("#summernote").summernote({
                height: 300,
            });

        });

    },

    setGlobalListeners: () => {
        $(".global-form").submit(() => {
            $(".submit").prop("disabled", true);
        });

        $(".money").each(function () {
            $(this).mask("000.000.000.000.000,00", { reverse: true });
        });

        $(".number").each(function () {
            $(this).mask("0#");
        });

        $(".weight").each(function () {
            $(this).mask("000.00", { reverse: true });
        });

        $(".zipcode").each(function () {
            $(this).mask("00.000-000");
        });

        const SPMaskBehavior = function (val) {
                return val.replace(/\D/g, "").length <= 11
                    ? "000.000.000-009999"
                    : "00.000.000/0000-00";
            },
            spOptions = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                },
            };

        const SPMaskBehaviorPhone = function (val) {
                return val.replace(/\D/g, "").length === 11
                    ? "(00) 0 0000-0000"
                    : "(00) 0000-00009";
            },
            spOptionsPhone = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(
                        SPMaskBehaviorPhone.apply({}, arguments),
                        options
                    );
                },
            };

        $(".cpf").mask("000.000.000-00", { reverse: true });
        $(".cnpj").mask("00.000.000/0000-00", { reverse: true });

        $(".cpf-cnpj").each((i, el) => {
            $(el).mask(SPMaskBehavior, spOptions);
        });

        $(".phone").each((i, el) => {
            $(el).mask(SPMaskBehaviorPhone, spOptionsPhone);
        });
    },

    formatProperUsername: (str) => {
        return _.deburr(str.replaceAll(" ", "").toLowerCase());
    },

    formatProperPersonName: (text) => {
        text = text.toLowerCase();
        let preps = [
            " De ",
            " Da ",
            " Do ",
            " Dos ",
            " E ",
            " O ",
            " Em ",
            " Ou ",
            " Os ",
            " Das ",
        ];
        text = text.replace(/(^|\s)\S/g, function (t) {
            return t.toUpperCase();
        });
        let capitalizedText = text;
        preps.map((prep) => {
            capitalizedText = capitalizedText.replaceAll(
                prep,
                prep.toLowerCase()
            );
        });
        return capitalizedText;
    },
    uuid: () => {
        let dt = new Date().getTime();
        let uuid = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(
            /[xy]/g,
            function (c) {
                var r = (dt + Math.random() * 16) % 16 | 0;
                dt = Math.floor(dt / 16);
                return (c == "x" ? r : (r & 0x3) | 0x8).toString(16);
            }
        );
        return uuid;
    },
};

Common.init();
