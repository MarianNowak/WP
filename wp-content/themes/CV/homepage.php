<?php
// 
// Template Name: Strona główna - szablon
// 
?>
<?php get_header(); ?>



<div class="name min992">



<h1 class="hero-name" id="alamakota">



    <!-- Roose -->

    <script type="text/javascript">



        function mojafunkcja() 

        {

            document.write("JS!")

            document.write(Date())

        }

        mojafunkcja()



        function WinOpen() 

        {

            const myWidnow = window.open()

            myWidnow.document.write('BLEBLEBLE!')

        }

        function helloWorld ()



        {

            document.getElementById("alamakota").innerHTML="Kot ma Alę"

        }

        helloWorld()





    </script>

    <span class="semibold">

        

        <!-- Monique -->

        <script type="text/javascript">

            document.write("Moniqueee")

        </script>

    </span>



</h1>



<h2 class="hero-info">



    <!-- Creative Director -->

    <script type="text/javascript">

        document.write("Creative Directorrr")

    </script>

</h2>



</div>



<div class="row profile">



<span class="h3 h3-bg">Profile</span>



<p class="profile-desc">



    Lorem ipsum dolor sit amet consectetur adipisicing elit.



    Iste perspiciatis quod at dignissimos dolorum iusto qui, 



    possimus nulla perferendis voluptatem officiis inventore 



    praesentium nisi eius aspernatur non ut dicta vero!



</p>



</div>



<div class="row skills" id="aboutus">



<span class="h3 h3-bg">Skills</span>



<div class="skill skill-1">



    <p class="skill-name">Skill 1</p>



    <span class="progress1"></span>



</div>



<div class="skill skill-2">



    <p class="skill-name">Skill 2</p>



    <span class="progress2"></span>



</div>



<div class="skill skill-3" id="services">



    <p class="skill-name">Skill 3</p>



    <span class="progress3"></span>



</div>



<div class="skill skill-4">



    <p class="skill-name">Skill 4</p>



    <span class="progress4"></span>



</div>



</div>



<div class="row contact" id="contact">



<span class="h3 h3-bg">Contact</span>



<div class="instagram">



    <span class="insta-wrap"><i class="fa-brands fa-instagram icon"></i></span><a href="">Instagram</a>



</div>



<div class="facebook">



    <span class="facebook-wrap"><i class="fa-brands fa-facebook-f icon"></i></span><a href="">Facebook</a>



</div>



<div class="mail">



    <span class="env-wrap"><i class="fa-solid fa-envelope icon"></i></span><a href="">Mail</a>



</div>



</div>



</div>



<div class="col-right">



<!-- <div class="circle1"></div>



<div class="circle2"></div>



<div class="circle3"></div>



<div class="circle4"></div>



<div class="circle5"></div> -->



<div class="name max992">



<h1 class="hero-name">



    <!-- Roose -->

    <script type="text/javascript">

        document.write("Rooseee")

    </script>

    <span class="semibold">



        <!-- Monique -->

        <script type="text/javascript">

            document.write("Moniqueee")

        </script>

    </span>



</h1>



<h2 class="hero-info">

    <!-- Creative Director</h2> -->

    <script type="text/javascript">

        document.write("Creative Director")

    </script>



</div>



<div class="row education">



<span class="h3 h3-bg">Education</span>



<ul class="info-inner">



    <li class="item">



        <h4 class="title">Lorem ipsum</h4>



        <span class="name">Lorem ipsum</span>



        <p class="desc">Lorem ipsum</p>



    </li>



</ul>



<ul class="info-inner">



    <li class="item">



        <h4 class="title">Lorem ipsum</h4>



        <span class="name">Lorem ipsum</span>



        <p class="desc">Lorem ipsum</p>



    </li>



</ul>



</div>



<div class="row experience">



<span class="h3 h3-bg">Experience</span>



<ul class="info-inner">



    <li class="item">



        <h4 class="title">Lorem ipsum</h4>



        <span class="name">Lorem ipsum</span>



        <p class="desc">Lorem ipsum</p>



    </li>



</ul>



<ul class="info-inner">



    <li class="item">



        <h4 class="title">Lorem ipsum</h4>



        <span class="name">Lorem ipsum</span>



        <p class="desc">Lorem ipsum</p>



    </li>



</ul>



</div>



<div class="row language">



<span class="h3 h3-bg">Language</span>



</div>



</div> 



</div>



<div class="box1">



<div class="box2">



<div class="wrapper">







</div>



</div>



</div> -->








<?php the_title(); ?>
<?php the_content(); ?>
<?php 