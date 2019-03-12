// Don't search for an empty string.
function validateSearch() {
	if (document.getElementById("keyword").value.length == 0) {
		return false;
	}
	return true;
}
