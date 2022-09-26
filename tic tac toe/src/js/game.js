var t1 = document.getElementById('topleft');
		var t11 = 0;
		var t2 = document.getElementById('topmiddle');
		var t22 = 0;
		var t3 = document.getElementById('topright');
		var t33 = 0;

		var m1 = document.getElementById('middleleft');
		var m11 = 0;
		var m2 = document.getElementById('middlemiddle');
		var m22 = 0;
		var m3 = document.getElementById('middleright');
		var m33 = 0;

		var b1 = document.getElementById('botleft');
		var b11 = 0;
		var b2 = document.getElementById('botmiddle');
		var b22 = 0;
		var b3 = document.getElementById('botright');
		var b33 = 0;

		var cross = "url('src/img/cross.png')";
		var zero = "url('src/img/zero.png')";
		var gamezero = "";

		var w = 0;
		var l = 0;
		var nij = 0;
		var sum = 0;
		var person = 0;


window.onload = function(){


	function gamereg(person){

		function win(){
			//*верх лево право, искосок слева в право, лево низ*//
			if((t11 == 1)&&(t22 == 1)&&(t33 == 1)){
				t1.style.backgroundColor = "rgba(10,230,47,.3)";
				t2.style.backgroundColor = "rgba(10,230,47,.3)";
				t3.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			}
			if((t11 == 1)&&(m11 == 1)&&(b11 == 1)){
				t1.style.backgroundColor = "rgba(10,230,47,.3)";
				m1.style.backgroundColor = "rgba(10,230,47,.3)";
				b1.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			}
			if((t11 == 1)&&(m22 == 1)&&(b33 == 1)){
				t1.style.backgroundColor = "rgba(10,230,47,.3)";
				m2.style.backgroundColor = "rgba(10,230,47,.3)";
				b3.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			}
			//*середина крест*//
			if((t22 == 1)&&(m22 == 1)&&(b22 == 1)){
				t2.style.backgroundColor = "rgba(10,230,47,.3)";
				m2.style.backgroundColor = "rgba(10,230,47,.3)";
				b2.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			}
			if((m11 == 1)&&(m22 == 1)&&(m33 == 1)){
				m1.style.backgroundColor = "rgba(10,230,47,.3)";
				m2.style.backgroundColor = "rgba(10,230,47,.3)";
				m3.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			}
			//*искосок справа в лево, право низ*//
			if((t33 == 1)&&(m33 == 1)&&(b33 == 1)){
				t3.style.backgroundColor = "rgba(10,230,47,.3)";
				m3.style.backgroundColor = "rgba(10,230,47,.3)";
				b3.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			}
			if((t33 == 1)&&(m22 == 1)&&(b11 == 1)){
				t3.style.backgroundColor = "rgba(10,230,47,.3)";
				m2.style.backgroundColor = "rgba(10,230,47,.3)";
				b1.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			//*фул низ*//
			}
			if((b11 == 1)&&(b22 == 1)&&(b33 == 1)){
				b1.style.backgroundColor = "rgba(10,230,47,.3)";
				b2.style.backgroundColor = "rgba(10,230,47,.3)";
				b3.style.backgroundColor = "rgba(10,230,47,.3)";
				w++;
			}
			if(w != 0){
				clear(1);
			}
		}

		function lose(){
			//*верх лево право, искосок слева в право, лево низ*//
			if((t11 == 2)&&(t22 == 2)&&(t33 == 2)){
				t1.style.backgroundColor = "rgba(231,32,47,.3)";
				t2.style.backgroundColor = "rgba(231,32,47,.3)";
				t3.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			}
			if((t11 == 2)&&(m11 == 2)&&(b11 == 2)){
				t1.style.backgroundColor = "rgba(231,32,47,.3)";
				m1.style.backgroundColor = "rgba(231,32,47,.3)";
				b1.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			}
			if((t11 == 2)&&(m22 == 2)&&(b33 == 2)){
				t1.style.backgroundColor = "rgba(231,32,47,.3)";
				m2.style.backgroundColor = "rgba(231,32,47,.3)";
				b3.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			}
			//*середина крест*//
			if((t22 == 2)&&(m22 == 2)&&(b22 == 2)){
				t2.style.backgroundColor = "rgba(231,32,47,.3)";
				m2.style.backgroundColor = "rgba(231,32,47,.3)";
				b2.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			}
			if((m11 == 2)&&(m22 == 2)&&(m33 == 2)){
				m1.style.backgroundColor = "rgba(231,32,47,.3)";
				m2.style.backgroundColor = "rgba(231,32,47,.3)";
				m3.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			}
			//*искосок справа в лево, право низ*//
			if((t33 == 2)&&(m33 == 2)&&(b33 == 2)){
				t3.style.backgroundColor = "rgba(231,32,47,.3)";
				m3.style.backgroundColor = "rgba(231,32,47,.3)";
				b3.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			}
			if((t33 == 2)&&(m22 == 2)&&(b11 == 2)){
				t3.style.backgroundColor = "rgba(231,32,47,.3)";
				m2.style.backgroundColor = "rgba(231,32,47,.3)";
				b1.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			//*фул низ*//
			}
			if((b11 == 2)&&(b22 == 2)&&(b33 == 2)){
				b1.style.backgroundColor = "rgba(231,32,47,.3)";
				b2.style.backgroundColor = "rgba(231,32,47,.3)";
				b3.style.backgroundColor = "rgba(231,32,47,.3)";
				l++;
			}
			if(l != 0){
				clear(2);
			}
		}

		function registery(){
			if((l == 0)&&(w == 0)){
				sum = t11+t22+t33+m11+m22+m33+b11+b22+b33;
				if(sum >= 13){
					t1.style.backgroundColor = "rgba(55,55,55,.2)";
					t2.style.backgroundColor = "rgba(55,55,55,.2)";
					t3.style.backgroundColor = "rgba(55,55,55,.2)";
					m1.style.backgroundColor = "rgba(55,55,55,.2)";
					m2.style.backgroundColor = "rgba(55,55,55,.2)";
					m3.style.backgroundColor = "rgba(55,55,55,.2)";
					b1.style.backgroundColor = "rgba(55,55,55,.2)";
					b2.style.backgroundColor = "rgba(55,55,55,.2)";
					b3.style.backgroundColor = "rgba(55,55,55,.2)";
					nij++;
					clear(3);
				}
			}
		}

		win();
		lose();
		registery();

		function clear(number){
			setTimeout(function(){
				switch(number){
				case 1:
					alert('Ты выиграл');
				break;
				case 2:
					alert('Ты проиграл');
				break;
				case 3:
					alert('Ничья');
				break;
				}

				t11 = 0;
				t22 = 0;
				t33 = 0;
				m11 = 0;
				m22 = 0;
				m33 = 0;
				b11 = 0;
				b22 = 0;
				b33 = 0;
				l = 0;
				w = 0;
				sum = 0;
				nij = 0;
				t1.style.backgroundImage = gamezero;
				t2.style.backgroundImage = gamezero;
				t3.style.backgroundImage = gamezero;
				m1.style.backgroundImage = gamezero;
				m2.style.backgroundImage = gamezero;
				m3.style.backgroundImage = gamezero;
				b1.style.backgroundImage = gamezero;
				b2.style.backgroundImage = gamezero;
				b3.style.backgroundImage = gamezero;
				t1.style.backgroundColor = gamezero;
				t2.style.backgroundColor = gamezero;
				t3.style.backgroundColor = gamezero;
				m1.style.backgroundColor = gamezero;
				m2.style.backgroundColor = gamezero;
				m3.style.backgroundColor = gamezero;
				b1.style.backgroundColor = gamezero;
				b2.style.backgroundColor = gamezero;
				b3.style.backgroundColor = gamezero;
				alert('Поле очищено, можно играть');
				document.location.reload();
			},1000,number);	
		}
		if((nij==0)&&(l == 0)&&(w==0)){
			if(person%2 == 1){
			sum = t11+t22+t33+m11+m22+m33+b11+b22+b33;
			if(sum <= 12){
				if((w != 1)&&(l != 1)){
				botmove();
			}
			}
		}
		}
	}

	function registerymove(mover){
		mover.style.backgroundImage = cross;
		if(t11+t22+t33+m11+m22+m33+b11+b22+b33 <= 12){
			person++;
		}else{
			person=0;
		}
		gamereg(person);
		
	}

	function regmovebot(mover){
		mover.style.backgroundImage = zero;
		if(t11+t22+t33+m11+m22+m33+b11+b22+b33 <= 12){
			person++;
		}else{
			person=0;
		}
		gamereg(person);
	}


	function getRandom(min, max) {
 	 return Math.floor(Math.random() * (max - min)) + min;
	}

	function botmove(){
		var i = 0;
		while(i != 1){
			bot = getRandom(1,10);
			switch(bot){
				case 1:
					if(t11 == 0){
						t11 = 2;
						i++;
						regmovebot(t1);
					}
				break;
				case 2:
					if(t22 == 0){
						t22 = 2;
						i++;
						regmovebot(t2);
					}
				break;
				case 3:
					if(t33 == 0){
						t33 = 2;
						i++;
						regmovebot(t3);
					}
				break;
				case 4:
					if(m11 == 0){
						m11 = 2;
						i++;
						regmovebot(m1);
					}
				break;
				case 5:
					if(m22 == 0){
						m22 = 2;
						i++;
						regmovebot(m2);
					}
				break;
				case 6:
					if(m33 == 0){
						m33 = 2;
						i++;
						regmovebot(m3);
					}
				break;
				case 7:
					if(b11 == 0){
						b11 = 2;
						i++;
						regmovebot(b1);
					}
				break;
				case 8:
					if(b22 == 0){
						b22 = 2;
						i++;
						regmovebot(b2);
					}
				break;
				case 9:
					if(b33 == 0){
						b33 = 2;
						i++;
						regmovebot(b3);
					}
				break;
			}
		}
	}

	t1.onclick = function(){
		if(t11 == 0){
			t11++;
			registerymove(t1);
		}
	}

	t2.onclick = function(){
		if(t22 == 0){
			t22++;
			registerymove(t2);
		}
	}

	t3.onclick = function(){
		if(t33 == 0){
			t33++;
			registerymove(t3);
		}
	}

	m1.onclick = function(){
		if(m11 == 0){
			m11++;
			registerymove(m1);
		}
	}

	m2.onclick = function(){
		if(m22 == 0){
			m22++;
			registerymove(m2);
		}
	}

	m3.onclick = function(){
		if(m33 == 0){
			m33++;
			registerymove(m3);
		}
	}

	b1.onclick = function(){
		if(b11 == 0){
			b11++;
			registerymove(b1);
		}
	}

	b2.onclick = function(){
		if(b22 == 0){
			b22++;
			registerymove(b2);
		}
	}

	b3.onclick = function(){
		if(b33 == 0){
			b33++;
			registerymove(b3);
		}
	}

}