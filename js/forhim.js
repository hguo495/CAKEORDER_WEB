
const priceMap = {
    'he1.jpg': { '6-inch': 110, '8-inch': 160, '10-inch': 210 ,'two-tiers': 230},
    'he2.jpg': { '6-inch': 100, '8-inch': 150, '10-inch': 200 ,'two-tiers': 210},
    'he3.jpg': { '6-inch': 120, '8-inch': 150, '10-inch': 230 ,'two-tiers': 230 },
    'he4.jpg': { '6-inch': 115, '8-inch': 170, '10-inch': 245 ,'two-tiers': 230 },
    'forhimimage.jpg': { '6-inch': 125, '8-inch': 180, '10-inch': 245, 'two-tiers': 280}
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
    // const isLoggedIn = !!document.cookie.match(/valid_user=/); // 检查 Cookie 是否包含 valid_user

    if (!isLoggedIn) {
        event.preventDefault(); // 阻止默认表单提交
        window.location.href = 'register.php'; // 未登录跳转到注册页面
    }
});

