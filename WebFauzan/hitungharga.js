function calculateTotalPrice() {
    
    const totalPriceInput = document.getElementById('total_price');
 
    const itemPrices = {
        'item1': 75.217,
        'item2': 27.990,
        'item3': 55.979,
        'item4': 111.958,
        'item5': 139.947,
        'item6': 83.968,
        'item7': 149.542,
        'item8': 1.498,
        'item9': 3.038,
        'item10': 40.51,
        'item11': 3.496,
        'item12': 4.494,
        'item13': 4.994
    };
    
    const topupItems = document.getElementsByName('topup_items[]');
    let totalPrice = 0;
    
    for (let i = 0; i <= topupItems.length; i++) {
        if (topupItems[i].checked) {
            const itemName = topupItems[i].value;
            totalPrice += itemPrices[itemName];
        }
    }

        document.getElementById('total_price').value = totalPrice.toFixed(2);
     
        const formattedTotalPrice = totalPrice.toLocaleString();

    
        totalPriceInput.value = formattedTotalPrice;
}

