
    // Price mapping for cupcakes
    const priceMap = {
        'cup1.jpg': { 'one-dozen':70,'party-pack': 140 },
        'cup2.jpg': { 'one-dozen': 85, 'party-pack': 180 },
        'cup3.jpg': { 'one-dozen': 55, 'party-pack': 110 },
        'cup4.jpg': { 'one-dozen': 55, 'party-pack': 110 },
        'cupcakeimg.jpg': { 'one-dozen': 60, 'party-pack': 130 }
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