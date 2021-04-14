<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<html lang="kz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Personal Portfolio Website</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
<a href="#">Portfo<span>lio.</span></a></div>
<ul class="menu">
<li><a href="#home"  class="menu-btn">{{__('lang.Home')}}</a></li>
<li><a href="#about" class="menu-btn">{{__('lang.About')}}</a></li>
<li><a href="#services" class="menu-btn">{{__('lang.Services')}}</a></li>
<li><a href="#skills" class="menu-btn">{{__('lang.Skills')}}</a></li>
<li><a href="#contact" class="menu-btn">{{__('lang.Contact')}}</a></li>
</ul>
<div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
</div>
</nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">
                {{__('lang.Hello')}}</div>
<div class="text-2">
{{__('lang.Name')}}</div>
<div class="text-3">
{{__('lang.And')}}<span class="typing"></span></div>
<a href="#">{{__('lang.More')}}</a>
            </div>
</div>
</section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">
About me</h2>
<div class="about-content">
                <div class="column left">
                    <img src="img/me.jpeg" alt="">
                </div>
<div class="column right">
                    <div class="text">
I'm Miras and I'm a <span class="typing-2"></span></div>
<p>
I was born in 2002 in the city of Almaty. From childhood he loved to build something. After school he entered the engineering faculty of the SDU. Apart from my studies, I do web design and make some money from it.</p>
<a href="#">Download CV</a>
                </div>
</div>
</div>
</section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">
My services</h2>
<div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-laptop-code"></i>
                        <div class="text">
Website</div>
<p>
I make selling websites with a unique design</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">
Website Analytics</div>
<p>
I will make analytics of your site</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-ad"></i>
                        <div class="text">
Marketing</div>
<p>
I will make your business profitable</p>
</div>
</div>
</div>
</div>
</div>
</section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">
My skills</h2>
<div class="skills-content">
                <div class="column left">
                    <div class="text">
My skills and experiences.</div>
<p>
What can I do?
Since I am currently doing web design, I know a little about Photoshop and Figma. And also I can write code</p>
<a href="#">Read more</a>
                </div>
<div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>WebDesign</span>
                            <span>90%</span>
                        </div>
<div class="line html">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
<div class="line css">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>Marketin</span>
                            <span>80%</span>
                        </div>
<div class="line js">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>JS</span>
                            <span>50%</span>
                        </div>
<div class="line php">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
<div class="line mysql">
</div>
</div>
</div>
</div>
</div>
</section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title1">
Contact me</h2>
<div class="contact-content">
                <div class="column left">
                    <div class="text">
Get in Touch</div>
<p>
If you have any questions, leave your contacts here, I will answer you</p>
<div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">
Name</div>
<div class="sub-title">
Miras Nurlybai</div>
</div>
</div>
<div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">
Address</div>
<div class="sub-title">
Almaty, Kazakhstan</div>
</div>
</div>
<div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">
Email</div>
<div class="sub-title">
nurlybaym@gmail.com</div>
</div>
</div>
</div>
</div>
<div class="column right">
                    <div class="text">
Message me</div>
<form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
<div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
</div>
<div class="field">
                            <input type="text" placeholder="Number" required>
                        </div>
<div class="field textarea">
                            <!-- Due to more textarea, I got an error so I changed the tag name of this textarea into changeit. -->
                            <changeit cols="30" rows="10" placeholder="Message.." required></changeit>
                        </div>
<div class="button">
                            <button type="submit">Send </button>
                        </div>
</form>
</div>
</div>
</div>
</section>

    

 <!-- Somehow I got an error, so I comment the script tag, just uncomment to use -->
<!-- <script src="script.js"></script> -->
</body>
</html>
