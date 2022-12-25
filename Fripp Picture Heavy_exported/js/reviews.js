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
let allReviews = []

//Reviews should be loaded from site database + vrbo reviews meaning...
//We do this in php :)
async function congegrateReviews()
{
    let result = await fetch('./functions/getReviews.php')
    let resultJson = await result.json()

    if(!resultJson || resultJson['error']){ /*Extra Error Handling*/return;}
    let reviewLimit = 10;

    let orig_card = document.querySelector('#original-card')
    let caresal = document.querySelector('#review-caresal')
    for (let i = 0; i < reviewLimit; i++) 
    {
        let review = reviewJson['reviews'][i]
        let copy = orig_card.cloneNode(true);
        copy.querySelector('.stars').innerText = review['stars']
        copy.querySelector('.review-paragraph').innerText = review['review'];
        copy.id = review['name'] + " review ("+i+")"
        caresal.appendChild(copy);
    }
    orig_card.remove();
}

