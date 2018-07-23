var Research = {
	api: 'https://kanjialive-api.p.mashape.com/api/public/kanji/',
	kanji: null,
	kanjiElt: null,
	sectionElt: null,

	init() {
		this.kanjiElt = $('#r-kanji');
		this.kanji = this.kanjiElt.text().trim();
		this.api = this.api + this.kanji;
		this.buildAjax(this.api);		
	},

	buildAjax(api) {
		Ajax.ajaxGet(this.api, function(answer) {
			var infos = JSON.parse(answer);
			if (infos) {
				var error = infos['error'];
				if (error == undefined) {
					$('#r-video').removeClass('d-none');				

					var infoKanji = infos['kanji'];
					var video = infoKanji['video']['mp4'];				
					var onKata = infoKanji['onyomi']['katakana'];
					var kunHira = infoKanji['kunyomi']['hiragana'];

					$('#r-onyomi').text(onKata);			
					$('#r-kunyomi').append(kunHira);
					$('#r-video').attr('href', video);
				} else {
					$('#r-onyomi').text('...');			
					$('#r-kunyomi').append('...');
				}
			} else {
				$('#r-onyomi').text('...');			
				$('#r-kunyomi').append('...');
			}
				
		});
	}
};

Research.init();