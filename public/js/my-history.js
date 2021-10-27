function clickSaved() {
    document.querySelector('.saved-title').classList.add('select-title');
    document.querySelector('.applied-title').classList.remove('select-title');
    document.querySelector('.offered-title').classList.remove('select-title');
	document.querySelector('.my-history-section-saved').classList.remove('displayNone');
    document.querySelector('.my-history-section-applied').classList.add('displayNone');
    document.querySelector('.my-history-section-offered').classList.add('displayNone');
}

function clickApplied() {
    document.querySelector('.saved-title').classList.remove('select-title');
    document.querySelector('.applied-title').classList.add('select-title');
    document.querySelector('.offered-title').classList.remove('select-title');
	document.querySelector('.my-history-section-saved').classList.add('displayNone');
    document.querySelector('.my-history-section-applied').classList.remove('displayNone');
    document.querySelector('.my-history-section-offered').classList.add('displayNone');
}

function clickOffered() {
    document.querySelector('.saved-title').classList.remove('select-title');
    document.querySelector('.applied-title').classList.remove('select-title');
    document.querySelector('.offered-title').classList.add('select-title');
	document.querySelector('.my-history-section-saved').classList.add('displayNone');
    document.querySelector('.my-history-section-applied').classList.add('displayNone');
    document.querySelector('.my-history-section-offered').classList.remove('displayNone');
}