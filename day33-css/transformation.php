<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CSS transformation</title>
    <style>
        .wrapper {
            position: relative;
            width: 400px;
            margin: auto;
        }
        
        #box,
        #box2 {
            border: 1px solid red;
            padding: 1em;
            width: 200px;
            background-color: springgreen;
            color: #ffffff;
        }
        
        #box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: 0 0;
            transform: translateY(-50%) translateX(-50%) rotate(44deg) rotateY(0deg);
            backface-visibility: hidden;
            /*transform: perspective(100px) translateZ(0px);*/
        }
        
        #box2 {
            position: absolute;
            top: 50%;
            left: 50%;
            border: 1px solid red;
            padding: 1em;
            width: 200px;
            background-color: dodgerblue;
            color: #ffffff;
        }
        
        #box2.changed {
            background-color: red;
            transform: perspective(1000px) rotateZ(360deg);
            transition: all 3s;
        }
    </style>
</head>

<body>
    <button id="start">Start transition</button>
    <div class="wrapper">
        <div id="box">
            THIS IS A CONTENT OF THE BOX
        </div>
        <div id="box2">boxxxxx 2</div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur earum, molestias, ex sapiente atque, doloribus ipsam
        voluptatibus minus temporibus eius in sit velit rem voluptas illum necessitatibus. Architecto, illum.<br>        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur earum, molestias, ex sapiente atque, doloribus
        ipsam voluptatibus minus temporibus eius in sit velit rem voluptas illum necessitatibus. Architecto, illum.<br> Lorem
        ipsum dolor sit amet, consectetur adipisicing elit. Modi tenetur earum, molestias, ex sapiente atque, doloribus ipsam
        voluptatibus minus temporibus eius in sit velit rem voluptas illum necessitatibus. Architecto, illum.<br> Lorem ipsum
        dolor sit amet, consectetur adipisicing elit. Modi tenetur earum, molestias, ex sapiente atque, doloribus ipsam voluptatibus
        minus temporibus eius in sit velit rem voluptas illum necessitatibus. Architecto, illum.<br>
    </div>

    <script>
        document.getElementById('start').addEventListener('click', function () {
            var box = document.getElementById('box2');
            // console.log(box);
            if (box.className == 'changed') {
                box.className = '';
            } else {
                box.className = 'changed';
            }
            document.getElementById('box2').className = 'changed';
        });

    </script>
</body>

</html>