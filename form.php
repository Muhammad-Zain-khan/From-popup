<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
// $(document).ready(function(){
//   $(window).ready(function(){
//     $("#overlay").animate({top: '250px'});
//   });
// });
</script>
</head>

<body>


    <div id="overlay" >
    
        <form class="form-box" id="box-1" method="post" action="code.php" >
            <div class="frm-div">
            <div class="close-btn"  onclick="document.getElementById('overlay').style.display = 'none'" >x</div>
                <h1><span>Why wait</span> further 
                </h1>
                <p>start today and get 30% off</p>
                <input name="b_name" class="form-control" type="text" required="" placeholder="Enter Your Name">
                <input name="b_email" class="form-control" type="email" required="" placeholder="Enter Your Email Address">
                <input name="b_num" class="form-control" type="number" required="" placeholder="Enter Phone Number">
                <textarea class="form-control san-bor" name="b_msg" placeholder="Message" required></textarea>
                <input  type="submit" name="contact_btn" class="btn form-btn" value="Submit">
            </div>
        </form>
        
    </div>




<div class="box" data-aos="fade-right">
    zain
</div>

    <style>
        #overlay {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 2;
            cursor: pointer;
        }


        .close-btn
        {
            position:relative;
            padding: 10px;
            left:100%;
            right:0px;
            text-align: center;
           width:20px;
            background-color: #999;
            border-radius: 100px;
        }


        .form-box {
            width: 20%;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            height: 569px;
            background-size: auto;
            padding: 10px 40px;
            border-radius: 15px;
            height: 569px;
            background-color:#1ebc9b;
            margin:auto;
        }

        .form-box h1 {
            font-size: 36px;
            font-weight: 800;
            color: white;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: -7px;

        }

        
        .form-box h1 span {
            color: #999;
        }

        .form-box p {
            color: white;
            line-height: 5px;
        }
        .frm-div
        {
            width:100%;
           
            padding: 0px;
        }
 

        .form-box .form-control
         {  width: 80%; 
            outline: none;
             border:none;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
             padding: 10px 40px;
            border-radius: 15px;
            display: block;
            border-radius: 10px;
            margin: 20px 0px;
} 

textarea
{
    height: 150px;
}
.form-btn
{
    width:100%;
    padding: 10px 0px;
    border-radius: 10px;
    outline:none;
    border:none;
}
.form-box .form-btn:focus
{
    outline:1px solid yellow;
} 
.form-box .form-control:focus
{
    outline:1px solid yellow;
} 
    </style>

<script>
               


      setTimeout(function () {
                    document.querySelector("#overlay").style.display = "block"
        
                }, 5000);


</script>



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>