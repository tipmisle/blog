const progressBars = $(".progress-inside");

	for(let $progressBar of progressBars) {		
		jQuery($progressBar).animate({
			width: $progressBar.dataset.progress + "%"
		}, 3000)
	}