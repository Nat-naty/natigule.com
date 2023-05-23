<!DOCTYPE html>
<html>
    <head>
        <title>natiGule</title>
        <meta charset="utf-8">
        <meta name="description" content="Full Stack web-develper">
        <meta name="title" content="Hi, I'm Nati">
        <meta property="og:url" content="https://natigule.com">
        <meta property="og:type" content="article">
        <meta property="og:title" content="Hi, I'm Nati">
        <meta property="og:description" content="Full Stack web-develper">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="I'm nati. Full Stack Web Developer(MERN stack).">
        
        <link rel="icon" type="image/x-icon" href="./img/ng22.png">
        
        <style type="text/css">
               
                html, body{
                    padding: 0%;
                    margin: 0%;
                }
                .about-me-section {
                      background: url("./img/hero_img.jpg");
                      background-size: cover;
                      background-position: center;
                      background-repeat: no-repeat;
                      width: 100%;
                      height: 100vh;
                      position: relative;
                      display: flex;
                      flex-wrap: wrap;
                      justify-content: center;
                    }
                    
                    .about-me-section::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        background: #0a1725;
                        opacity: .80;
                        z-index: 0;
                    }
                    
                    .about-me-overlay {
                        flex: 1;
                        margin: auto;
                        color: white;
                        text-align: center;
                        z-index: 6;
                    }
                    
                    .about-me-overlay p {
                      font-size: 1.8rem;
                    }
                    /*.logo{*/
                    /*    position: absolute;*/
                    /*    top: 0;*/
                    /*    left: 0;*/
                    /*    width: 80px;*/
                    /*    height: 80px;*/
                    /*}*/
                    /*.logo{*/
                    /*    position: absolute;*/
                    /*    width: 5px;*/
                    /*    height: 5px;*/
                    /*}*/
                
                
                
        </style>
    </head>
    <body>
        
        <div class="about-me-section">
            <div class="about-me-overlay">
                <!--<div class="logo">-->
                <!--    <img src="./img/ng22.png" alt="logo">-->
                <!--</div>-->
                
                <h1>Hi I'm Nati,</h1>
                <p>A Full Stack web developer</p>
                <p>MERN stack</p>
            </div>
        </div>
        
     
        
    </body>
</html>