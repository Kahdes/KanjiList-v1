var Research = {
	kanjiOpt: null,
	meaningOpt: null,
	chineseOpt: null,
	japaneseOpt: null,

	init() {
		this.kanjiOpt = document.getElementById('research-btn-kanji');
		this.meaningOpt = document.getElementById('research-btn-meaning');
		this.chineseOpt = document.getElementById('research-btn-chinese');
		this.japaneseOpt = document.getElementById('research-btn-japanese');

		this.kanjiOpt.addEventListener('click', function(e) {
			e.preventDefault();
		});
		this.meaningOpt.addEventListener('click', function(e) {
			e.preventDefault();
		});
		this.chineseOpt.addEventListener('click', function(e) {
			e.preventDefault();
		});
		this.japaneseOpt.addEventListener('click', function(e) {
			console.log('OK');
			e.preventDefault();
		});
	}
};

Research.init();
