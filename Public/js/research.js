var Research = {
    formElt: null,
    inputElt: null,
    kanjiRegex: /^([一-龯])+$/,
    basicRegex: /^([a-zA-Zéèàùêëô]){1,}([\w\s,])*$/i,

    init() {
        this.formElt = $('.form')[0];
        this.regex = (this.formElt.id === 'kanji-form') ? this.kanjiRegex : this.basicRegex;
        this.analyze(this.formElt, this.regex);
    },

    analyze(form, regex) {
        let status = null;
        form.addEventListener('change', function (e) {
            let inputValue = $('.research')[0].value;

            if (regex.test(inputValue) || inputValue === "") {
                if ($('.research')[0].classList.contains('custom-danger')) {
                    $('.research')[0].classList.remove('custom-danger');
                    $('.research-danger')[0].classList.add('d-none');
                }
                status = 1;
            } else if (!regex.test(inputValue)) {
                $('.research')[0].classList.add('custom-danger');
                $('.research-danger')[0].classList.remove('d-none');

                status = 0;
            }

            form.addEventListener('submit', function (e) {
                if (status !== 1) {
                    e.preventDefault();
                }
            })
        });
    }
};

Research.init();
