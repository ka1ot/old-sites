
  var eyeclick = 1;
    function pass(){
        var eye = document.getElementById('eye');
        var pass = document.getElementById('pass');
      if(eyeclick == 1){
        eye.style.color = "black";
        eye.className = "far fa-eye-slash";
        eye.style.marginLeft = '216px';
        pass.type = 'text';
        pass.style.fontSize = '16px';
      }else{
        eye.style.color = "white";
        eye.className = "far fa-eye";
        eye.style.marginLeft = '217px';
        pass.type = 'password';
        pass.style.fontSize = '24px';
        eyeclick = 0;
      }
      eyeclick++;
    }



var slider = {
            slides:['img1.jpg','img2.jpg','img3.jpg'], 
            frame:0, 
            set: function(image) { 
                document.getElementById("scr").style.backgroundImage = "url(src/"+image+")";
                switch(this.frame){
                    case 0:
                      document.getElementById('ind1').style.backgroundColor = 'lime';
                      document.getElementById('ind2').style.backgroundColor = 'rgba(255,255,255,.8)';
                      document.getElementById('ind3').style.backgroundColor = 'rgba(255,255,255,.8)';
                    break;
                    case 1:
                      document.getElementById('ind1').style.backgroundColor = 'rgba(255,255,255,.8)';
                      document.getElementById('ind2').style.backgroundColor = 'lime';
                      document.getElementById('ind3').style.backgroundColor = 'rgba(255,255,255,.8)';
                    break;
                    case 2:
                      document.getElementById('ind1').style.backgroundColor = 'rgba(255,255,255,.8)';
                      document.getElementById('ind2').style.backgroundColor = 'rgba(255,255,255,.8)';
                      document.getElementById('ind3').style.backgroundColor = 'lime';
                    break;
                }
            },
            init: function() { 
                this.set(this.slides[this.frame]);
            },
            left: function() { 
                this.frame--;
                if(this.frame < 0) this.frame = this.slides.length-1;
                this.set(this.slides[this.frame]);
            },
            right: function() { 
                this.frame++;
                if(this.frame == this.slides.length) this.frame = 0;
                this.set(this.slides[this.frame]);
            },
            first: function() {
                if(this.frame != 0) this.frame=0;
                this.set(this.slides[this.frame]); 
            },
            second: function(){
                if(this.frame != 1) this.frame=1;
                this.set(this.slides[this.frame]);
            },
            three: function(){
                if(this.frame != 2) this.frame=2;
                this.set(this.slides[this.frame]);
          }
        };    
        window.onload = function() { 
            slider.init();
            setInterval(function() { 
                slider.right();
            },5000);

            var oblpos = 120;
            var tydaobr = 0;
            setInterval(function(){
             if(tydaobr == 0){
              oblpos = oblpos + 5;
             }else{
              oblpos = oblpos - 5;
             }
             if (oblpos==120){
              tydaobr = 0;
             }
             if (oblpos==890){
              tydaobr = 1;
              
             }
            document.getElementById('obl').style.marginLeft = oblpos + "px";
          },100);
          }

