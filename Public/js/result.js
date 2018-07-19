var Research = {
	api: 'https://jisho.org/api/v1/search/words?keyword=',
	kanji: null,
	sectionElt: null,

	init() {
		this.kanji = document.getElementById('result-kanji').textContent;
		var short = this.kanji.trim();

		this.api = this.api + short;
		console.log(this.api);

		Ajax.ajaxGet(this.api, function() {
			console.log('OK');
		});
	}
};

Research.init();