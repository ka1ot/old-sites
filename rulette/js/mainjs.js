function random(min,max){
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

	var fobj = document.getElementById('one');
	var sobj = document.getElementById('two');
	var tobj = document.getElementById('three');
	var frobj = document.getElementById('four');
	var fiobj = document.getElementById('five');
	var siobj = document.getElementById('six');
	var setup = 0;
	var absnull = -370;
	var absend = 1920;
	var centerstart = 760;
	var fobjs = random(0,1);
	var sobjs = random(0,1);
	var tobjs = random(0,1);
	var frobjs = random(0,1);
	var fiobjs = random(0,1);
	var siobjs = random(0,1);

	var firstobj = 0;
	var twoobj = 380;
	var threeobj = 760;
	var fourobj = 1160;
	var fiveobj = 1540;
	var sixobj = -380;
	var linewinstart = 570;
	var linewinend = 960;
	var winitem = 0;

window.onload = function(){

		if(fobjs == 1){
			fobj.style.background = "url(src/2test.jpg)";
		}else{
			fobj.style.background = "url(src/1test.jpg)";
		}
		if(sobjs == 1){
			sobj.style.background = "url(src/2test.jpg)";
		}else{
			sobj.style.background = "url(src/1test.jpg)";
		}
		if(tobjs == 1){
			tobj.style.background = "url(src/2test.jpg)";
		}else{
			tobj.style.background = "url(src/1test.jpg)";
		}
		if(frobjs == 1){
			frobj.style.background = "url(src/2test.jpg)";
		}else{
			frobj.style.background = "url(src/1test.jpg)";
		}
		if(fiobjs == 1){
			fiobj.style.background = "url(src/2test.jpg)";
		}else{
			fiobj.style.background = "url(src/1test.jpg)";
		}
		if(siobjs == 1){
			siobj.style.background = "url(src/2test.jpg)";
		}else{
			siobj.style.background = "url(src/1test.jpg)";
		}

		fobj.style.width = '380px';
		sobj.style.width = '380px';
		tobj.style.width = '399px';
		frobj.style.width = '380px';
		fiobj.style.width = '380px';
		siobj.style.width = '380px';


		fobj.style.marginLeft = firstobj + 'px';
		sobj.style.marginLeft = twoobj + 'px';
		tobj.style.marginLeft = threeobj + 'px';
		frobj.style.marginLeft = fourobj + 'px';
		fiobj.style.marginLeft = fiveobj + 'px';
		siobj.style.marginLeft = sixobj + 'px';

		spint = 0;
}

function getitem(obj){
	objr = random(0,1);

	switch(objr){
		case 0: 
			obj.style.background = "url(src/2test.jpg)";
		break;
		case 1: 
			obj.style.background = "url(src/1test.jpg)";
		break;
	}
}

function win(winitem){
	document.getElementById('win').style.display = 'block';
		switch(winitem){
			case 1:
				document.getElementById('winitem').style.background = fobj.style.background;
				break;
			case 2:
				document.getElementById('winitem').style.background = sobj.style.background;
				break;
			case 3:
				document.getElementById('winitem').style.background = tobj.style.background;
				break;
			case 4:
				document.getElementById('winitem').style.background = frobj.style.background;
				break;
			case 5:
				document.getElementById('winitem').style.background = fiobj.style.background;
				break;
			case 6:
				document.getElementById('winitem').style.background = siobj.style.background;
				break;
		}
		spins=0;	
}

function succes(){
	document.getElementById('win').style.display = 'none';
}

var spins = 0;

function spinshit(){
	if(spint == 0){
		spint++;
		var spinspeed = 10;
		var rand = random(1500,3500);
		rand = 1439;
		var spintimer = setInterval(function spinthisshit(){
			spins++;
					var fobjm = fobj.style.marginLeft;
					fobjm = fobjm.replace(/px/i, '');
					var sobjm = sobj.style.marginLeft;
					sobjm = sobjm.replace(/px/i, '');
					var tobjm = tobj.style.marginLeft;
					tobjm = tobjm.replace(/px/i, '');
					var frobjm = frobj.style.marginLeft;
					frobjm = frobjm.replace(/px/i, '');
					var fiobjm = fiobj.style.marginLeft;
					fiobjm = fiobjm.replace(/px/i, '');
					var siobjm = siobj.style.marginLeft;
					siobjm = siobjm.replace(/px/i, '');
					fobjm = parseInt(fobjm); 
					sobjm = parseInt(sobjm);
					tobjm = parseInt(tobjm);
					frobjm = parseInt(frobjm);
					fiobjm = parseInt(fiobjm);
					siobjm = parseInt(siobjm);

					fobj.style.marginLeft = spinspeed + fobjm + "px";
					sobj.style.marginLeft = spinspeed + sobjm + "px";
					tobj.style.marginLeft = spinspeed + tobjm + "px";
					frobj.style.marginLeft = spinspeed + frobjm + "px";
					fiobj.style.marginLeft = spinspeed + fiobjm + "px";
					siobj.style.marginLeft = spinspeed + siobjm + "px";
				
				if(fobjm >= absend){
					fobj.style.marginLeft = absnull + 'px';
					fobjm = absnull;
					fobj.style.display = 'none';
					getitem(fobj);
				}else{
					fobj.style.display = 'block';
				}

				if(sobjm >= absend){
					sobj.style.marginLeft = absnull + 'px';
					sobjm = absnull;
					sobj.style.display = 'none';
					getitem(sobj);
				}else{
					sobj.style.display = 'block';
				}

				if(tobjm >= absend){
					tobj.style.marginLeft = absnull + 'px';
					tobjm = absnull;
					tobj.style.display = 'none';
					getitem(tobj);
				}else{
					tobj.style.display = 'block';
				}

				if(frobjm >= absend){
					frobj.style.marginLeft = absnull + 'px';
					frobjm = absnull;
					frobj.style.display = 'none';
					getitem(frobj);
				}else{
					frobj.style.display = 'block';
				}

				if(fiobjm >= absend){
					fiobj.style.marginLeft = absnull + 'px';
					fiobjm = absnull;
					fiobj.style.display = 'none';
					getitem(fiobj);
				}else{
					fiobj.style.display = 'block';
				}

				if(siobjm >= absend){
					siobj.style.marginLeft = absnull + 'px';
					siobjm = absnull;
					siobj.style.display = 'none';
					getitem(siobj);

				}else{
					siobj.style.display = 'block';
				}


						//Линия выигрыша
						//07.02.2020
						//--------------

				

			if(spins == rand){
				clearInterval(spintimer);
				spint--;
				console.log(rand);
				if((siobjm >= linewinstart) && (siobjm <= linewinend)){
					winitem = 6;
				}else{
					if((fiobjm >= linewinstart) && (fiobjm <= linewinend)){
					winitem = 5;
				}else{
					if((frobjm >= linewinstart) && (frobjm <= linewinend)){
					winitem = 4;
				}else{
					if((tobjm >= linewinstart) && (tobjm <= linewinend)){
					winitem = 3;
				}else{
					if((sobjm >= linewinstart) && (sobjm <= linewinend)){
					winitem = 2;
				}else{
					if((fobjm >= linewinstart) && (fobjm <= linewinend)){
					winitem = 1;
				}
				}
				}
				}
				}
				}
				win(winitem);
			}

			if((rand-150) == spins){
				//тут крч уменьшаеться скорость перед финишем
				spinspeed = 2;
				console.log('finish buff speed '+spins);
			}

			if((rand-250) == spins){
				//тут крч уменьшаеться скорость перед последним замедлением
				spinspeed = 5;
				console.log('pre finish buff speed '+spins);
				
			}
		},3);
	}else{
		alert('вы уже крутите рулетку');
	}
}
