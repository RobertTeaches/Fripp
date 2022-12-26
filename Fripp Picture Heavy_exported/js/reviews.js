let reviewSection;
let reviewCarosal;
/*Reviews will looks like:
{
    'name': "First Last",
    'review': "Lorem",
    'stars': 4,
    'origin': "http://..."
}

*/
let reviewElements = []

//Reviews should be loaded from site database + vrbo reviews meaning...
//We do this in php :)
async function congegrateReviews()
{
    let result = await fetch('./functions/getReviews.php')
    let reviewJson = await result.json()

    if (!reviewJson || reviewJson['error']) { /*Extra Error Handling*/return; }
    let reviewLimit = 10;

    let orig_card = document.querySelector('#original-card')
    let caresal = document.querySelector('#review-caresal')
    //Add all reviews to carosael
    for (let i = 0; i < reviewLimit; i++) 
    {
        if (i >= reviewJson['reviews'].length) continue;
        let review = reviewJson['reviews'][i]
        console.table(review);
        let copy = orig_card.cloneNode(true);
        copy.querySelector('.stars').innerText = review['stars']
        copy.querySelector('.review-paragraph').innerText = review['review'];
        copy.id = review['name'] + " review (" + i + ")"
        caresal.appendChild(copy);
        reviewElements.push(copy);
    }
    //Clear fake original copy
    orig_card.remove();

    //Hide all but first review
    for (let index = 1; index < reviewElements.length; index++) {
        const element = reviewElements[index];
        element.style.display = 'none'
    }
}

let currentReview = 0;

function showNext()
{
    if(currentReview >= 0 && currentReview < reviewElements.length)
        reviewElements[currentReview].style.display = 'none';
    currentReview++;
    if(currentReview >= reviewElements.length)
        currentReview = 0;

    reviewElements[currentReview].style.display = 'flex';
    
}

function showLast()
{
    if(currentReview >= 0 && currentReview < reviewElements.length)
        reviewElements[currentReview].style.display = 'none';
    currentReview--;
    if(currentReview < 0)
        currentReview = reviewElements.length;

    reviewElements[currentReview].style.display = 'flex';

}

