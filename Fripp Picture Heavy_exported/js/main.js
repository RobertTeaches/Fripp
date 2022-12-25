
let nextArticleID = 1;
const visibleAds = new Set();
let previouslyVisibleAds = null;

let adObserver;
let refreshIntervalID = 0;

window.onload = e =>
{

    document.addEventListener("visibilitychange", handleVisibilityChange, false);

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: [0.0, 0.75]
    };

    adObserver = new IntersectionObserver(intersectionCallback,
        observerOptions);

    let views = document.getElementsByClassName("on-view")
    for (let i = 0; i < views.length; i++)
    {
        adObserver.observe(views[i])
    }

    congegrateReviews();

}

function handleVisibilityChange()
{
    if (document.hidden)
    {

    } else
    {

    }
}

function intersectionCallback(entries)
{
    entries.forEach((entry) =>
    {
        const adBox = entry.target;
        if (entry.isIntersecting)
        {
            if(!adBox.className.includes("fade"))
            {
                adBox.classList.add("fade")
            }
        } else
        {

        }
    });
}

function handleRefreshInterval()
{
    const redrawList = [];
    visibleAds.forEach((adBox) =>
    {
        const previousTime = adBox.dataset.totalViewTime;
        updateAdTimer(adBox);
        if (previousTime !== adBox.dataset.totalViewTime)
        {
            redrawList.push(adBox);
        }
    });
    if (redrawList.length)
    {
        window.requestAnimationFrame((time) =>
        {
            redrawList.forEach((adBox) =>
            {
                drawAdTimer(adBox);
            });
        });
    }
}