


<?php

session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .slideshow {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 300px;
        }
    
        .slideshow img {
          width: 300px;
          height: 300px;
        }
    .slideshows {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
    }

    .slideshows img {
      width: 300px;
      height: 300px;
    }
    .slideshowss {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
    }

    .slideshowss img {
        margin-top: 210px;
      width: 300px;
      height: 300px;
    }
      </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Activity</title>
    <link rel="stylesheet" href="desig.css">
</head>
<body>
    
    <div class="navbar-links">
        
        <section id="home">
    <header>
        <div class="huh">
            <nav>
           
        </div>
        </nav>
        
        <div class="logsi">
           
            <img src="./potos.png" id="leftCloud" alt="">
        <a href="#home" class="logsi"></a>
    </div>
    <div class="logsu">
    <img src="./potos.png" id="mainCloud" alt="">
    </div>
        <div class="logs">
        <a href="#home" class="logo"></a>
    </div>
   
    <div class="head">
        <div class="hev">
        <nav>
            <div class="dropdowns">
                <div class="p">
                  <button class="dropbtns"><a href="#home">HOME</a>
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdowns-content">
                    <div class="dropdowns-content-sub">
                        <a href="#">STUDENTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
                         
                        <div class="dropdowns-content-sub-sub">
                          
                         
                      <div class="dropdowns-content-subs">
                            <a href="#cors">STRANDS</a>
                           
                          
                        </div>

                        
                        <div class="dropdowns-content-subss">
                    
                        <a href="textbook.php">ORDER TEXTBOOKS </a>
                        
                            
                        
                        
                          </div>
                    </div>
                      </div>
                    </a>
                    
                    
                    
                    <a href="#alumni">ALUMNI</a>
                    <a href="#visit">VISIT</a>
                    
                      <div class="dropdowns-content-sub">
                        <a href="#">ACADEMICS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
                         
                        <div class="dropdowns-content-sub-sub">
                          
                         
                      <div class="dropdowns-content-subs">
                            <a href="#acads">ACADEMIC DEPARTMENTS</a>
                           
                          
                        </div>

                        
                        <div class="dropdowns-content-subss">
                        <a href="#">CURRICULUM</a>
                        <div class="dropdowns-content-sub-subss">
                            <a href="#catalog">COURSE CATALOG</a>
                           
                            
                        
                        </div>   
                          </div>
                    </div>
                      </div>
                    </a>
                    
                    <a href="#studentlife">STUDENT LIFE</a>
                    <a href="#">ABOUT US</a>
                  </div>
                </div> 
              </div>


  
  <div class="dropdown">
    <div class="p">

<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content">
<a href="#cors">STRANDS</a>
<a href="logun.php">ORDER TEXTBOOKS</a>
</div>
</div> 
</div>
       
            
           
           <a href="#contact">PARENTS<span></span></a> 
           
           <a href="#contact">NEWS<span></span></a> 
           <div class="iconic">
           <img src="iconic.png" alt=""  width="40" height="40">
</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="dropdowns">
          
           <div class="p">
            <?php

include 'conn.php';

$name =  $_SESSION['user_name'];

if ($name == true) {
	
}else{
	header('location:login.php');
}


echo "<span style='margin-top: -41.7px; margin-left: 40px; font-size:20px; font-weight:bold; color:#000'>".$_SESSION['user_name']."</span>";
 


 
 if (isset($_POST['submit'])) {
 	
 	session_destroy();
 	header('location:login.php');
 }



?>
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdowns-content">
                    <div class="dropdowns-content-sub">
                        <a href="index.html">LOGOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
          
           
        </div>
        </nav>
        
</div>
</div>
        </div>
        
        </div>
        
      
    </header>
</section>

    <section id="Home">
       
        <h1>WELCOME</h1>
        <!-- Clouds -->
        <img src="./" id="leftCloud" alt="">
        <img src="./" id="mainCloud" alt="">
        <img src="./" id="rightCloud" alt="">
        <!-- Background -->
        <img src="./" id="Mountain1" alt="">
        <img src="./" id="Mountain2" alt="">
    </section>










    <section id="students">
        <section class="section section-light">
            
           <br><br> <div class="pars"><h2></h2></div>
           <div class="font-color"><h2> <br><Br></h2></div>
        </div>
        
            <div class="p">
                <div class="pi">
                    <div class="pic">
               
            </div>
            <div class="circl">
            <div class="circle"> </div>
            <div class="na">
                <video width="1000" height="490" controls autoplay loop muted>
                <source src="na.mp4" type="video/mp4">
                <source src="na.mp4" type="video/mp4">
                <a href="na.mp4">Download video</a>
                Your browser does not support the video tag.
              </video></div></div>
          
            <section></section>
            <section id="cors">
                
            </section>
                <div class="newscircle">
                    <div class="new"><center><br><h1>Accountancy, Business and Management Strand (ABM)</h1></center></div>
                <div class="corses">
                    <center></center>
                </div>
                </div>
                
                
                
              
                <div class="updatescircle">
                    <div class="humS">
                        <div class="humss">

                    <h1>Humanities and Social Sciences (HUMSS)</h1>
                    </div>
                    
                    <div class="corse">
                        <center></center>
                    </div>
                    
                    </div>
  
                   
                    <div class="form-reg">
                       
                        </div>
                    </div>
                    
                    </div>
                    </div>
                
                    <div class="updatescircles">
                        <div class="humSS">
                            <div class="humsss">
    
                        <h1>Humanities and Social Sciences (HUMSS)</h1>
                        </div>
                
                
                
                
                </div>

        </div><br>
        
        <div class="par">
            <br><Br>
            
           
                        
           <div class="names">
           
        </div>
        
        <div class="namess">
           
        </div>
        <div class="container">
            
               
          
               
                
            </div>
            
        </div></center>  <br><br>
       
            
           
               
       <center> 
       </center>    
                 
         </div>          
                       </div>
        </div>
        
           <br>
           <div>
           </div></div>
            </section>
        </section>



        


















        
            <div class="pimg2">
               
                <div class="ptext">
                <span class="border trans">
                    
                </span>
                </div>
                </div>



                



                
                <section id="alumni">
                <section class="section section-dark"><Br><br>
                    <div class="mula">
                        <div class="alum-pic0">
                            <img src="0.jpg" alt=""  width="700" height="500">
                        </div>
                    </div>
                    <div class="alum">
                    <div class="alum-pic">
                        <img src="1.jpg" alt=""  width="400" height="500">
                    </div>
                    <div class="alum2">
                    <div class="alum-pic2">
                        <img src="2.jpg" alt=""  width="400" height="500">
                    </div>
                    </div>
                </div>
                   
        </div>
        </div>
        </div>
                 
    
            
       
    <body>

</body>
</div>
        

               
                 
        
                   
        
        
        
        
                           </div>
                       
        
                       
                    <br><br><br><br>
                    </section></section></div>
        
        
        
                      
              
            </div> 
        </div>
        
        
        
        
                           </div>
                       
        
                       
                   
                    </section>



                  
        
                       
                         
                
                           
                
                
                
                
                
                              
   
                
                               
                           
                            </section>
                
                   
                                
            <div class="pimg5">
               
                <div class="ptext">
                <span class="border trans">
                    
                </span>
                </div>
                </div>








                
                <section id="visit">
                <section class="section section-darks"><Br><br>
                   
        </div>
        </div>
        </div>
                 
    
            
       
    <body>
        <div class="map"><center>
            <div class="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.529409796767!2d120.85105687407633!3d14.3966175820403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33962c8bcdcdca0d%3A0xceb6c23744482f7e!2sTanza%20National%20Comprehensive%20High%20School!5e0!3m2!1sen!2sph!4v1719023528040!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div></center></div>
            <div class="g">
                <h1>
                    ACCOMODATIONS
                </h1>
            </div>
            <div class="poto"><center>
                <div class="slide">
                <div class="slideshow">
                    <button id="previousBtn">&#8249;</button>
                    <img id="image" src="pp.jpg" alt="html img tag example">
                    <button id="nextBtn">&#8250;</button>
                  </div> </div>
                </div></center></div>
                <div class="event">
                    <img src="event.jpg" alt="" width="600" height="450">
                </div>
</body>
</div>
        

               
                 
        
                   
        
        
        
        
                           </div>
                       
        
                       
                    <br><br><br><br>
                    </section></section></div>
        
        
        
                      
              
            </div> 
        </div>
        
        
        
        
                           </div>
                       
        
                       
                   
                    </section>








<div class="pimg5">

</div>




<section id="acads">
                    <section class="section hays"><Br><br>
                        












                        
                        <div class="e">
                            <h1>
                                ACADEMIC DEPARTMENTS
                            </h1>
                        </div>
                            <div class="potos">
                                <center>
                                    <div class="slides">
                                    <div class="slideshows">
                                        <button id="previousBtns">&#8249;</button>
                                        <img id="imagey" src="ha.png" alt="html img tag example">
                                        <button id="nextBtns">&#8250;</button>
                                      </div> </div>
                                    </div></center></div>
                                    
                          
                        </div>
                    </div>

            </div>
            </div>
            </div>
                     
        
                
           
        <body>
    
    </body>
    </div>
            
    
                   
                     
            
                       
            
            
            
            
                               </div>
                           
            
                           
                        <br><br><br><br>
                        </section></section></div>
            
            
            
                          
                  
                </div> 
            </div>
            
            
            
            
                               </div>
                           
            
                           
                       
                        </section>
    
    
    
                      
            
                           
                             
                    
                               
                    
                    
                    
                    
                    
                                  
       
                    
                                   
                               
                                </section>
                    
                       
                                    
                <div class="pimg5">
                   
                    <div class="ptext">
                    <span class="border trans">
                        
                    </span>
                    </div>
                    </div>





                    <section id="studentlife">
                        <section class="section hays"><Br><br>
                            
    
    
    
    
    
    
    
    
    
    
    
    
                            
                            
                                <div class="potoss">
                                    <center>
                                        <div class="slidess">
                                        <div class="slideshowss">
                                            <button id="previousBtnss">&#8249;</button>
                                            <img id="imageyy" src="pp.jpg" alt="html img tag example">
                                            <button id="nextBtnss">&#8250;</button>
                                          </div> </div>
                                        </div></center></div>
                                        <div class="so">
                                        <div class="h">
                                            <img src="clinic.jpg" alt="" width="450" height="400">
                                        </div>
                                        </div>
                                        <div class="c">
                                            <h1>TNCHS Medical and Nursing Service </h1>
                                        </div>
                                        <div class="he">
                                        <div class="f">
                                            <img src="canteen.jpg" alt="" width="450" height="400">
                                        </div>
                                        </div>
                                        <div class="l">
                                            <h1>TNCHS Canteen </h1>
                                        </div>
                                <div class="potosss">
                                    
                                
                                
                                
                                
                                </div>
                                        </div>
                            </div>
                        </div>
    
                </div>
                </div>
                </div>
                         
            
                    
               
            <body>
        
        </body>
        </div>
                
        
                       
                         
                
                           
                
                
                
                
                                   </div>
                               
                
                               
                            <br><br><br><br>
                            </section></section></div>
                
                
                
                              
                      
                    </div> 
                </div>
                
                
                
                
                                   </div>
                               
                
                               
                           
                            </section>
        
        
        
                          
                
                               
                                 
                        
                                   
                        
                        
                        
                        
                        
                                      
           
                        
                                       
                                   
                                    </section>
                        
                           
                                        
                    <div class="">
                       
                        <div class="ptext">
                        <span class="border trans">
                            
                        </span>
                        </div>
                        </div>







         
                        
                            <div class="pimg4">
                               
                                
        
                                </div>
                                </div>  














                                
                                <div class="dulo">




                                   
                                           
                                                        
                                 
                                                        




                                    



                                <section id="contact">    
                                    <div class="edulogo">            
                                    <img src="ed.png" width="120" height="120">
                            </div>
                        </div>  
                                </div>
                                    </section></section>



                                                
                         
                                        
                                            
    <script src="main.js"></script>
    <script>
        const images = ['a.jpg', 'b.jpg', 'c.jpg', 'd.jpg' ,'e.jpg', 'f.jpg' ];
         let currentIndex = 0;
     
         const previousBtn = document.getElementById('previousBtn');
         const nextBtn = document.getElementById('nextBtn');
         const image = document.getElementById('image');
     
         previousBtn.addEventListener('click', () => {
           currentIndex = (currentIndex - 1 + images.length) % images.length;
           image.src = images[currentIndex];
         });
     
         nextBtn.addEventListener('click', () => {
           currentIndex = (currentIndex + 1) % images.length;
           image.src = images[currentIndex];
         });
       </script>




<script>
    const imageys = ['he.png', 'hi.png', 'ho.png', 'hu.png', 'ah.png'];
    let currentIndexx = 0;
    const previousBtns = document.getElementById('previousBtns');
    const nextBtns = document.getElementById('nextBtns');
    const imagey = document.getElementById('imagey');

    previousBtns.addEventListener('click', () => {
        currentIndexx = (currentIndexx - 1 + imageys.length) % imageys.length;
        imagey.src = imageys[currentIndexx];
    });

    nextBtns.addEventListener('click', () => {
        currentIndexx = (currentIndexx + 1) % imageys.length;
        imagey.src = imageys[currentIndexx];
    });
</script>




<script>
    const imageyss = ['pp.jpg', 'potos.png', 'poto.png'];
    let currentIndexxx = 0;
    const previousBtnss = document.getElementById('previousBtnss');
    const nextBtnss = document.getElementById('nextBtnss');
    const imageyy = document.getElementById('imageyy');

    previousBtnss.addEventListener('click', () => {
        currentIndexxx = (currentIndexxx - 1 + imageyss.length) % imageyss.length;
        imageyy.src = imageys[currentIndexxx];
    });

    nextBtnss.addEventListener('click', () => {
        currentIndexxx = (currentIndexxx + 1) % imageyss.length;
        imageyy.src = imageyss[currentIndexxx];
    });
</script>




    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <footer>
        <div class="mid">
            <div class="midtext"><center><marquee direction=right>   WELCOME TO TANZA NATIONAL COMPREHENSIVE HIGH SCHOOL &#149 WELCOME TO TANZA NATIONAL COMPREHENSIVE HIGH SCHOOL &#149 WELCOME TO TANZA NATIONAL COMPREHENSIVE HIGH SCHOOL &#149 WELCOME TO TANZA NATIONAL COMPREHENSIVE HIGH SCHOOL &#149 WELCOME TO TANZA NATIONAL COMPREHENSIVE HIGH SCHOOL</marquee></center></div> 
          </div>
    </footer>
    
</body>

</html>
