/*
	This function changes whether or not a button adds an item to the
	shopping cart and which item it will add if it does.
*/
function updateLink(id, pid, qty) {
	// If more than one select has a value, return.
	// We can only add one item to the cart at a time.
	var count = 0;
	var selects = document.getElementsByTagName("select");
	for (i = 0; i < selects.length; i++ ) {
		if (selects[i].selectedIndex != 0) {
			count++;
		}
	}

	if (count > 1) {
		document.getElementsByName(id)[0].selectedIndex = 0;
		alert("Sorry, but only one item can be added to the shopping " +
				"cart at a time!");
		return;
	}

	// Set the quantity.
	qty = (qty == null) ? 1 : qty;
	
	// Since we have different button sizes, we need to know what the current
	// button is.
	var imgElement = document.getElementById(id + "_img");
	var buttonImage = imgElement.getAttribute("src");
	

	// We are good to go.
	if (pid == '0') {	
		str = '<img id=\'' + id + '_img\' src="' + buttonImage + '"  />';	
	}
	else {
		str='<a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=' + pid + '&qty=' + qty + '"><img id=\'' + id + '_img\' src="' + buttonImage + '"  onclick="resetOption(\'' + id + '\');"/></a>';
	}
	document.getElementById(id).innerHTML = str;
}

/**
	Reset the option in cases where the user clicks the 'Back' button to
	come back to this page from the Shopping cart.
*/
function resetOption(id) {
	document.getElementsByName(id)[0].selectedIndex = 0;
}

/**
	Validate the quantity for an item.
*/
function validateRange(id) {
	var qty = document.getElementById(id);
	// Since we have different button sizes, we need to know what the current
	// button is.
	var imgElement = document.getElementById("img_" + id);
	var buttonImage = imgElement.getAttribute("src");
	var pattern = /\D/; // All non-numberic characters.
	// Make sure the user inputs a valid numeric value.
	if (qty.value < 1 || qty.value > 1000 || pattern.test(qty.value)) {
		str = '<img id=img_' + id + ' src="' + buttonImage + '"  />';
	}
	else {
		str='<a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=' + id + '&qty=' + qty.value + '"><img id=img_' + id + ' src="' + buttonImage + '"  /></a>';
	}
	document.getElementById("button_" + id).innerHTML = str;
}