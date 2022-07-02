var fobert = document.getElementById('sectionf').style;
var sobert = document.getElementById('sections').style;
var tobert = document.getElementById('sectiont').style;

var fobj = document.getElementById('FirstSection').style;
var sobj = document.getElementById('SecondSection').style;
var tobj = document.getElementById('ThriedSection').style;

var tobjs = document.getElementById('thriedsectionmain').style;

var maxsizeobert = '400px';
var minsizeobert = '52px';

var maxsizeobj = '392px';
var minsizeobj = '44px';

var showinfo = 0;
var a = 52;
var b = 220;

function information(){
	if(showinfo == 0){
	var timer = setInterval(function spinthisshit(){
	if(a == 401){
		if(b == 50){
			clearInterval(timer);
		}	
	}else{
		a=a+2;
		b=b-4;
		if(b<=50){
			b = 50;
		}
		if(401 <= a){
			a = 401;
			clearInterval(timer);
		}
		tobert.height = a+'px';
		tobj.borderRadius = '75px 75px 0px 0px';
		tobert.marginTop = b+'px';
		tobjs.display = 'block';
		showinfo=1;
	}
	},3);
	}else{
	a = 52;
	b = 220;
	tobert.height = minsizeobert;
	tobj.borderRadius = '50px 50px 50px 50px';
	tobert.marginTop = '220px';
	tobjs.display = 'none';
	showinfo=0;
	}
}

//if(showinfo == 0){
//	tobert.height = maxsizeobert;
//	tobj.borderRadius = '75px 75px 0px 0px';
//	tobert.marginTop = '50px';
//	tobjs.display = 'block';
//	showinfo=1;
//	}else{
//	tobert.height = minsizeobert;
//	tobj.borderRadius = '50px 50px 50px 50px';
//	tobert.marginTop = '220px';
//	tobjs.display = 'none';
//	showinfo=0;
//	}



