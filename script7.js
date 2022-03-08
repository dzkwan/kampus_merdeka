class gempa{
	constructor(location, scale){
		this.lokasi = location;
		this.skala = scale;
	}
	dampak(){
		let akibat;
		if (this.skala >= 0 && this.skala <= 2) akibat = "tidak terasa";
		else if (this.skala > 2 && this.skala <= 4) akibat = "bangunan retak-retak";
		else if (this.skala > 4 && this.skala <= 6) akibat = "bangunan roboh";
		else if (this.skala > 6) akibat = "bangunan roboh dan berpotensi tsunami";
		else akibat = "tidak terjadi gempa";

		document.getElementById("badan").innerHTML += `<tr>
			<td class="line">${this.lokasi}</td>
			<td class="line">${this.skala}</td>
			<td>${akibat}</td>
		</tr>`;
	}
}

let loc1 = new gempa('Jepang',1);
let loc2 = new gempa('Singapura',5);
let loc3 = new gempa('Thiland',3);
let loc4 = new gempa('Rusia',7);
let loc5 = new gempa('Malaysia',6);
let loc6 = new gempa('Korea',1);
let loc7 = new gempa('China',4);
let loc8 = new gempa('Filipina',6);
let loc9 = new gempa('Vietnam',8);
let loc10 = new gempa('Jepang',4);
loc1.dampak();
loc2.dampak();
loc3.dampak();
loc4.dampak();
loc5.dampak();
loc6.dampak();
loc7.dampak();
loc8.dampak();
loc9.dampak();
loc10.dampak();