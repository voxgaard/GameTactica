//Convert entered text into less precise text better for searching, especially if mixing languages which share an alphabet.
const getPlainText = (text) => {
    return text.normalize('NFD').replace(/[\u0300-\u036f]/g, '')
}

//Called onkeyup in search
//Query all articles in the document
const doSearch = (e) => {
    //Document search via Regular Expression with flag for case-insensitive detection
    const pattern = new RegExp(getPlainText(e.target.value), 'i')
    //Scan article elements only
    for(const article of document.querySelectorAll('article')) { 
        const found = getPlainText(article.textContent).search(pattern) !== -1 //Truth variable created when there is a pattern match in an article
        article.style.display = found ? 'inherit' : 'none' // If found is true, inherit the display of the parent element, otherwise purge the article's display
    }
}

//Called by load eventListener
//Injects a text input field into the page
const loadSearch = () => {
    //Check whether this page needs a search bar (#search = true(1))
    const search = document.querySelector('#search')
    //If so, apply the input field and functionality to the <div> flagged for searching
    if(search) {
        const input = document.createElement('input')
        input.onkeyup = doSearch //when to search.  Passes value to doSearch
        search.appendChild(input) //append the user input to the search node in DOM
    }
}
//Trigger DOM element when page completes loading
addEventListener('load', loadSearch)