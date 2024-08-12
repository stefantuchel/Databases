/*!
* Start Bootstrap - Shop Homepage v4.3.0 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
  
 var canvas = document.getElementById("canvas");
        var c = canvas.getContext("2d");
        
        c.font = '30pt Arial';
        c.fillStyle = 'gray';
        c.strokeStyle = 'black';
        
        var x = 50, 
            y = 30,
            x1=50,
            y1=70,
            text = 'Guitar',
            text1=' Store';
        c.fillText(text , x, y);
        c.strokeText(text, x, y);
        c.fillText(text1 , x1, y1);
        c.strokeText(text1, x1, y1);