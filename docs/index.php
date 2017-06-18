
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<title></title>
</head>
<script src='assets/js/angular.min.js'></script>
<script src='assets/js/script.js'></script>


<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("user_yQeU00a4KX8VLztaEBrfI");
   })();
</script>

<body id='bdy'>
    <div style='height:100%;position:fixed;z-index:9999;background-color: rgb(50,50,50)' id='loadScreen'></div>
    <div ng-app id='oo'>
    	<div id='formHolder'>
            <div id='ink'>
                <div id='ink_content'>
                    <span>I</span><br/>
                    <span>N</span><br/>
                    <span>Q</span><br/>
                    <span>U</span><br/>
                    <span>I</span><br/>
                    <span>R</span><br/>
                    <span>E</span><br/>
                </div>
            </div>
            <div id='form_wrapper'>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input maxlength="254" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="email">Name:</label>
                    <input maxlength="100" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="comp">Company:</label>
                    <input maxlength="254" type="text" class="form-control" id="company">
                </div>
                <div class="form-group">
                  <label for="comment">Message:</label>
                  <textarea ng-model='tArea' ng-trim="false" maxlength="254" class="form-control" rows="5" id="comment"></textarea>
                  <div id='btnHolder'>
                        <button id='btn' type="button" class="btn">SEND</button><span id='char'>{{tArea.length}}</span><span>/254</span>
                  </div>
                </div>
            </div>
        </div>
    </div>

	<div id='head'>
        
		<div id='head_cont'>
			<div id='header_txt_container'>
				<h1>Hi I'am Pat. I develop</h1>
				<div>
					<h1 class="typewrite" data-period="2000" data-type='[ "Static", "Dynamic" ]'></h1>
					<h1>Websites</h1>
				</div>
			</div>
		</div>
        <div>
            <canvas id='anim'></canvas>
        </div>
 <canvas>
</canvas>
  <canvas></canvas>

      <div id='arrCont'>
        <span class="glyphicon glyphicon-arrow-down"></span>
      </div>
  
	</div>
	<div id='scndSec' class='container-fluid'>
		<div class='row skill-txt' >
			
            <h1>Skills</h1>

        </div>
        
            <div id='skill-cont' class='contianer-fluid'>
                <div id='dnone'>
                    <div class='row'>
                        <div class='col-xs-8'>
                            <table id="level">
                                <tr>
                                    <td>
                                            Photoshop:
                                            <div class="sc1" id="photo"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                            HTML:
                                            <div class="sc2" id="html"></div>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>
                                            CSS:
                                            <div class="sc3" id="css"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Linux: 
                                        <div class="sc4" id="linux"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Javascript:
                                        <div class="sc5" id="js"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Php:
                                        <div class="sc6" id="php"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        MySQL:
                                        <div class="sc7" id="sql"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Hardware Servicing:
                                        <div class="sc8" id="hs"></div>
                                    </td>
                                </tr>
                            </table>
                            <table id="skill1">
                                <tr>
                                    <td>    
                                        <span class='rate'>Beginner</span>
                                        <div class="line">
                                        </div>
                                    </td>
                                    </td>
                                    <td>
                                         <span class='rate'>Familliar</span>
                                        <div class="line">
                                        </div>
                                    <td>
                                        <span class='rate'>Proficient</span>
                                        <div class="line">
                                        </div>
                                    </td>
                                    <td>
                                        <span class='rate'>Expert</span>
                                        <div class="line">
                                        </div>
                                    </td>
                                    <td>
                                        <span class='rate'>Master</span>
                                        <div class="line">
                                        </div>
                                    </td>
                                    <td>
                                    <div class="line"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <p>
                                <h1 class='zzz'>Ratings</h1>
                                this section sucks on mobile view
                                still thingking on waht to put here text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum

                                
                            </p>
                            <div id='gif'>
                                <img src="assets/img/under.gif">
                            </div>
                        </div>
                    </div>
                </div>
                <div id='disp'>
                    <h1>This Section is broken on small screens and mobile view</h1>
                      <div id='gif'>
                         <img src="assets/img/under.gif">
                      </div>
                </div>
            </div>







        
	</div>


    <div id='frthSec' class='container-fluid'>
        <div class='row'>
            <div id='front-sec' class='col-md-6'>
                <div id='abc' class='txt-wrap'>
                    
                    <img id='img2' src='assets/img/B2.png'>
                    <h1 class='endtxt'>Front End</h1>   
                    <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                
            </div>
            <div id='back-sec' class='col-md-6'>
                <div id='cba' class='txt-wrap'>
                    <img id='img' src='assets/img/B1.png'>
                    <h1 class='endtxt'>Back End</h1>
                    <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
            
    </div>
    <div class='container-fluid'>
        <div style="text-align: center;width: 90%;" class='container'>         
            <?php
                include "includes/svg.php";
            ?>
        </div>
    </div>







    <div id='trdSec' class='container-fluid'>
        <div class='row exp-txt'>
            <h1>Experience</h1>
        </div>

        <div id='exp_cont' class='container'>
            <div id='shet'>
                <div id='exp_cont_wrap'>

                    <div class='row exp_row'>
                        <div class='col-xs-6 l'>
                            <span class='liParent'>
                                3 months web developer at smart and sense(intern)
                            </span>
                            <div class='exp_child_cont'>
                               

                                <span class='child_txt'>
                                    Created some static pages.
                                </span>
                                <span class='child_txt'>
                                    developed an e-commerce website using wordpress and deployed it on aws.
                                </span>
                            </div>                            
                                                            
                        </div>    
                         <div class='col-xs-6 l'>
                              <span class='liParent'>
                                15 days "employee Trainee" at dotweblabs.
                              </span>
                              <div class='exp_child_cont'>
                                  
                                  <span class='child_txt'>
                                    Make the website generate its content from a cms that the tech lead created (knockout js).
                                  </span>
                              </div>
                                  
                         </div>
                    </div>
                            
                    <div id='exp_row_two' class='row exp_row'>      
                        <div class='col-xs-6 k'>
                            <span class='liParent'>
                                Creating school projects for myself and schoolmates.
                            </span>
                            <div class='exp_child_cont'>
                                <span class='child_txt'>
                                    Created a Student evaluation system (php, js, mysql).
                                </span>
                                <span class='child_txt'>
                                    Simple web projects for my schoolmates(html,css,js,php).
                                </span>
                            </div>
                        </div>

                        <div class='col-xs-6 k'>
                            <span class='liParent'>
                                Awards
                            </span>
                            <div class='exp_child_cont'>
                                <span class='child_txt'>
                                    Proficiency in capstone.
                                </span>
                                <span class='child_txt'>
                                    Outstanding Database programmer.
                                </span>
                            </div>
                        </div>
                    </div>        
                            
                                
                       
                </div>
            </div>
        </div>
    </div>











<footer>
<hr/>
    <div class='container'>
        <div class='row footerRow'>
            <div class='col-xs-6 o'>
                <div class='ic'>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                </div>
                
                <div class='info'>
                    <span class="glyphicon glyphicon-phone"></span><span><a style='color:white;' class='footTxt' href="tel:+639551983678">+63955-198-3678</a></span><br/>
                     <span class="glyphicon glyphicon-envelope"></span><span class='footTxt'>thebackdoors182@gmail.com</span>
                </div>
            </div>
            <div class="col-xs-6 p">
                <div class='ic'>
                    <span class='glyphicon glyphicon-home'></span>
                </div>   
                <div class='info'>
                    <span>#11 Iringant St.</span><br/>
                    <span>Tuguegarao City, Cagayan</span><br/>
                    
                </div>
            </div>
        </div>

    <div id='f' style='text-align: center;'>
        <span>&copy; <span>Patrick chua 2017</span></span>
    </div>
</footer>




<!-- particles.js container -->


<!-- scripts -->
<script src="assets/js/particles.js-master/particles.js"></script>
<script src="assets/js/particles.js-master/demo/js/app.js"></script>


</body>





</html>