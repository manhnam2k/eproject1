<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <head>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

    <title>Rheem Cooling</title>
</head>
<body>
<?php include 'header.php'?>
<section id="Slider">
    <div class="aspect-ratio-169">
        <img src='image/slide6.png' /> 
        <img src='image/slide7.jpg' /> 
        <img src='image/slide1.jpg'  /> 
        <img src='image/slide2.jpg'  /> 
        <img src='image/slide4.jpg'  /> 
        <img src='image/slide5.jpg'  /> 
    </div>
</section>
<!-- Main_cartegory -->
<?php include 'cartegory.php'?>
<?php include 'footer.php'?>
</body>
<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    let imgNumber = imgPosition.length
    let index=0
    // console.log(imgPosition)
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
    })
    function imgSlide(){
        index++;
        console.log(index)
        if(index>=imgNumber) {index=0}
        imgContainer.style.left = "-" +index*100 +"%"
    }
    setInterval(imgSlide,5000)
</script>
</html>