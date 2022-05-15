<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">


<style>
        *{
  padding: 0;
  margin: 0;

  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: 'Montserrat';
}
.sidebar{
  width: 220px;
  position: fixed;
  left: 0;
  top: 0;
  height: 100vh;
  background: #008ea1;
  z-index: 100;
  transition: width 300ms;
}
.sidebar-brand{
  height: 90px;
  padding: 1rem 0rem 1rem 2rem;
  color: #fff;
}
.sidebar-brand span{
  display: inline-block;
  margin-right: 1rem;
}
.sidebar-menu li{
  width: 100%;
  margin-bottom: 2rem;
  padding-left: 5%;
}
.sidebar-menu{
  margin-top: 1rem;
}
.sidebar-menu a{
  padding-left: 1rem;
  display: block;
  color: #fff;
  font-size: 1.1rem;
}
.sidebar-menu a span:first-child{
  padding-right: 1rem;
  font-size: 1.5rem;
}
.sidebar-menu a.active{
  background: #fff;
  padding-top: 1rem;
  padding-bottom: 1rem;
  color: #008ea1;
  border-radius: 30px 0px 0px 0px;
}



.content{
  transition: margin-left 300ms;
  margin-left: 17%;
}
header{
  background-color: #fff;
  display: flex;
  justify-content: space-between;
  padding: 1rem;
  box-shadow: 2px 5px 15px 2px rgb(0 0 0 / 10%);
  position: fixed;
  left: 17%;
  width: calc(100% - 17%);
  top: 0;
  z-index: 100;
  transition: left 300ms;
}


.accueil{
  font-size: 1.5rem;
  padding-right: : 1rem;
  margin-left: 15px;
  color: #008ea1;
}
.search-wrapper{
  border: 1px solid #008ea1;
  border-radius: 20px;
  height: 38px;
  display: flex;
  align-items: center;
  overflow-x: hidden;
}
.search-wrapper input{
  height: 100%;
  padding: .5rem;
  border: none;
  outline: none;
}
.search-wrapper span{
  display: inline-block;
  padding: 0rem 1rem;
  font-size: 1.5rem;
  color: #008ea1;
}
.user-wrapper{
  display: flex;
  align-items: center;
}
.user-wrapper img{
  border-radius: 50%;
  margin-right: 5rem;
}
.user-wrapper small{
  color: #ccc;
  display: inline-block;
}
.logo-admin{
  cursor: pointer;
}
#dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  height: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 5px;
  z-index: 1;
}

#dropdown:hover .dropdown-content {
  display: block;
  cursor: pointer;
}
.dropdown-content p{
  padding: .5rem;
}


main{
  margin-top: 50px;
  background: #ebf6ff;
  padding: 2rem 1.5rem;
  min-height: calc(100vh);
}
.cards{
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 2rem;
  margin-top: 1rem;
}
.card-single{
  display: flex;
  background: #fff;
  justify-content: space-between;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 2px 5px 10px 2px rgb(0 0 0 / 10%);
}
.card-single span:first-child{
  color: #f8e80c;
}
.card-single span:last-child{
  font-size: 2rem;
}
.card-single small{
  color: grey;
}
.card-single:hover{
  background: #008ea1;
  color: #fff;
}

@import url('../css/fonts.css');



html, body{
	margin: 0%;
	box-sizing: border-box;
	overflow-x: hidden;
}

:root{
	/* Theme colors */
	--text-gray:#3f4954;
	--text-light:#686666de;
	--bg-color:#0f0f0f;
	--white:#ffffff;
	--midnight:#104f55;
    /* gradient color */
	--sky: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
	/* theme font-family */
   --Abel:'Abel',cursive;
   --Anton:'Anton',cursive;
   --Josefin_Sans:'Josefin_Sans',cursive;
   --Lexend:'Lexend',cursive;
   --Livvic:'Livvic',cursive;

}


/* ----------------------- Global Classes ----------------- */

	a{
		 text-decoration: none;
		  color: var(--text-gray);

	}
	.flex-row{
		display: flex;
		flex-direction:row ;
		 flex-wrap: wrap;
		 color: #3f4954;
	}
	ul{
		list-style-type: none;
	}
	h1{
		font-family: var(--Lexend);
		font-size: 2.5rem;
		color: var(--bg-color);

	}
	h2{
		font-family: var(--Lexend);
	}
	h3{
		font-family: var(--Abel);
		font-size: 1.3rem;
		color: var(--bg-color);
	}

button.btn{
	border: none;
	border-radius: 2rem;
	padding: 1rem 3rem;
	font-size: 1rem;
	font-family: var(--Livvic);
	cursor: pointer;

}

span{
	font-family: var(--Abel);

}


.container{
	margin: 0 5vw;
}

.text-gray{
	color: var(--text-gray);
}

p{
	font-family: var(--Lexend);
	color: var(--text-light);
}

/* ----------x------------- Global Classes ----------x------- */



/* ---------------- navbar ------------- */
.nav{
	background: white ;
	padding:  0 2rem;
	height:  0rem;
	min-height: 10vh;
	overflow: hidden;
	transition: height 1s ease-in-out ;
}

.nav .nav-menu{
	
	justify-content: space-between;
}
.nav .toggle-collpase{
	position: absolute;
	top: 0%;
	width: 90%;
	cursor: pointer;
	display: none;
}
.collpase{
	height: 30rem;
}

.nav .toggle-collpase .toggle-Icons{
	display: flex;
	justify-content: flex-end ;
	padding: 1.7rem 0;
}
.nav .toggle-collpase .toggle-Icons i{
	font-size: 1.4rem;
	color: var(--text-gray);
}
.nav .nav-items{
	list-style-type: none;
	display: flex;
	margin: 0;

}
.nav .nav-items .nav-link{
	padding: 1.6rem 1rem;
	font-size: 1.1rem;
	position: relative;
	font-family:var(--Abel) ;
	font-size: 1.1rem;


}


.nav .nav-items .nav-link:hover{
	background-color:var(--midnight) ;
}

.nav .nav-items .nav-link:hover a{
	color: var(--white);
}
.nav .nav-brand a{
	font-size: 1.6rem;
	padding: 1rem 0;
	display: block;
	font-family: var(--Lexend);
	font-size: 1.6rem;
}
.nav .social{
	padding: 1.4rem 0;

}

.nav .social .i{
	padding: 0 ,2rem;
}
 
.nav .social .i:hover{
	color: #a1c4cf ;
}




/* -------x--------- navbar -------x------ */



/* --------------------- Main Content --------------------*/


/* --------------------site Titel ----------------*/


main .site-title{
	background: url(../assets/backgruond-image.jpg);
	background-size: cover;
	height: 110vh;
	display: flex;
	justify-content: center;
}

main .site-title .site-background{
	padding-top: 10rem ;
	text-align: center;
	color: var(--white);
}
main .site-title h1,h3{
	margin: .3rem;
}

main .site-title .btn{
	margin: 1.8rem;
	background: var(--sky);

}

main .site-title .btn:hover{
	background: transparent;
	border: 2px solid var(--bg-color);
}

/* ----------X---------site Titel --------X-------*/

/* -------------------- Blog Carousel -------------------- */

main .blog{
	background: url('../assets/Abract01.png');
	background-repeat: no-repeat;
	background-position: right;
	height: 100vh;
	width: 100%;
	background-size: 65%;

}
main .blog .blog-post{
	padding-top: 2rem ;

}

 main .blog-post .blog-content{
	 display: flex;
	 flex-direction: column;
	 text-align: center;
	 width: 80%;
	 margin: 3rem 2rem;
	 box-shadow: 0 15px 20px rgba(0, 0, 0, 0.5);

 }


 main .blog-content .blog-titel{
	 padding: 2rem 0 ;

 }
 main .blog-content .btn-blog{
	 padding: .7rem 2rem;
	 background: var(--sky);
		margin: .5rem;
 } 
 main .blog-content span{
	 display: block;
 } 

section .container .owl-nav{
	position: absolute;
	top: 0%;
	margin: 0 auto;
	width: 100%;
}

.owl-nav .owl-prev .owl-nav-prev,
.owl-nav .owl-next .owl-nav-next{
	color: var(--text-gray);
	background: transparent;
	font-size: 2rem;
}

.owl-theme .owl-nav [class*='owl-']:hover{
	background: transparent;
	color: var(--midnight);
}


.owl-theme .owl-nav [class*='owl-']{
	outline: none;
}
/* ---------------X------------------ Blog Carousel ------------X---------- */


/*-------------------------Site Content ----------------------*/
main .site-content{
	
	display: grid;
	grid-template-columns: 70% 30%;
}

main .post-content{
	width: 100%;
	margin-bottom: 5rem;
}
main .site-content .post-content > .post-image,.post-title {
	padding: 1rem 2rem ;
	position: relative;
}
main .site-content .post-content > .post-image .post-info{
	background: var(--sky);
	padding: 1rem ;
	position: absolute;
	bottom: 0%;
	left: 20vw;
	border-radius: 3rem;
}
main .site-content .post-content > .post-image > div{
	overflow: hidden;
	
}

main .site-content .post-content > .post-image > div audio{
	overflow: hidden;
	padding: 2rem;
}
main .site-content .post-content > .post-image .img{
	width: 100%;
	transition: all 1s ease;
}



main .site-content .post-content > .post-image .img:hover {
     transform: scale(1.3);
}

main .site-content .post-content > .post-image .post-info span{
	margin:  0 .5rem;
}

main .post-content .post-title a{
	font-family: var(--Anton);
	font-size:  1.5rem;

}
.site-content .post-content .post-title .post-btn{
	border-radius: 0;
	padding: .7rem 1.5rem;
	background: var(--sky);
}

.site-content .pagination{
	justify-content: center;
	color: var(--text-gray);
	margin: 4rem 0;
}
.site-content .pagination a{
	padding: .6rem .9rem;
	border-radius: 2rem;
	margin: 0 .3rem;
	font-family: var(--Lexend);

}
.site-content .pagination .pages{
	background: var(--text-gray);
	color: var(--white);
}

/*--------X----------------Site Content ------------X---------*/


/*-------------------------Sidebar---------------*/

.site-content > .sidebar .category-list{
	font-family: var(--Livvic);
}
.site-content > .sidebar .category-list .list-items{
	background: var(--sky);
	padding: .4rem 1rem ;
	margin: .8rem 0;
	border-radius: 3rem;
	width: 70%;
	display: flex;
	justify-content: space-between;
}
.site-content > .sidebar .category-list .list-items a{
	color: black;
}

.site-content .sidebar .popular-post .post-content{
	padding: 1rem 0;

}
.site-content .sidebar .popular-post h2{
	padding-top: 8rem;
}
.site-content .sidebar .popular-post .post-info{
	padding: .4rem .1rem !important;
	bottom: 0rem !important;
	left: 1.5rem !important;
	border-radius: 0rem !important;
	background: white !important;
}
.site-content .sidebar .popular-post .post-title a{
	font-size: 1rem;
}
.site-content .sidebar .newsletter{
	padding-top: 10rem;
}
.site-content .sidebar .newsletter .form-element{
	padding: .5rem 2rem;
}
.site-content .sidebar .newsletter .input-element{
	width: 80%;
	height: 1.9rem;
	padding: .3rem .5rem;
	font-family: var(--Lexend);
	font-size: 1rem;
}

.site-content .sidebar .newsletter .form-btn{
	border-radius: 0;
	padding: .8rem 32%;
	margin: 1rem 0;
	background: var(--sky);
}
.site-content .sidebar .popular-tags{
	padding: 5rem 0;
}
.site-content .sidebar .popular-tags .tags .tag{
	background: var(--sky);
	padding: .4rem 1rem;
	border-radius: 3rem; 
	margin: .4rem .6rem;
}


/*-----------X-------------Sidebar-------X-------*/
/* ------X-------------- Main Content -----------X--------*/

/*---------------------Footer------------------*/
footer.footer{
	height: 80%;
	background: var(--bg-color);
	position: relative;
  margin: 0px;
  margin-top : 20px;
}
footer.footer .container{
	display: grid;
	grid-template-columns: repeat(4, 1fr);
} 

footer.footer .container > div{
	flex-grow: 1;
	flex-basis:0;
	padding:3rem .9rem;
}

footer.footer .container  h2{
	color: var(--white);
}

footer.footer .newsletter .form-element{
	background: black;
	display: inline-block;
}
footer.footer .newsletter .form-element input{
	padding: .5rem .7rem;
	border: none;
	background: transparent;
	color: white;
	font-family: var(--Josefin_Sans);
	font-size: 1rem;
	width: 74%;

}

footer.footer .newsletter .form-element span{
	background: var(--sky);
	padding: .5rem .7rem;
	cursor: pointer;
}

footer.footer .instagram div > img{
	display: inline-block;
	width: 25%;
	height: 50%;
	margin: .3rem .4rem;
}
footer.footer .follow div i {
	color: var(--white);
	padding: 0 .4rem;
}

footer.footer .rights{
	justify-content: center;
	font-family: var(--Josefin_Sans);
}
footer.footer .rights h4 a{
	color: white;
}
footer.footer .move-up{
	position: absolute;
	right: 6%;
	top: 50%;  
}
footer.footer .move-up span{
	color: var(--midnight);
}

footer.footer .move-up span:hover{
	color: var(--white);
	cursor: pointer;
}

/*-----------X---------Footer----------X-------*/

</style>