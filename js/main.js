
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
            if (!adBox.className.includes("fade"))
            {
                adBox.classList.add("fade")
                adBox.classList.remove("on-view")
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

function toggleDarkMode()
{
    let p = getComputedStyle(document.querySelector(":root")).getPropertyValue("--primary-color"), dP = getComputedStyle(document.querySelector("html")).getPropertyValue("--DM-primary-color")
    document.querySelector(":root").style.setProperty("--primary-color", dP) 
    document.querySelector("html").style.setProperty("--DM-primary-color", p) 
    
    let a = getComputedStyle(document.querySelector(":root")).getPropertyValue("--accent-color"), dA = getComputedStyle(document.querySelector("html")).getPropertyValue("--DM-accent-color")
    document.querySelector(":root").style.setProperty("--accent-color", dA) 
    document.querySelector("html").style.setProperty("--DM-accent-color", a) 
    
    let op = getComputedStyle(document.querySelector(":root")).getPropertyValue("--off-color"), dOp = getComputedStyle(document.querySelector("html")).getPropertyValue("--DM-off-color")
    document.querySelector(":root").style.setProperty("--off-color", dOp) 
    document.querySelector("html").style.setProperty("--DM-off-color", op) 
    
    let b = getComputedStyle(document.querySelector(":root")).getPropertyValue("--background-color"), dB = getComputedStyle(document.querySelector("html")).getPropertyValue("--DM-background-color")
    document.querySelector(":root").style.setProperty("--background-color", dB) 
    document.querySelector("html").style.setProperty("--DM-background-color", b) 
    
    let ob = getComputedStyle(document.querySelector(":root")).getPropertyValue("--off-background-color"), dOb = getComputedStyle(document.querySelector("html")).getPropertyValue("--DM-off-background-color")
    document.querySelector(":root").style.setProperty("--off-background-color", dOb) 
    document.querySelector("html").style.setProperty("--DM-off-background-color", ob) 

}
