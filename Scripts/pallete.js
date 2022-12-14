/**
 * creates an element based on the tag name and classes given
 * 
 * @param {string} tagName  the tag name of the element (ex: div, img)
 * @param {string} classes  classes Sets the class attribute. Multiple seperated by a space
 * 
 * @returns  {HTMLElement}
 */
function createElementWithClass(tagName, classes){ //allows to create html element and set the class attribute on that element//
    const el = document.createElement(tagName);

    el.setAttribute("class", classes);

    return el;
}  


/**
 * creates a palette Item based on the given color information
 * 
 * 
 * @param {string} color  The value of the color RGB or hex
 * @param {string} desc  The description / name / use of the color
 * 
 * @return {HTMLElement}
 */
function createItem(color, desc){
    const elmItem = createElementWithClass("div", "palette--item");
    const elmColor = createElementWithClass("div", "palette--color");
    const elmDesc = createElementWithClass("div", "palette--desc");
    const elmInput = createElementWithClass("input", "palette--input");

    elmColor.style.backgroundColor = color;
    elmInput.value = color;
    elmDesc.textContent = desc;

    elmItem.appendChild(elmColor);
    elmItem.appendChild(elmInput);
    elmColor.appendChild(elmDesc);

    elmInput.onfocus = () => elmInput.select();
    
    return elmItem;
}


const paletteContainer = document.querySelector(".palette");

fetch("Data/Decode.json").then(response => {
    return response.json();
}).then(colorList => {
    for(const {desc, color} of colorList){
        console.log(desc, color);
        paletteContainer.appendChild(createItem(color,desc));
    }
});

