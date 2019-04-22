<!DOCTYPE html>
<html lang="en">

      
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BViiSIFeK1FeK1dGmJRAKycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        body{
            background: #FF7300;

        }
        .our-team{
            padding: 30px 0-40px;
            background: white;
            text-align: center;
            overflow: hidden;
            padding: relative;
        }

        .our-team .pic{
            display: inline-block;
            width: 130px;
            height: 130px;
            margin-bottom: 50px;
            position: relative;
            z-index: 1;

        }

        .our-team .pic :before{
            content: "";
            width: 100%;
            background:  #4f2c1d;
            position: absolute;
            bottom: 135%;
            right: 0;
            left: 0;
            transform: scale(3);
            transition: all 0.3s linear 0s;

        }

        .our-team:hover .pic:before{
            height:100;
        }

        .our-team .pic::after{
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #FF7300;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .our-team .pic img{
            width: 100%;
            height: auto;
            border-radius: 50%;
            transform: scale(1);
            transition: all 0.9s ease 0s;

        }

        .our-team:hover pic img{
            box-shadow: 0 0 0 14px #FF7300;
            transform: scale(0.7);

        }

        .our-team .team-content{
            margin-bottom: 30px;
        }

        .our-team .title{
            font-size: 22px;
            font-weight: 700;
            color: #4f2c1d;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin-bottom: 5px;

        }

        .our-team .post{
            display: block;
            font-size: 15px;
            color: #4f2c1d;
            text-transform: capitalize;
        }

        .our-team .social{
            width: 100%;
            padding: 0;
            margin: 0;
            background: #FF7300;
            position: absolute;
            bottom: -100px;
            left: 0;
            transition: all 0.5s ease 0s;

        }

        .our-team:hover .social{
            bottom: 0;
        }

        .our-team .social li{
            display: inline-block;

        }

        .our-team .social li a{
            display: block;
            padding: 10px;
            font-size: 17px;
            color: white;
            transition: all 0.3s ease 0s

        }

        .our-team .social li a:hover{
            color: #4f2c1d;
            background: #FF7300;
            text-decoration: none;
        }
    
    </style>
</head>
<body>
        <br>
        <br>
        

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/Buser_Carol_crop.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Buser Carol</h3>
                        <span class="post">Professor</span>

                    </div>
                    <ul class="social">
                        <li><a href=""class="fa fa-twitter"></a></li>
                        <li><a href=""class="fa fa-google-plus"></a></li>
                        <li><a href=""class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/Carlson_Jadwiga_crop.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Carlson Jadwiga</h3>
                            <span class="post">Professor</span>
    
                        </div>
                        <ul class="social">
                            <li><a href=""class="fa fa-twitter"></a></li>
                            <li><a href=""class="fa fa-google-plus"></a></li>
                            <li><a href=""class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/Chao_Joseph_crop.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="title">Chao Joseph</h3>
                                <span class="post">Professor</span>
        
                            </div>
                            <ul class="social">
                                <li><a href=""class="fa fa-twitter"></a></li>
                                <li><a href=""class="fa fa-google-plus"></a></li>
                                <li><a href=""class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                </div>

                    <div class="col-md-3 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="images/Dasigi_Venu_crop.jpg">
                                </div>
                                <div class="team-content">
                                    <h3 class="title">Dasigi Venu</h3>
                                    <span class="post">Professor</span>
            
                                </div>
                                <ul class="social">
                                    <li><a href=""class="fa fa-twitter"></a></li>
                                    <li><a href=""class="fa fa-google-plus"></a></li>
                                    <li><a href=""class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                    </div>

                        <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/Decker_Michael_crop.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Decker Micheal</h3>
                                        <span class="post">Professor</span>
                
                                    </div>
                                    <ul class="social">
                                        <li><a href=""class="fa fa-twitter"></a></li>
                                        <li><a href=""class="fa fa-google-plus"></a></li>
                                        <li><a href=""class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/Dyer_Robert_crop.jpg">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Dyer Robert</h3>
                                        <span class="post">Professor</span>
                    
                                    </div>
                                    <ul class="social">
                                        <li><a href=""class="fa fa-twitter"></a></li>
                                        <li><a href=""class="fa fa-google-plus"></a></li>
                                        <li><a href=""class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/Green_Robert_crop.jpg">
                                    </div>
                                   <div class="team-content">
                                    <h3 class="title">Green Robert</h3>
                                    <span class="post">Professor</span>
                        
                                   </div>
                                    <ul class="social">
                                    <li><a href=""class="fa fa-twitter"></a></li>
                                    <li><a href=""class="fa fa-google-plus"></a></li>
                                    <li><a href=""class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                    <img src="images/Kresman_Ray_crop.jpg">
                                    </div>
                                   <div class="team-content">
                                   <h3 class="title">Kresman Ray</h3>
                                    <span class="post">Professor</span>
                            
                                    </div>
                                    <ul class="social">
                                    <li><a href=""class="fa fa-twitter"></a></li>
                                    <li><a href=""class="fa fa-google-plus"></a></li>
                                    <li><a href=""class="fa fa-linkedin"></a></li>
                                    </ul>
                              </div>
                        </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                        <img src="images/Lee_Jake_crop.jpg">
                                        </div>
                                        <div class="team-content">
                                        <h3 class="title">Lee Jake</h3>
                                        <span class="post">Professor</span>
                                
                                        </div>
                                        <ul class="social">
                                        <li><a href=""class="fa fa-twitter"></a></li>
                                        <li><a href=""class="fa fa-google-plus"></a></li>
                                        <li><a href=""class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
     

        <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images/Li_Ruinian_crop.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Li Ruinian</h3>
                        <span class="post">Professor</span>

                    </div>
                    <ul class="social">
                        <li><a href=""class="fa fa-twitter"></a></li>
                        <li><a href=""class="fa fa-google-plus"></a></li>
                        <li><a href=""class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>



<div class="col-md-3 col-sm-6">
        <div class="our-team">
            <div class="pic">
                <img src="images/Rajaei_Hassan_crop.jpg">
            </div>
            <div class="team-content">
                <h3 class="title">Rajaei Hassan</h3>
                <span class="post">Professor</span>

            </div>
            <ul class="social">
                <li><a href=""class="fa fa-twitter"></a></li>
                <li><a href=""class="fa fa-google-plus"></a></li>
                <li><a href=""class="fa fa-linkedin"></a></li>
            </ul>
        </div>
</div>


<div class="col-md-3 col-sm-6">
        <div class="our-team">
            <div class="pic">
                <img src="images/Roy_Sankar_crop.jpg">
            </div>
            <div class="team-content">
                <h3 class="title">Roy Sankar</h3>
                <span class="post">Professor</span>

            </div>
            <ul class="social">
                <li><a href=""class="fa fa-twitter"></a></li>
                <li><a href=""class="fa fa-google-plus"></a></li>
                <li><a href=""class="fa fa-linkedin"></a></li>
            </ul>
        </div>
</div>


<div class="col-md-3 col-sm-6">
        <div class="our-team">
            <div class="pic">
                <img src="images/Sheaffer_Travis_crop.jpg">
            </div>
            <div class="team-content">
                <h3 class="title">Sheaffer Travis</h3>
                <span class="post">Professor</span>

            </div>
            <ul class="social">
                <li><a href=""class="fa fa-twitter"></a></li>
                <li><a href=""class="fa fa-google-plus"></a></li>
                <li><a href=""class="fa fa-linkedin"></a></li>
            </ul>
        </div>
</div>


<div class="col-md-3 col-sm-6">
        <div class="our-team">
            <div class="pic">
                <img src="images/Weihl_Lisa_crop.jpg">
            </div>
            <div class="team-content">
                <h3 class="title">Weihl Lisa</h3>
                <span class="post">Professor</span>

            </div>
            <ul class="social">
                <li><a href=""class="fa fa-twitter"></a></li>
                <li><a href=""class="fa fa-google-plus"></a></li>
                <li><a href=""class="fa fa-linkedin"></a></li>
            </ul>
        </div>
</div>


<div class="col-md-3 col-sm-6">
        <div class="our-team">
            <div class="pic">
                <img src="images/Wu_Yan_crop.jpg">
            </div>
            <div class="team-content">
                <h3 class="title">Wu Yan</h3>
                <span class="post">Professor</span>

            </div>
            <ul class="social">
                <li><a href=""class="fa fa-twitter"></a></li>
                <li><a href=""class="fa fa-google-plus"></a></li>
                <li><a href=""class="fa fa-linkedin"></a></li>
            </ul>
        </div>

</div>
  
</div>
</div>


</body>
</html>