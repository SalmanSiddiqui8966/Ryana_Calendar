<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RYANA CALENDAR</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="./Images/ICON.ico" rel="icon">
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
:root {
    --green: #eb4c37;
    --black: #eb4c37;
    --light-color: #666;
    --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
}

* {
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}

section {
    padding: 2rem 9%;
}

section:nth-child(even) {
    background: #eee;
}

.sub-heading {
    text-align: center;
    color: var(--green);
    font-size: 2rem;
    padding-top: 1rem;
}

.heading {
    text-align: center;
    color: var(--black);
    font-size: 3rem;
    padding-bottom: 2rem;
    text-transform: uppercase;
}

.btn {
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color: #fff;
    background: var(--black);
    border-radius: .5rem;
    cursor: pointer;
    padding: .8rem 3rem;
}

.btn:hover {
    background: var(--black);
    letter-spacing: .1rem;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #fff;
    padding: 1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
}

header .logo {
    color: var(--black);
    font-size: 2.5rem;
    font-weight: bolder;
}

header .logo i {
    color: var(--green);
}

header .navbar a {
    font-size: 1.7rem;
    border-radius: .5rem;
    padding: .5rem 1.5rem;
    margin: 10px;
    color: var(--light-color);
}

header .navbar a.active,
header .navbar a:hover {
    color: #fff;
    background: var(--green);
}

header .icons i,
header .icons a {
    cursor: pointer;
    margin-left: .5rem;
    height: 4.5rem;
    line-height: 4.5rem;
    width: 4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color: var(--black);
    border-radius: 50%;
    background: #eee;
}

header .icons i:hover,
header .icons a:hover {
    color: #fff;
     background: black;
    transform: rotate(360deg);
}

header .icons #menu-bars {
    display: none;
}

#search-form {
    position: fixed;
    top: -110%;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 1004;
    background: rgba(0, 0, 0, .8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 1rem;
}

#search-form.active {
    top: 0;
}

#search-form #search-box {
    width: 50rem;
    border-bottom: .1rem solid #fff;
    padding: 1rem 0;
    color: #fff;
    font-size: 3rem;
    text-transform: none;
    background: none;
}

#search-form #search-box::placeholder {
    color: #eee;
}

#search-form #search-box::-webkit-search-cancel-button {
    -webkit-appearance: none;
}

#search-form label {
    color: #fff;
    cursor: pointer;
    font-size: 3rem;
}

#search-form label:hover {
    color: var(--green);
}

#search-form #close {
    position: absolute;
    color: #fff;
    cursor: pointer;
    top: 2rem;
    right: 3rem;
    font-size: 5rem;
}

.home .home-slider .slide {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 2rem;
    padding-top: 9rem;
}

.home .home-slider .slide .content {
    flex: 1 1 45rem;
}

.home .home-slider .slide .image {
    flex: 1 1 45rem;
}

.home .home-slider .slide .image img {
    width: 100%;
}

.home .home-slider .slide .content span {
    color: var(--green);
    font-size: 2.5rem;
}

.home .home-slider .slide .content h3 {
    -size: 2.2rem;
    padding: .5rem 0;
    line-height: 1.5;
}




/* header end */


#heading{
    padding-left: 500px;
    padding-top: 100px;
    display: flex;
    font-size: 70px;
}
#heading span{
    color: #eb4c37;
    font-weight: 500px;

}

/* product one row */

.products{
    width: 95%;
    height: 520px;
    margin: 0 auto;
    background-color: rgb(218, 214, 214);
    display: flex;
    
}
.oneproduct{
    width: 30%;
    height: 500px;
    box-shadow: var(--box-shadow);
    background-color: white;
    margin-top: 10px;
    margin-left: 27px;
}
.oneproduct img{
    width: 320px;
    height: 250px;
    margin-left: 30px;
    margin-top: 20px;
    border-radius: 10px;
  

}
.write-center{
    font-size: large;
    padding-left: 60px;
    padding-top: 20px;
    color: #eb4c37;

}
.write-center i{
    color: yellow;
    padding-left: 10px;
}
.oneproduct .writebutton{
    margin-top: 30px;
    width: 100%;
}

.oneproduct h3{
    color: #eb4c37;
    float: left;
    font-size: xx-large;
    padding-left: 20px;
}
.oneproduct button{
    float: right;
    height: 40px;
    width: 180px;
    margin-right: 30px;
    background-color: #eb4c37;
    color: #eee;
    font-size: 20px;
    font-weight: 1000;
    border-radius: 10px;
}
.oneproduct button:hover{
    background-color: black;
    font-size: 22px;
}

/* product-one row finish */

/* categories */
.categories h1{
    padding-top: 40px;
    padding-left: 41%;
    font-size: 50px;
    color: #eb4c37;
}
.dairies{
    margin-left: 70px;

}
.dairies h3{
    font-size: 30px;
    padding-top: 20px;
}
hr.new1 {
    border-top: 1px solid red;
    margin-bottom: 20px;
    width: 90%;
    
  }






  /*footer css start  */
  .footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    padding:.5rem 0;
    font-size: 2.5rem;
    color:var(--black);
    cursor: pointer;
}
.footer .box-container .box h3:hover{
    color: black;
    border-radius: 2rem;
  
    box-sizing: border-box;
}

.footer .box-container .box a{
    display: block;
    padding:.5rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.footer .box-container .box a:hover{
    color:var(--green);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
   
    border-top: .1rem solid rgba(0,0,0,.1);
    font-size: 2rem;
    color:var(--black);
    padding:.5rem;
    padding-top: 1.5rem;
    margin-top: 1.5rem;
    background-color: black;
}

.footer .credit span{
    color:var(--green);

}









#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #eb4c37;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }
  
  #myBtn:hover {
    background-color: black;
  }

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
    background:#eee;
}

.sub-heading{
    text-align: center;
    color:var(--green);
    font-size: 2rem;
    padding-top: 1rem;
}

.heading{
    
    text-align: center;
    color:var(--black);
    font-size: 3rem;
    padding-top: 1rem;
    padding-bottom: 2rem;
    text-transform: uppercase;

}




.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color:#fff;
    background: var(--black);
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: black;
    letter-spacing: .1rem;
}





@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --green:#eb4c37;
    --black:#eb4c37;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
    
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}
body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
  }
  
  #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #eb4c37;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }
  
  #myBtn:hover {
    background-color: black;
  }

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
    background:#eee;
}

.sub-heading{
    text-align: center;
    color:var(--green);
    font-size: 2rem;
    padding-top: 1rem;
}

.heading{
    
    text-align: center;
    color:var(--black);
    font-size: 3rem;
    padding-top: 1rem;
    padding-bottom: 2rem;
    text-transform: uppercase;

}




.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color:#fff;
    background: var(--black);
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: black;
    letter-spacing: .1rem;
}

header{
    position: fixed;
    top:0; left: 0; right:0;
    background: #fff;
    padding:1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
}

header .logo{
    color:var(--black);
    font-size: 2.5rem;
    font-weight: bolder;
}

header .logo i{
    color:var(--green);
}

header .navbar a{
    font-size: 1.7rem;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    margin: 10px;
    color:var(--light-color);
}

header .navbar a.active,
header .navbar a:hover{
    color:#fff;
    background: var(--green);
}

header .icons i,
header .icons a{
    cursor: pointer;
    margin-left: .5rem;
    height:4.5rem;
    line-height: 4.5rem;
    width:4.5rem;
    text-align: center;
    font-size: 1.7rem;
    color:var(--black);
    border-radius: 50%;
    background: #eee;
}

header .icons i:hover,
header .icons a:hover{
    color:#fff;
    background: black;
    transform: rotate(360deg);
}

header .icons #menu-bars{
    display: none;
}

#search-form{
    position: fixed;
    top:-110%; left:0; 
    height:100%; width:100%;
    z-index: 1004;
    background:rgba(0,0,0,.8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding:0 1rem;
}

#search-form.active{
    top:0;
}

#search-form #search-box{
    width:50rem;
    border-bottom: .1rem solid #fff;
    padding:1rem 0;
    color:#fff;
    font-size: 3rem;
    text-transform: none;
    background:none;
}

#search-form #search-box::placeholder{
    color:#eee;
}

#search-form #search-box::-webkit-search-cancel-button{
    -webkit-appearance: none;
}

#search-form label{
    color:#fff;
    cursor:pointer;
    font-size: 3rem;
}

#search-form label:hover{
    color:var(--green);
}

#search-form #close{
    position: absolute;
    color:#fff;
    cursor: pointer;
    top: 2rem; right:3rem;
    font-size: 5rem;
}

.home .home-slider .slide{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem; 
    padding-top: 9rem;
}

.home .home-slider .slide .content{
    flex:1 1 45rem;
}

.home .home-slider .slide .image{
    flex:1 1 45rem;
}

.home .home-slider .slide .image img{
    width: 100%;
}

.home .home-slider .slide .content span{
    color:var(--green);
    font-size: 2.5rem;
}

.home .home-slider .slide .content h3{
    color:var(--black);
    font-size: 7rem;
}

.home .home-slider .slide .content p{
    color:var(--light-color);
    font-size: 2.2rem;
    padding:.5rem 0;
    line-height: 1.5;
}
.swiper-pagination-bullet-active{
    background:var(--green);
}

.diaries .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
    gap:1.5rem;
}

.diaries .box-container .box{
    padding:2.5rem;
    background:#fff;
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.2);
    box-shadow: var(--box-shadow);
    position: relative;
    overflow: hidden;
    text-align: center;
}

.diaries .box-container .box .fa-heart,
.diaries .box-container .box .fa-eye{
    position: absolute;
    top:1.5rem;
    background:#eee;
    border-radius: 50%;
    height: 5rem;
    width:5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:var(--black);
}

.diaries .box-container .box .fa-heart:hover,
.diaries .box-container .box .fa-eye:hover{
    background: var(--green);
    color:#fff;
}

.diaries .box-container .box .fa-heart{
    right:-15rem;
}

.diaries .box-container .box .fa-eye{
    left:-15rem;
}

.diaries .box-container .box:hover .fa-heart{
    right:1.5rem;
}

.diaries .box-container .box:hover .fa-eye{
    left:1.5rem;
}

.diaries .box-container .box img{
    height:17rem;
    margin:1rem 0;
}

.diaries .box-container .box h3{
    color:var(--black);
    font-size: 2.5rem;
}
.diaries .box-container .box .stars{
    padding:1rem 0;
    color: gold;
}

.diaries .box-container .box .stars i{
    font-size: 1.7rem;
    color:gold;
}

.diaries .box-container .box span{
    color:var(--green);
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
}

.about .row{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    align-items: center;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{ 
    width: 100%;
}

.about .row .content{
    flex:1 1 45rem;
}

.about .row .content h3{
    color:var(--black);
    font-size: 4rem;
    padding:.5rem 0;
}

.about .row .content p{
    color:var(--light-color);
    font-size: 1.5rem;
    padding:.5rem 0;
    line-height: 2;
}

.about .row .content .icons-container{
    display: flex;
    gap:1rem;
    flex-wrap: wrap;
    padding:1rem 0;
    margin-top: .5rem;
}

.about .row .content .icons-container .icons{
    background:#eee;
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.2);
    display: flex;
    align-items: center;
    justify-content: center;
    gap:1rem;
    flex:1 1 17rem;
    padding:1.5rem 1rem;
}

.about .row .content .icons-container .icons i{
    font-size: 2.5rem;
    color:var(--green);
}

.about .row .content .icons-container .icons span{
    font-size: 1.5rem;
    color:var(--black);
}

.items .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.items .box-container .box{
    background: #fff;
    border:.1rem solid rgba(0,0,0,.2);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);    
}

.items .box-container .box .image{
    height: 25rem;
    width: 100%;
    padding:1.5rem;
    overflow: hidden;
    position: relative;
}

.items .box-container .box .image img{
    height: 100%;
    width: 100%;
    border-radius: .5rem;
    object-fit: cover;
}

.items .box-container .box .image .fa-heart{
    position: absolute;
    top:2.5rem; right: 2.5rem;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    text-align: center;
    font-size: 2rem;
    background: #fff;
    border-radius: 50%;
    color:var(--black);
}

.items .box-container .box .image .fa-heart:hover{
    background-color: var(--green);
    color:#fff;
}

.items .box-container .box .content{
    padding:2rem;
    padding-top: 0;
}

.items .box-container .box .content .stars{
    padding-bottom: 1rem;
    color: gold;
}

.items .box-container .box .content .stars i{
   font-size: 1.7rem;
   color: gold;
}

.items .box-container .box .content h3{
    color:var(--black);
    font-size: 2.5rem;
}
.items .box-container .box .content p{
    color:var(--light-color);
    font-size: 1.6rem;
    padding:.5rem 0;
    line-height: 1.5;
}

.items .box-container .box .content .price{
    color:var(--green);
    margin-left: 1rem;
    font-size: 2.5rem;
}

.review .slide{
    padding:2rem;
    box-shadow:var(--box-shadow);
    border:.1rem solid rgba(0,0,0,.2);
    border-radius: .5rem;
    position: relative;    
}

.review .slide .fa-quote-right{
    position: absolute;
    top:2rem; right:2rem;
    font-size: 4rem;
    color:#ccc;
    margin-right: 5px;
}

.review .slide .user{
    display: flex;
    gap:1.5rem;
    align-items: center;
    padding-bottom: 1.5rem;
}

.review .slide .user img{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    object-fit: cover;
}

.review .slide .user h3{
    color:var(--black);
    font-size: 2rem;
    padding-bottom: .5rem;
}

.review .slide .user i{
    font-size: 1.3rem;
    color:gold;
}

.review .slide p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:var(--light-color);
}

.order form{
    max-width:90rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border:.1rem solid rgba(0,0,0,.2);
    background:#fff;
    padding:1.5rem;
    margin:0 auto;
}

.order form .inputBox{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.order form .inputBox .input{
    width:49%;
}

.order form .inputBox .input span{
    display:block;
    padding:.5rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.order form .inputBox .input input,
.order form .inputBox .input textarea{
    background:#eee;
    border-radius: .5rem;
    padding:1rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
    margin-bottom: 1rem;
    width:100%;
}

.order form .inputBox .input input:focus,
.order form .inputBox .input textarea:focus{
    border:.1rem solid var(--green);
}

.order form .inputBox .input textarea{
    height:20rem;
    resize: none;
}

.order form .btn{
    margin-top: 0;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    padding:.5rem 0;
    font-size: 2.5rem;
    color:var(--black);
    cursor: pointer;
}
.footer .box-container .box h3:hover{
    color: black;
    border-radius: 2rem;
  
    box-sizing: border-box;
}

.footer .box-container .box a{
    display: block;
    padding:.5rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.footer .box-container .box a:hover{
    color:var(--green);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
   
    border-top: .1rem solid rgba(0,0,0,.1);
    font-size: 2rem;
    color:var(--black);
    padding:.5rem;
    padding-top: 1.5rem;
    margin-top: 1.5rem;
    background-color: black;
}

.footer .credit span{
    color:var(--green);

}

@media (max-width:991px){

    html{
        font-size: 55%;
    }
    
    header{
        padding:1rem 2rem;
    }

    section{
        padding:2rem;
    }


}

@media (max-width:768px){

    header .icons #menu-bars{
        display: inline-block;
    }

    header .navbar{
        position: absolute;
        top:100%; left:0; right:0;
        background:#fff;
        border-top: .1rem solid rgba(0,0,0,.2);
        border-bottom: .1rem solid rgba(0,0,0,.2);
        padding:1rem;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a{
        display: block;
        padding:1.5rem;
        margin:1rem;
        font-size: 2rem;
        background:#eee;
    }

    #search-form #search-box{
        width:90%;
        margin:0 1rem;
    }

    .home .home-slider .slide .content h3{
        font-size: 5rem;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .diaries .box-container .box img{
        height:auto;
        width: 100%;
    }

    .order form .inputBox .input{
        width:100%;
    }

}


</style>
<body>

    <header>

        <a href="#" class="logo"><img src="./Images/rayana logo change 2.png" alt=""></a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="about.html">about us</a>
            <a href="product.html">products</a>
            <a href="#order">order</a>
            <a href="Contact Us.html">contact us</a>

        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>
    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>


    <section class="home" id="home">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Diary Products</span>
                        <h3>Ryana Essential A5 Diary</h3>
                        <p> You value planners and notebooks that withstand being used every day, carried in a bag or tossed onto you desk.</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="./Images/Diary size 971.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Wall Calendar Products</span>
                        <h3>Ryana Essential Wall Calendar</h3>
                        <p> As you navigate the busy days ahead, AT-A-GLANCE will be there to capture your story every step of the way.</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="./Images/ryana Calendars mockup.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Table Calendar Product</span>
                        <h3>Ryana Table Calendar</h3>
                        <p>Calendar can be displayed on the mantelpiece, desk, living room , bedroom, home office, kitchen, medical institution, coffee shop and restaurant</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src=".//Images/Calendar Size 971.png" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>

        </div>

    </section>


    <section class="diaries" id="diaries">

        <h3 class="sub-heading"> Ryana Calendars </h3>
        <h1 class="heading">Our Exclusive Products</h1>

        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./Images/Diary Calendar Product 4.jpg" alt="">
                <h3>Red Velvet Diary</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.399/-</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./Images/Diary Calendar Product 2.jpg" alt="">
                <h3>Wall Calendars</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.199/-</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./Images/Rayana Calendar 3.jpg" alt="">
                <h3>Table Calendars</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Rs.299/-</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./Images/Diary Calendar Product 5.jpg" alt="">
                <h3>Customize Diary</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.365/-</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./Images/Diary Calendar Product 6.jpg" alt="">
                <h3>365 Days Diary</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.499 /-</span>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </section>


    <section class="about" id="about">

        <h3 class="sub-heading">Top Selling Product </h3>
        <h1 class="heading">Red Velvet Diary</h1>

        <div class="row">

            <div class="image">
                <img src="./Images/Diary Calendar Product 8.jpg" alt="">
            </div>

            <div class="content">
                <h3>Most Selling Product of the month</h3>
                <p>Ryana Calendars – Red Velvet Diary. Ryana Calendars' 12-month weekly diary covers a range of times from January to December 2022, with an area dedicated to the entire week on the left and a ruled page on the right for taking notes and
                    to-do lists. The planner has a hardcover, rounded corners, ivory-colored 70 g/m² paper, an expandable inner pocket, the iconic "in case of loss" notice on the front endpaper, and a bookmark in the same color as the cover. On the re-usable
                    paper band, B-SIDE additional tools are printed and the planner opens to 180° for greater convenience while writing and thinking. The package contains a 12-month weekly planner for 2022 with a hardcover, available in Large Size 13
                    x 21 cm, red Velvet.</p>



                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>


    <section class="items" id="items">

        <h3 class="sub-heading"> our Premiums </h3>
        <h1 class="heading">Our Premium Products</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="./Images/Diary Calendar Product 7.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Spiral Diary</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.599/-</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./Images/Rayana Calendar 4.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Table Calendar</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.699/-</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./Images/Rayana Diary Mockup 1.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Leather Diary</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.799/-</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./Images/Rayana Calendar 5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>NotePad Diary</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.565/-</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./Images/Rayana Diary 6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Personal Diary</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                    <a href="#" class="btn">add to cart</a>
                    <span class="price">Rs.580/-</span>
                </div>
            </div>
        </div>

    </section>


    <section class="review" id="review">

        <h3 class="sub-heading"> customer's review </h3>
        <h1 class="heading"> what they say </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/profile02.jpg" alt="">
                        <div class="user-info">
                            <h3>Salman Siddiqui</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quo consequatur obcaecati. Consequatur beatae deleniti culpa recusandae? Aliquid autem dolorum adipisci incidunt! Rem officiis nisi mollitia corrupti nam laudantium possimus.
                    </p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/profile02.jpg" alt="">
                        <div class="user-info">
                            <h3>Salman Siddiqui</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quo consequatur obcaecati. Consequatur beatae deleniti culpa recusandae? Aliquid autem dolorum adipisci incidunt! Rem officiis nisi mollitia corrupti nam laudantium possimus.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/profile02.jpg" alt="">
                        <div class="user-info">
                            <h3>Salman Siddiqui</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quo consequatur obcaecati. Consequatur beatae deleniti culpa recusandae? Aliquid autem dolorum adipisci incidunt! Rem officiis nisi mollitia corrupti nam laudantium possimus.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/profile02.jpg" alt="">
                        <div class="user-info">
                            <h3>Salman Siddiqui</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quo consequatur obcaecati. Consequatur beatae deleniti culpa recusandae? Aliquid autem dolorum adipisci incidunt! Rem officiis nisi mollitia corrupti nam laudantium possimus.</p>
                </div>

            </div>

        </div>

    </section>


    <section class="order" id="order">

        <h3 class="sub-heading"> order now </h3>
        <h1 class="heading"> free and fast </h1>

  
            
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <?php 
      
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>

            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input type="text" placeholder="enter order name">
                </div>
                <div class="input">
                    <span>customization</span>
                    <input type="test" placeholder="extra with diary">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>how musch</span>
                    <input type="number" placeholder="how many orders">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <input type="submit" value="order now" class="btn">

        </form>

    </section>


    <section class="footer">

        <div class="box-container">


            <div class="box">
                <h3>quick links</h3>
                <a href="#">➔ home</a>
                <a href="#">➔ about us</a>
                <a href="#">➔ products</a>
                <a href="#">➔ order</a>
                <a href="#">➔ contact us</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">➔ +92 3101242766</a>
                <a href="#">➔ +92 456151881</a>
                <a href="#">➔ salmannasirsiddiqui@gmail.com</a>
                <a style="text-transform: lowercase;" href="#">➔ Www.rayanacaledars.com</a>
                <a href="#">➔ North Nazimabad, Karachi</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">➔ facebook</a>
                <a href="#">➔ twitter</a>
                <a href="#">➔ instagram</a>
                <a href="#">➔ linkedin</a>
            </div>

        </div>

        <div class="credit"> copyright @ 2022 by <span>Salman Siddiqui</span> </div>

    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>






    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="script.js"></script>


</body>
<script>
    let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  section.forEach(sec =>{

    let top = window.scrollY;
    let height = sec.offsetHeight;
    let offset = sec.offsetTop - 150;
    let id = sec.getAttribute('id');

    if(top >= offset && top < offset + height){
      navLinks.forEach(links =>{
        links.classList.remove('active');
        document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
      });
    };

  });

}

document.querySelector('#search-icon').onclick = () =>{
  document.querySelector('#search-form').classList.toggle('active');
}

document.querySelector('#close').onclick = () =>{
  document.querySelector('#search-form').classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop:true,
});

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop:true,
  breakpoints: {
    0: {
        slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});


var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>

</html>