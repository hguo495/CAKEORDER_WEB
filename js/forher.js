const priceMap = {
    'her1.jpg': { '6-inch': 120, '8-inch': 175, '10-inch': 240 },
    'her2.jpg': { '6-inch': 150, '8-inch': 220, '10-inch': 300 },
    'her3.jpg': { '6-inch': 130, '8-inch': 180, '10-inch': 250 },
    'her4.jpg': { '6-inch': 140, '8-inch': 190, '10-inch': 260 },
    'forherimage.jpg': { '6-inch': 125, '8-inch': 180, '10-inch': 245 }
};


function updateMainImage(imageSrc) {
    document.getElementById('mainImage').src = imageSrc;
    updatePrice();
}

function updatePrice() {
    const mainImageSrc = document.getElementById('mainImage').src.split('/').pop();
    const size = document.getElementById('size').value;
    const price = priceMap[mainImageSrc]?.[size] || 0;

    document.getElementById('price').textContent = price;

}

