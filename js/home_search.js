function handleSearch(e) {
    e.preventDefault();  // Prevent the form from submitting traditionally
    var searchValue = document.getElementById('searchInput').value; // Get the value of the input

    // Convert search value to lowercase and compare
    switch (searchValue.toLowerCase()) {
        case 'vintage cakes':
            window.location.href = 'vintage.php';
            break;
        case 'cakes for her':
            window.location.href = 'forher.php';
            break;
        case 'cakes for him':
            window.location.href = 'forhim.php';
            break;
        case 'cakes for kids':
            window.location.href = 'forkids.php';
            break;
        case 'cupcakes':
            window.location.href = 'cupcake.php';
            break;
        case 'special order':
            window.location.href = 'specialorder.php';
            break;
        default:
            alert('No cakes found for your search! Please try a different keyword.');
            break;
    }
}