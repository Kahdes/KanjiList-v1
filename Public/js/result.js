var Research = {
    api: 'https://kanjialive-api.p.mashape.com/api/public/kanji/',

    init() {
        this.kanjiElt = $('#r-kanji');
        this.kanji = this.kanjiElt.text().trim();
        this.api = this.api + this.kanji;
        this.buildAjax(this.api);       
    },

    buildAjax(api) {
        $('#r-onyomi').text('Chargement katakana...');
        $('#r-kunyomi').text('Chargement hiragana...');
        Ajax.ajaxGet(this.api, function (answer) {
            var infos = JSON.parse(answer);
            console.log(infos);
            if (infos) {
                var error = infos['error'];
                if (error == undefined) {
                    var infoKanji = infos['kanji'];
                    var video = infoKanji['video']['mp4'];
                    var onKata = infoKanji['onyomi']['katakana'];
                    var kunHira = infoKanji['kunyomi']['hiragana'];

                    $('#r-onyomi').text(onKata);
                    $('#r-kunyomi').text(kunHira);
                    $('#r-video').attr('href', video);
                    $('#r-video').removeClass('d-none');
                } else {
                    $('#r-onyomi').text('...');
                    $('#r-kunyomi').text('...');
                }
            } else {
                $('#r-onyomi').text('...');
                $('#r-kunyomi').text('...');
            }
        });
    }
};

Research.init();
