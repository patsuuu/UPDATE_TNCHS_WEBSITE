
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
    .una{
            margin-top: -350px;
            color: black;
        }   
        .una p{
          
            color: black;
        }   











        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            margin: 0;
            background: #f4f4f4;
            color: #333;
        }
        .containers {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }
      
        .section {
            margin-bottom: 40px;
            animation: slideUp 0.5s ease-in-out;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .section:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        p, ul {
            margin-bottom: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            background: #eee;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        ul li:hover {
            transform: scale(1.05);
            background-color: #ddd;
        }
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s forwards;
        }
        .slide-up {
            transform: translateY(20px);
            opacity: 0;
            animation: slideUp 0.5s forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
       
      </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <link rel="stylesheet" href="ekd.css">
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
                          <button class="dropbtns"><a href="home.php#home">HOME</a>
                            <i class="fa fa-caret-down"></i>
                          </button>
                          <div class="dropdowns-content">
                            <div class="dropdowns-content-sub">
                                <a href="#">STUDENTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
                                 
                                <div class="dropdowns-content-sub-sub">
                                  
                                 
                              <div class="dropdowns-content-subs">
                                    <a href="home.php#cors">STRANDS</a>
                                   
                                  
                                </div>
        
                                
                                <div class="dropdowns-content-subss">
                                
                                <a href="textbook.php">ORDER TEXTBOOKS </a>
                                
                                    
                                
                                
                                  </div>
                            </div>
                              </div>
                            </a>
                            
                            
                            
                            
                              <div class="dropdowns-content-sub">
                                <a href="#">ACADEMICS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
                                 
                                <div class="dropdowns-content-sub-sub">
                                  
                                 
                              <div class="dropdowns-content-subs">
                                    <a href="home.php#acads">ACADEMIC DEPARTMENTS</a>
                                   
                                  
                                </div>
        
                                
                                <div class="dropdowns-content-subss">
                          
                                <div class="dropdowns-content-sub-subss">
                                    
                                   
                                    
                                
                                </div>   
                                  </div>
                            </div>
                              </div>
                            </a>
                            
                            <a href="home.php#studentlife">STUDENT LIFE</a>
                            <a href="logabout.php">ABOUT US</a>
                          </div>
                        </div> 
                      </div>
        
        
          
          <div class="dropdown">
            <div class="p">
        
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="index.html#cors">STRANDS</a>
        <a href="logun.php">REGISTRATION</a>
        <a href="textbook.php">ORDER TEXTBOOKS</a>
        </div>
        </div> 
        </div>
               
                    
                   
                   <a href="#contact">PARENTS<span></span></a> 
                  
                   <a href="index.html#news">NEWS<span></span></a> 
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
       
        <h1>ABOUT US</h1>
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
            
        
            
    
                   
                     
            
                       
            
            <div class="una">
                <h2>Why Here</h2>
                <p>Choosing the right school is a pivotal decision, and Tanza National Comprehensive High School (TNCHS) stands out for its commitment to academic excellence, holistic development, and a supportive community.
    
                    At TNCHS, our exceptional academic programs are designed to challenge and engage students, fostering a love for learning. With a variety of courses, including advanced placement and specialized classes, students can pursue their interests and excel in their chosen fields. Our dedicated and experienced faculty provide personalized attention, ensuring that each student receives the support they need to succeed.
                    
                    We emphasize holistic development, recognizing that education is about more than just grades. Our extensive extracurricular programs, including sports, arts, music, and various clubs, help students develop their talents and build leadership skills. Our state-of-the-art facilities support these activities, offering students the resources they need to explore their passions.
                    
                    TNCHS is known for its strong sense of community. We foster an inclusive environment where every student feels valued and respected. Our teachers and staff are approachable and always available to offer guidance and support, creating a network of support that extends beyond the classroom.
                    
                    In conclusion, Tanza National Comprehensive High School is dedicated to the growth and success of each student. Our commitment to academic excellence, holistic development, and a supportive environment makes TNCHS the ideal choice for families seeking the best education for their children. Join us and become a part of our vibrant and dynamic school community.
                    
                    
                    
                    
                    
                    
                    </p>
               
                <h2>Facts and Figures</h2>
                <ul>
                    <li>Founded: 1949</li>
                    <li>Number of Students: 14,757</li>
                    <li>Average Class Size: 25</li>
                    <li>Student-Teacher Ratio: 20:1</li>
                    <li>Number of Alumni: 10,000+</li>
                </ul>
       
           
                <h2>History and Traditions</h2>
                <p>Founded on November 5, 1949, Tanza National Comprehensive High School initially operated in a rented building with substandard facilities. This changed when it received a significant pork barrel allocation of P100,000.00 from Honorable Justiniano S. Montano. With this funding, TNCHS acquired a 40,000 square meter school site and constructed an eight-room main building and a standard home economics facility, relocating there on October 27, 1952.
    
                    As the student population grew, TNCHS expanded its facilities and curriculum. Originally focused on academic courses, it transitioned to the RSEP '73 curriculum, integrating academic and vocational subjects equally. This shift coincided with its transition from Tanza High School to Tanza National Comprehensive High School, supported financially by the National Fund as a comprehensive national high school.
                    
                    Following the EDSA Revolution in 1986, Philippine education underwent significant reform, leading to the implementation of the National Secondary Curriculum (NSEC) in 1989-1990. This curriculum enrichment introduced optional subjects like journalism and drawing. TNCHS continues to enrich its curriculum to prepare students effectively for life's challenges, emphasizing both academic excellence and vocational skills necessary for higher education and productive careers.</p>
         
            
                <h2>Headmaster</h2>
                <p>DepEd</p>
                <p>The Department of Education (DepEd) bibliography serves as a comprehensive repository of educational resources and references essential for educators, policymakers, and stakeholders in the Philippines. It encompasses a wide array of publications, including curriculum guides, instructional materials, policy frameworks, and research findings. These resources are meticulously curated to support the implementation of DepEd's educational programs, ensuring alignment with national standards and goals. The bibliography not only facilitates informed decision-making and policy formulation within the education sector but also fosters continuous improvement and innovation in teaching methodologies and educational practices nationwide. By providing access to up-to-date research and best practices, the DepEd bibliography plays a crucial role in promoting quality education, enhancing learning outcomes, and addressing the evolving needs of Filipino learners in a dynamic global context.</p>
            
           
                <h2>Board of Trustees</h2>
                <p>Our Board of Trustees comprises dedicated individuals committed to the advancement of Tanza National Comprehensive High School (TNCHS). As of [current year], the members include:</p>
                <ul>
                    <li>Mr. John Doe - Chairman</li>
                    <li>Ms. Jane Smith - Vice Chairman</li>
                    <li>Mr. Michael Johnson - Treasurer</li>
                    <li>Ms. Sarah Lee - Secretary</li>
                    <li>Dr. Robert Brown - Member</li>
                </ul>
                <p>The Board plays a crucial role in governance, providing strategic direction and oversight to ensure TNCHS achieves its mission and goals. They oversee financial management, policy development, and ensure adherence to educational standards. Through their leadership, the Board fosters a supportive environment for students, faculty, and staff, promoting excellence in education and community engagement.</p>
            
            
    
            
                <h2>Media and Communications</h2>
                <ul>
                    <li>Facebook: https://www.facebook.com/TNCHSLibraryClub/</li>
                    <li>Gmail: tnchslibrary@gmail.com</li>
                    <li>Media Contact: 0998 298 4022</li>
    
                </ul>
          
                <h2>Employment</h2>
                <p>Join the team at Tanza National Comprehensive High School (TNCHS) and be part of our commitment to excellence in education. We offer fulfilling career opportunities and a supportive work environment.</p>
                <p>Explore our current job openings and start your journey with us. We value dedication, innovation, and a passion for nurturing young minds.</p>
                <p>For more information on job openings, the application process, and why TNCHS is a great place to work, please contact our Human Resources department at [HR contact information].</p>
            
            
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
