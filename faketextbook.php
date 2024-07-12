


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
   
.floating-cart:hover{
scale: 1.8;
bottom: 40px;
right: 40px;
transition: 0.5s;
}
.floating-cart {
position: fixed;
bottom: 20px;
right: 20px;
z-index: 1000;
}
.floating-cart img {
display: block;
width: 50px;
height: 50px;
border-radius: 50%;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
background-color: #ffffff;
}

.book-container {
display: flex;
flex-wrap: wrap;
justify-content: center;
gap: 20px;
max-width: 1200px;
margin: 0 auto;
}
.book {

text-align: center;
width: calc(20% - 20px);
margin-bottom: 20px;
background-color: #fff;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
transition: transform 0.2s ease-in-out;
position: relative;
overflow: hidden;
}
.book:hover {
transform: scale(1.05);
}
.book img {
width: 100%;
height: auto;
border-top-left-radius: 8px;
border-top-right-radius: 8px;
}
.book-info {
position: absolute;
bottom: 0;
left: 0;
width: 100%;
background-color: rgba(255, 255, 255, 0.9);
padding: 10px;
text-align: left;
transition: transform 0.3s ease-in-out;
transform: translateY(0);
}
.lahat{
    margin-top: -180px;
}
.book-title {
font-weight: bold;
font-size: 16px;
margin-bottom: 5px;
color: black;
}
.book-price {
color: #666;
font-size: 14px;
}
.back-btn {
display: block;
width: 100%;
padding: 10px;
margin-top: 10px;
text-align: center;
background-color: #ad0000;
color: #fff;
text-decoration: none;
border: none;
border-radius: 4px;
cursor: pointer;
}
.back-btn:hover {
background-color: #860000;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <link rel="stylesheet" href="elv.css">
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
                  <button class="dropbtns"><a href="index.html#home">HOME</a>
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdowns-content">
                    <div class="dropdowns-content-sub">
                        <a href="#">STUDENTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
                         
                        <div class="dropdowns-content-sub-sub">
                          
                         
                      <div class="dropdowns-content-subs">
                            <a href="index.html#cors">STRANDS</a>
                           
                          
                        </div>

                        
                        <div class="dropdowns-content-subss">
                    
                        <a href="faketextbook.php">ORDER TEXTBOOKS </a>
                        
                            
                        
                        
                          </div>
                    </div>
                      </div>
                    </a>
                    
                    
                    
                    <a href="alumni.html">ALUMNI</a>
                    <a href="visit.html">VISIT</a>
                    
                      <div class="dropdowns-content-sub">
                        <a href="#">ACADEMICS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
                         
                        <div class="dropdowns-content-sub-sub">
                          
                         
                      <div class="dropdowns-content-subs">
                            <a href="acads.html">ACADEMIC DEPARTMENTS</a>
                           
                          
                        </div>

                        
                        <div class="dropdowns-content-subss">
                        
                        <div class="dropdowns-content-sub-subss">
                          
                           
                            
                        
                        </div>   
                          </div>
                    </div>
                      </div>
                    </a>
                    
                    <a href="studentlife.html">STUDENT LIFE</a>
                    <a href="about.html">ABOUT US</a>
                  </div>
                </div> 
              </div>


  
  <div class="dropdown">
    <div class="p">

<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content">
<a href="index.html#cors">STRANDS</a>
<a href="faketextbook.php">ORDER TEXTBOOKS</a>
</div>
</div> 
</div>
       
            
           
<a href="parents.html">PARENTS<span></span></a> 
           <a href="applys.php">APPLY<span></span></a> 
           <a href="news.php">NEWS<span></span></a> 
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logencart.php"><h1>LOGIN</h1><span></span></a> 
            
           <div class="p">
           <?php

include 'conn.php';


?>
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdowns-content">
                    <div class="dropdowns-content-sub">
                        <a href="index.html">LOGOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></a>
          
           
        </div>
          
           
        </div>
        </nav>
        
</div>
</div>
        </div>
        
        </div>
      
    </header>
</section>

    <section id="Home">
       
        <h1></h1>
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
        <div class="lahat">
        <div class="book-container">
                    <?php
                    $uid = $_SESSION['user_id'];
                    // Fetch books from the database
                    $query = "SELECT id, title, image, price FROM textB";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="book">';
                            echo '<img src="uploads/'.$row['image'].'" alt="'.$row['title'].'">';
                            echo '<div class="book-info">';
                            echo '<div class="book-title">'.$row['title'].'</div>';
                            echo '<div class="book-price">₱ '.$row['price'].'</div>';
                            echo '<form action="buy.php" method="POST">';
                            echo '<input type="hidden" name="book_id" value="'.$row['id'].'">';
                            echo '<a href="logencart.php" class="back-btn">Add to Cart</a>';
                            echo '</form>';
                            echo '</div>'; // Close book-info div
                            echo '</div>'; // Close book div
                        }
                    } else {
                        echo 'Error fetching books from the database.';
                    }
                    ?>
                </div>
                </div>
            </section>
        </section>
        
    </div>
    <!-- Floating Cart Button -->
    
        
           
          
            <section></section>
            <section id="cors">
                
            </section>
            
           




















                



                
            
                           
                            </section>
        
        
        
                          
                
                               
                                 
                        
                                   
                        
                        
                        
                        
                        
                                      
           
                        
                                       
                                   
                                    </section>
                        
                           
                







         
                        
                            <div class="pimg4">
                               
                                
        
                                </div>
                                </div>  














                                
                                <div class="dulo">




                                   
                                           
                                                        
                                 
                                                        




                                    



                                <section id="contact">    
                                    <div class="edulogo">            
                                    <img src="ed.png" width="120" height="120">




                                    <div class="floating-cart">
        <a href="logencart.php">
            <img src="carrr.png" alt="Cart" width="50" height="50">
        </a>
    </div>
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
