var Kanji = {
	url: location.href,
	kanjiElt: null,
	kanjiOpt: null,
	apiLink: 'https:\/\/kanjialive-api.p.mashape.com/api/public/kanji/',

	init() {
		this.kanjiElt = document.getElementById('research-kanji');
		this.kanjiOpt = this.kanjiElt.textContent;
		this.apiLink = this.apiLink + this.kanjiOpt;
		console.log(this.apiLink);
	},

	apiInit() {
		Ajax.ajaxGet(this.apiLink, function(e) {

		});
	}
};

Kanji.init();