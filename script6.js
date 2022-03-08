function focusa1() {
	let form = document.getElementById("formulir");
	form.a1.value = "";
}

function focusa2() {
	let form = document.getElementById("formulir");
	form.a2.value = "";
}

function kosong() {
	let form = document.getElementById("formulir");
	form.a1.value = "Angka 1";
	form.a2.value = "Angka 2";
	form.hasil.value = "";
}

function hitung(i) {
	let form = document.getElementById("formulir");
	let no1 = Number(form.a1.value);
	let no2 = Number(form.a2.value);
	let result;

	if (isNaN(no1) || no1 == "") {
		alert("harap isi data berupa angka");
	} else if (isNaN(no2) || no2 == "") {
		alert("harap isi data berupa angka")
	}

	/*
	if (i == "tambah"){
		result = no1 + no2;
	} else if (i == "kurang"){
		result = no1 - no2;
	} else if (i == "kali"){
		result = no1 * no2;
	} else if (i == "bagi"){
		result = no1 / no2;
	} else if (i == "pangkat"){
		result = Math.pow(no1,no2);
	}
*/
	switch (i){
		case "tambah": result = no1 + no2; break;
		case "kurang": result = no1 - no2; break;
		case "kali": result = no1 * no2; break;
		case "bagi": result = no1 / no2; break;
		case "pangkat": result = Math.pow(no1, no2); break;
		default: result = "";
	}

	form.hasil.value = result;
}
