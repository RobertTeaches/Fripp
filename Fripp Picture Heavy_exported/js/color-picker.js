let startTransparency = {}
window.addEventListener('load', function() {
    let pPicker = document.querySelector("#primary-color")
    let aPicker = document.querySelector("#accent-color")
    let opPicker = document.querySelector("#background-color")
    let offPicker = document.querySelector("#off-color")
    let opOffPicker = document.querySelector("#off-background-color")
    let pColor = getComputedStyle(document.querySelector(":root")).getPropertyValue("--primary-color")
    // pColor = pColor.substring(1)

    let ofColor = getComputedStyle(document.querySelector(":root")).getPropertyValue("--off-color")
    // ofColor = ofColor.substring(1)
    
    let opOfColor = getComputedStyle(document.querySelector(":root")).getPropertyValue("--off-background-color")
    // opOfColor = opOfColor.substring(1)
    
    let opColor = getComputedStyle(document.querySelector(":root")).getPropertyValue("--background-color")
    // opColor = opColor.substring(1)

    let aColor = getComputedStyle(document.querySelector(":root")).getPropertyValue("--accent-color")
    //aColor = aColor.substring(1)
    
    pPicker.value = pColor 
    aPicker.value = aColor 
    opPicker.value = opColor 
    offPicker.value = ofColor 
    opOffPicker.value = opOfColor 
}, false)

function colorUpdate(input) {
    // console.log(input.value)
    let cssVar = "--" + input.id
    document.querySelector(":root").style.setProperty(cssVar, input.value)
}

function saveColors()
{
    let output = "";
    let colors = document.querySelectorAll("input[type=color]")
    for (let i = 0; i < colors.length; i++)
    {
        output += "--" + colors[i].id + ":" + colors[i].value + ";\n";
    }
    navigator.clipboard.writeText(output);
    console.log(output)
}