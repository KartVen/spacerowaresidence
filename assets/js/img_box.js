let imgDivElement;
let popUpBtnElement;
let popUpImgElement;

function imgDiv() {
    imgDivElement = document.createElement('div');
    imgDivElement.id = 'img-div-box';

    popUpBtnElement = document.createElement('button');
    popUpBtnElement.innerHTML = '<span><span></span></span>';
    imgDivElement.appendChild(popUpBtnElement);

    popUpImgElement = document.createElement('img');
    popUpImgElement.src = null;
    popUpImgElement.alt = null;
    imgDivElement.appendChild(popUpImgElement);

    return imgDivElement;
}

window.addEventListener("load", function (event) {
    document.getElementsByTagName('body')[0].appendChild(imgDiv());
});

function img_box(self) {
    let selfElement = typeof self === 'string' ? self : self.src;
    let imgDivElementSize = {
        width: imgDivElement.width,
        height: imgDivElement.height
    };
    let imgElement = new Image();
    imgElement.src = selfElement;
    imgElement.onload = function () {
        popUpImgElement.src = selfElement;

        if (imgElement.width > imgDivElement.width) {
            popUpImgElement.style.maxWidth = '95%';
        } else {
            popUpImgElement.style.maxHeight = '95%';
        }
    };

    imgDivElement.style.display = 'block';
    imgDivElement.style.opacity = '1';

    imgDivElement.onclick = popUpBtnElement.onclick = function () {
        imgDivElement.style.display = 'none';
        popUpImgElement.src = null;
        popUpImgElement.alt = null;
    }
}