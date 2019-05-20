<style>
	body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}

.header{
	height: 100vh;
	background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('image/joshua-aragon-1247394-unsplash.jpg');
	background-position: center;
	background-size: cover;
	background-attachment: fixed;
}

.user-box{
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;
}

.user-box img{
	border-radius: 50%;
	width: 250px;
	border: 2px solid #6caed5;
}

.user-box h1{
	color: #fff;
	font-weight: bold;
	margin: 10px;
}

.user-box p{
	color: #fff;
}

.scroll-btn{
	bottom: 30px;
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	border: 1px solid #fff;
	padding: 10px 10px 20px;
	border-radius: 30px;
}

.scroll-bar span{
    border: 2px solid #fff;
    font-size: 10px;
    border-radius: 30px;
}

.scroll-bar{
	animation: mover 1s infinite alternate;
}

@keyframes mover{
	0%{transform: translateY(0);}
	100%{transform: translateY(10px);}
}

.about{
	padding-top: 100px;
	margin-bottom: -130px;
}

.profile-img{
	height: 400px;
}

.nav-bar{
	top: 0;
	position: sticky;
	z-index: 2;
}

.navbar{
	background-color: black;
}
.nav-bar .fa-bars{
	font-size: 35px;
	color: #fff;
}

.navbar-toggler{
	outline: none !important;
}

.navbar-nav{
	float: right;
	text-align: right;
}
.nav-link{
	color: white !important;
}

.navbar-brand{
	color: white;
}

.skills-bar p{
	margin-bottom: 6px;
	font-weight: 600;
}

.progress{
	border-radius: 16px !important;
	margin-bottom: 10px;
}

.progress-bar{
	border-radius: 16px;
	background: black !important;
}

.social-icons{
	top: 50%;
	transform: translateY(-50%);
	position: sticky;
	z-index: 1;
	width: 80px;
}
.social-icons ul{
	padding: initial;
}
.social-icons ul li{
	height: 40px;
	width: 40px;
	list-style-type: none;
	padding-left: 12px;
	padding-top: 6px;
	margin-top: 5px;
	color: #fff;
	background: #000;
}
.social-icons ul li:hover{
	padding-left: 30px;
	width: 80px;
	transition: 0.5s;
}

.resume{
	margin-top: -50px;
	padding-top: 50px;
	padding-bottom: 30px;
	background: #f9f9f9;
}
.resume h3{
	margin-bottom: 50px;
}
.timeline{
	list-style-type: none;
	position: relative;
}

.timeline li{
	margin-top: 20px;
	margin-bottom: 20px;
	margin-left: 20px;
	background: #fff;
}

.timeline li h4{
	background-color: #000;
	padding: 5px 0 5px 20px;
	color: #fff;
	font-size: 15px;
}
.timeline li h4 span{
	font-weight: bold;
	color: #ccc;
}

.services{
	padding-top: 50px;
	padding-bottom: 50px;
}

.sevices h1{
	margin-bottom: 15px;
}

.services-box{
	background: #f9f9f9;
	padding: 10px;
	margin-top: 20px;
	border-top-right-radius: 50px;
	border-bottom-left-radius:50px ;
}
.services-box .fa{
	margin: 0 180px;
	font-size: 20px;
}
.services-box span{
	margin: 3px;
	font-size: 20px;
	font-weight: bold;

}

.services-box p{
	font-size: 15px;
	margin-top: 20px;
	color: #777;
}

.services-box:hover{
	background: #000;
	color: #fff;
	border-top-right-radius: 0;
	border-bottom-left-radius: 0;
	border-top-left-radius: 50px;
	border-bottom-right-radius: 50px;
	transition: 1s;
}

.services-box:hover p{
	color: #fff;
}

.contact{
	padding-top: 50px;
	background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url('image/aleks-dorohovich-26-unsplash.jpg');
	background-position: center;
	background-size: cover;
	background-attachment: fixed;
	color: #fff;
}
.contact .row{
	padding: 30px 0;
	font-size: 22px;
}
.contact .col-md-4 .fa{
	padding: 10px;
	font-size: 40px;
}
.contact .btn{
	padding: 10px 25px 10px 25px;
	margin: 5px;
	border-radius: 30px;
	border: 2px solid #fff;
	background: transparent;
}
.contact .btn:focus{
	box-shadow: none !important;
}
.contact .btn:hover{
	border: 2px solid #000 !important;
	background: #000 !important;
	transition: .6s;
}
.contact .btn .fa{
	margin-right: 10px;
}
.footer{
	background: #000;
	height: 50px;
	margin-top: 50px;
	color: #fff;
	padding-top: 10px;
}




</style>
</head>