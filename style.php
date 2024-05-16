	<style type="text/css">
		body{
			overflow-y: hidden;
		}
		.profilecontainer{
			width :80%;
			height:435px;
			background-color: white;
			position: relative;
			top: 60px;
			float: left;
			left: 9.5%;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
		}
		.profilenamecontainer{
			position: relative;
		}
		.profilename{
			font-family: arial;
			font-size: 22px;
			color: black;
			position: relative;
			top: 85px;
			left: 456px;
			font-weight: 600;
			
		}
		.logoimg{
			width: 225px;
			height: 225px;
			border-radius: 360px;
			position: relative;
			left: 42.5%;
			top:40px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
			object-fit: cover;
		}
		.ourdevelopers{
			position: relative;
			width: 25%;
			font-family: arial;
			font-size: 18px;
			color: black;
			border: solid thin #d3d3d3;
			border-radius: 6px;
			padding: 5px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
			position: relative;
			right:65%;
			float: right;
			top: 350px;
			text-decoration: none;
		}
		.ourdevelopersdivcontainer{
			z-index: 2;
			width: 85%;
			height: 40%;
			background-color: #d3d3d3;
			display: none;
			position: relative;
			right:7.5%;
			float: right;
			top: 200px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
		}
		.ourdevelopersdiv{
			
		}
		.ourdeveloperstxt{
			position: relative;
			width: 25%;
			font-family: arial;
			font-size: 18px;
			color: black;
			border: solid thin #d3d3d3;
			border-radius: 6px;
			padding: 5px;
			
			position: relative;
			right:65%;
			float: right;
			top: 0px;
			text-decoration: none;
		}
		.emp1pic{
			width: 225px;
			height: 225px;
			border-radius: 100%;
			position: relative;
			left: 3.5%;
			top:40px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
			object-fit: cover;
			float:left;
		}
		.emp2pic{
			width: 225px;
			height: 225px;
			border-radius: 100%;
			position: relative;
			left: 26.5%;
			top: 40px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
			object-fit: cover;
			float:left;
		}
		.emp1bio{
			display: none;
			position: relative;
			width: 25%;
			font-family: arial;
			font-size: 18px;
			color: black;
			padding: 5px;
			position: relative;
			right: 26.5%;
			float: right;
			top: 62px;
			text-decoration: none;
		}
		.emp1name{
			position: relative;
			width: 25%;
			font-family: arial;
			font-size: 18px;
			color: black;
			padding: 5px;
			position: relative;
			right: 67%;
			float: right;
			top: 270px;
			text-decoration: none;
			
		}
		.emp2bio{
			display: none;
			position: relative;
			width: 25%;
			font-family: arial;
			font-size: 18px;
			color: black;
			padding: 5px;
			position: relative;
			right: 26.5%;
			float: right;
			top: 62px;
			text-decoration: none;
		}
		.emp2name{
			position: fixed;
			width: 25%;
			font-family: arial;
			font-size: 18px;
			color: black;
			padding: 5px;
			position: relative;
			left: -0.5%;
			float: right;
			top: 270px;
			text-decoration: none;
			
		}
		.aboutus{
			position: relative;
			width: 25%;
			font-family: arial;
			font-size: 18px;
			color: black;
			border: solid thin #d3d3d3;
			border-radius: 6px;
			padding: 5px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
			position: relative;
			right:12.5%;
			float: right;
			top: 350px;
			text-decoration: none;
		}
		.aboutusdivcontainer{
			z-index: 2;
			width: 68%;
			height: 5%;
			background-color: #d3d3d3;
			position: relative;
			right:16.5%;
			display: none;
			float: right;
			top: -20px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
			color: black;
		}
		.aboutustxt{
			color: black;
			font-size: 18px;
			font-family: arial;
			position: relative;
			left: 15px;
			top: 15px;
		}
        .applydiv{
			width :50%;
			height:455px;
			background-color: white;
			position: relative;
			top: 118px;
			float: left;
			left: 24.5%;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            color: black;
        }
        .applyform{
            position: relative;
            top: 30px;
            height: 300px;
        }
        .applynowtxt{
            font-size: 22px;
            font-family: arial;
            position: relative;
            top: 15px;
            
        }
		.role{
            width: 35%;
            padding: 10px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            border: none;  
        }
        .name{
            width: 35%;
            padding: 10px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            border: none;
			position: relative; 
			top:20px;
        }
        .email{
            width: 35%;
            padding: 10px;
            position: relative;
            top:40px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            border: none;  
        }
        .address{
            width: 35%;
            padding: 10px;
            position: relative;
            top:60px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            border: none;  
        }
        .phonenumber{
            width: 35%;
            padding: 10px;
            position: relative;
            top:80px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            border: none;  
        }
        .message{
            width: 35%;
            padding: 10px;
            position: relative;
            top:100px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            border: none;  
        }
        .submit{
            width: 35%;
            padding: 10px;
            position: relative;
            top:120px;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            border: none;
        }
		.success{
			width :49.7%;
			height:78px;
			background-color: white;
			position: relative;
			top: 118px;
			
			left: 24.5%;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            color: black;
		}
		.successtxt{
			font-size: 22px;
            font-family: arial;
            position: relative;
            top: 15px;
			left: 15px;
		}
		.goback{
			width :9.7%;
			height:78px;
			background-color: white;
			position: relative;
			top: 138px;
			
			left: 44.5%;
			border-radius: 6px;
			box-shadow: 0 0 10px 5px rgba(0,0,0,0.08);
            color: black;
		}
		.gobacktxt{
			color: black;
			text-decoration: none;
			font-size: 22px;
            font-family: arial;
            position: relative;
            top: 26.5px;
			left: 50px;
		}
	</style>