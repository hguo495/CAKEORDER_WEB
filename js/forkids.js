const priceMap = {
    'k1.jpg': { '6-inch': 120, '8-inch': 180, '10-inch': 260, 'two-tiers': 270 },
    'k2.jpg': { '6-inch': 125, '8-inch': 190, '10-inch': 280, 'two-tiers': 290 },
    'k3.jpg': { '6-inch': 150, '8-inch': 220, '10-inch': 300, 'two-tiers': 300 },
    'k4.jpg': { '6-inch': 190, '8-inch': 260, '10-inch': 350, 'two-tiers': 340 },
    'forkidsimage.jpg': { '6-inch': 190, '8-inch': 260, '10-inch': 350, 'two-tiers': 340 }
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
    document.getElementById('hiddenPrice').value = price; // 将价格存入隐藏字段
}

// 登录检查逻辑
document.getElementById('submitOrderButton').addEventListener('click', function (event) {
    console.log("Form submitted directly to the server for validation.");

    if (!isLoggedIn) {
        event.preventDefault(); // 阻止默认表单提交
        window.location.href = 'register.php'; // 未登录跳转到注册页面
    }
});


