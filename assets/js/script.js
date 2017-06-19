function talkToMe (theMsg) {
    var msg = new SpeechSynthesisUtterance();
    msg.lang = 'en';
    msg.rate = .9;
    msg.text = theMsg;
    window.speechSynthesis.speak(msg);
   
}
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 1000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
	        delta = this.period;
	        this.isDeleting = true;
        } 
        else if (this.isDeleting && this.txt === '') {
	        this.isDeleting = false;
	        this.loopNum++;
	        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var bdy = document.getElementById("bdy");
        var lodscreen = document.getElementById("loadScreen");
        bdy.removeChild(lodscreen);
        var emReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        // alert(window.innerWidth);
        var togleMsg = document.getElementById("ink_content");
        var msgBox = document.getElementById("oo");
        msgBox.style.left = 0 + "px";
        var z = false;
        // togleMsg.addEventListener("click",tgle);
        togleMsg.onclick = function(){
            msgBox.style.transition = .7 + "s";
            if(!z){
                msgBox.style.left = -400 + "px";
                z= true;    
            }
            else{
                msgBox.style.left = 0 + "px";
                z = false;
            }
            
        }
        ////jquery effects
      
            $("#arrCont").click(function() {
                $('html, body').animate({
                    scrollTop: $("#scndSec").offset().top
                }, 900);
            });



        var skill = document.getElementsByClassName('svg');
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
        	if(i == 1){
        		continue;
        	}
        	else{
        		var toRotate = elements[i].getAttribute('data-type');
	            var period = elements[i].getAttribute('data-period');
	            if (toRotate) {
	              new TxtType(elements[i], JSON.parse(toRotate), period);
	            }
        	} 
        }
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);

        ////svg
        for(var i = 0 ; i<skill.length ;i++){
            skill[i].onmouseover = function(){
                this.style.transition = .5 + "s";
                this.style.transform = "scale( 1.2,1.2 )";
            }
            skill[i].onmouseleave = function(){
                this.style.transition = .5 + "s";
                this.style.transform = "scale( 1,1 )";
            }
        }
       var sndBtn = document.getElementById('btn');
       var email = document.getElementById("email");
       var name = document.getElementById("name");
       var comp = document.getElementById("company");
       var comment = document.getElementById("comment");

       sndBtn.onclick = function(){
        if(email.value == '' || name.value == '' || comment.value == '')
            talkToMe("name, email, and message are required!");        
        else{
            if(emReg.test(email.value)){
                talkToMe("Thank you for inquiring, Your message has been sent"); 
                    emailjs.send("gmail","template_TWrDajWZ",{name: name.value, notes: comment.value});
                    email.value = "";
                    name.value = "";
                    comment.value = "";
                    company.value = "";  
            }    
            
                    

       }
    };
     function scrollEffect(){
            var svg = document.getElementsByClassName('svg');
            var skillSec = Math.floor($("#scndSec").offset().top); 
            var frthSec = Math.floor($("#frthSec").offset().top);
            
            var bck = document.getElementById('abc');
            var frt = document.getElementById('cba');
            // .style.marginTop = 60 + "px";
            var pto = document.getElementById("photo");
             var htm = document.getElementById("html");
             var cs = document.getElementById("css");
             var lin = document.getElementById("linux");
             var js = document.getElementById('js');
             var ph = document.getElementById('php');
             var sq = document.getElementById('sql');
             var hs = document.getElementById('hs');
             /////
                         pto.style.transition = 1 + "s";
            htm.style.transition = 1 + "s";
            cs.style.transition = 1 + "s";
            lin.style.transition = 1 + "s";
            js.style.transition = 1 + "s";
            ph.style.transition = 1 + "s";
            sq.style.transition = 1 + "s";
            hs.style.transition = 1 + "s";
                 bck.style.transition =1 + "s";
                frt.style.transition = 1 + "s";
            svg[0].style.transition = 2 + "s";
            svg[1].style.transition = 2 + "s";
            svg[2].style.transition = 2 + "s";
            svg[3].style.transition = 2 + "s";
            svg[4].style.transition = 2 + "s";
            svg[5].style.transition = 2 + "s";
            svg[6].style.transition = 2 + "s";
            svg[7].style.transition = 2 + "s";
            if (Math.floor(window.pageYOffset) == 0 && Math.floor(window.pageYOffset) <= 200){
                pto.style.width = 0 + "px";
                htm.style.width = 0 + "px";
                pto.style.width = 0 + "px";
                cs.style.width = 0 + "px";
                lin.style.width = 0 + "px";

                js.style.width = 0 + "px";
                php.style.width = 0 + "px";
                sq.style.width = 0 + "px";
                hs.style.width = 0 + "px";
                bck.style.top= 50 + "px" ;
                frt.style.top = 50 + "px";
                bck.style.opacity= 0 ;
                frt.style.opacity = 0;
                svg[0].style.opacity = 0;
                setTimeout(function(){ svg[1].style.opacity = 0; }, 300);
                setTimeout(function(){ svg[2].style.opacity = 0; }, 600);
                setTimeout(function(){ svg[3].style.opacity = 0; }, 900);
                setTimeout(function(){ svg[4].style.opacity = 0; }, 1200);
                setTimeout(function(){ svg[5].style.opacity = 0; }, 1500);
                setTimeout(function(){ svg[6].style.opacity = 0; }, 1700);
                setTimeout(function(){ svg[7].style.opacity = 0; }, 2000);
            }
            else if(Math.floor(window.pageYOffset) >= skillSec
                && Math.floor(window.pageYOffset) < 900){  
                pto.style.width = 200 + "px";
                htm.style.width = 820 + "px";
                pto.style.width = 200 + "px";
                cs.style.width = 780 + "px";
                lin.style.width = 380 + "px";

                js.style.width = 720 + "px";
                php.style.width = 720 + "px";
                sq.style.width = 650 + "px";
                hs.style.width = 350 + "px";
            }
            else if(Math.floor(window.pageYOffset) >= frthSec){
                
                bck.style.top= 0 ;
                frt.style.top = 0;
                bck.style.opacity= 1 ;
                frt.style.opacity = 1;
                svg[0].style.opacity = 1;
                setTimeout(function(){ svg[1].style.opacity = 1; }, 300);
                setTimeout(function(){ svg[2].style.opacity = 1; }, 600);
                setTimeout(function(){ svg[3].style.opacity = 1; }, 900);
                setTimeout(function(){ svg[4].style.opacity = 1; }, 1200);
                setTimeout(function(){ svg[5].style.opacity = 1; }, 1500);
                setTimeout(function(){ svg[6].style.opacity = 1; }, 1700);
                setTimeout(function(){ svg[7].style.opacity = 1; }, 2000);
                
            }
       
    }

    window.addEventListener('scroll',scrollEffect);


 

    