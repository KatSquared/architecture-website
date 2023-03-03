// 
// POPUP PREVIEW
//

const popup = document.getElementById('popup');

function openPopup(element) {
    popup.classList.remove('hidden');

    let image = element.children[0].children[0];
    let enlargedImg = document.getElementById('enlarged-image');
    console.log(image)
    enlargedImg.src = image.src;
}

function closePopup() {
    popup.classList.add('hidden');
}
