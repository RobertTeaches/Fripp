let startTransparency = {}

//Hex conversion
function componentToHex(c){
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r,g,b){
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}

function hexToRGB(hex){
    let values = hex.substring(1)
    let r = values.substring(0,2)
    let g = values.substring(2,4)
    let b = values.substring(4,6)
    r = parseInt(r, 16)
    g = parseInt(g, 16)
    b = parseInt(b, 16)

    return `${r}, ${g}, ${b}`
}

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
    // pColor = pColor.substring(4, pColor.length - 1)
    pColor = pColor.split(",")
    pColor = rgbToHex(parseInt(pColor[0]), parseInt(pColor[1]), parseInt(pColor[2]))

    // aColor = aColor.substring(4, aColor.length - 1)
    aColor = aColor.split(",")
    aColor = rgbToHex(parseInt(aColor[0]), parseInt(aColor[1]), parseInt(aColor[2]))

    // opColor = opColor.substring(4, opColor.length - 1)
    opColor = opColor.split(",")
    opColor = rgbToHex(parseInt(opColor[0]), parseInt(opColor[1]), parseInt(opColor[2]))

    // ofColor = ofColor.substring(4, ofColor.length - 1)
    ofColor = ofColor.split(",")
    ofColor = rgbToHex(parseInt(ofColor[0]), parseInt(ofColor[1]), parseInt(ofColor[2]))

    // opOfColor = opOfColor.substring(4, opOfColor.length - 1)
    opOfColor = opOfColor.split(",")
    opOfColor = rgbToHex(parseInt(opOfColor[0]), parseInt(opOfColor[1]), parseInt(opOfColor[2]))
    
    pPicker.value = pColor 
    aPicker.value = aColor 
    opPicker.value = opColor 
    offPicker.value = ofColor 
    opOffPicker.value = opOfColor 
}, false)

function colorUpdate(input) {
    // console.log(input.value)
    let cssVar = "--" + input.id
    let rgbS = hexToRGB(input.value)
    document.querySelector(":root").style.setProperty(cssVar, rgbS)
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