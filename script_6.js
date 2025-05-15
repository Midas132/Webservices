function WalidujImie(){
	let x = document.forms["form1"]["imie"].value;
	if(x == ""){
		alert("Imię nie zostało wpisane");
		return false;
	}
}