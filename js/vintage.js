const priceMap = {
    'v1.jpg': { '6-inch': 100, '8-inch': 150, '10-inch': 200 },
    'v2.jpg': { '6-inch': 120, '8-inch': 180, '10-inch': 240 },
    'v3.jpg': { '6-inch': 100, '8-inch': 150, '10-inch': 200 },
    'v4.jpg': { '6-inch': 130, '8-inch': 190, '10-inch': 250 },
    'vintageimg.jpg': { '6-inch': 125, '8-inch': 175, '10-inch': 225 }
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