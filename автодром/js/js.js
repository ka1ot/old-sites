var eyeclick = 1;
    function pass(){
        var eye = document.getElementById('eye');
        var pass = document.getElementById('pass');
      if(eyeclick == 1){
        eye.style.color = "rgba(0, 208, 255, .3)";
        eye.style.textShadow = "0 1px 1px black";
        eye.className = "far fa-eye-slash";
        pass.type = 'text';
        pass.style.fontSize = '18px';
      }else{
        eye.style.color = "black";
        eye.className = "far fa-eye";
        eye.style.textShadow = "0 0 0 black";
        pass.type = 'password';
        pass.style.fontSize = '18px';
        eyeclick = 0;
      }
      eyeclick++;
    }