<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>profile-home</title>
    <link rel="stylesheet" >
    <style>
     
body {
    font-family: "Helvetica Neue",
    Arial,
    "Hiragino Kaku Gothic ProN",
    "Hiragino Sans",
    Meiryo,
    sans-serif;
}

#wrapper {
    height: 100%;
    min-height: 100vh;
    position: relative;/*←相対位置*/
    padding-bottom: 120px;/*←footerの高さ*/
    box-sizing: border-box;/*←全て含めてmin-height:100vhに*/
}

/*--top--*/
#top {
    color: white;
    padding: 0;
    position: relative;
}

.background {
    width: 100%;
}

#moji {
    position: absolute;
    top: 10%;
    left: 10%;
}

#top p {
    text-decoration: underline;
    font-size: 2em;
}


.top-image-area {
  width: 100%;
  height: 300px;
  background-image: url("photo/corcovado.jpg");
  background-position: 50% 20%;
  background-size: cover;
}

/*--header--*/
header {
  z-index: 10;
　height: 64px;
  position: absolute;
  top: 240px;
  background-color: #333;
  width: 100%;
  text-align: center;
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
}


header ul {
　　overflow:hidden;
　　list-style:none;
　　margin: 0 auto;
　　z-index: 20;
}
 
header ul li {
  display: inline-block;
  padding: 26px 10px 20px 10px;
}

header ul li a {
  color:  #098191;
　text-transform: uppercase;
}


.btn4{
  text-transform: uppercase;
  text-align: center;
  position: relative;
  text-decoration: none;
  display:inline-block;
}
 
.btn4::before {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0px;
  width: 100%;
  height: 2px;
  background: #63b6b8;
  display: block;
  -webkit-transform-origin: right top;
  -ms-transform-origin: right top;
  transform-origin: right top;
  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
  transform: scale(0, 1);
  -webkit-transition: transform 0.4s cubic-bezier(1, 0, 0, 1);
  transition: transform 0.4s cubic-bezier(1, 0, 0, 1)
}
.btn4:hover::before {
  -webkit-transform-origin: left top;
  -ms-transform-origin: left top;
  transform-origin: left top;
  -webkit-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  transform: scale(1, 1)
}
 
.btn2{
  text-transform: uppercase;
  text-align: center;
  position: relative;
  text-decoration: none;
  display:inline-block;
  border-bottom: 2px solid #63b6b8;
 
}
/*--footer--*/
footer {
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 30px 0;
    position: absolute;/*←絶対位置*/
    bottom: 0; /*下に固定*/
    
}


    </style>
</head>

<body>
    
 <div class="top-image-area">
     <header>
      <ul>
         <li><a href="home.html" class="btn2">Home</a></li>
        <li><a href="syumi.html" class="btn4">趣味</a></li>
        <li><a href="keireki.html" class="btn4">経歴</a></li>
        <li><a href="like.html" class="btn4">好きな事</a></a></li>
        <li><a href="aruaru.html" class="btn4">あるある</a></li>
      </ul>
     </header>
 </div>
 
 <div id="wrapper">
  
  <div id="top">
    <img class="background" src="photo/brasileiro.jpg">
     <div id="moji">
      <h1 class="one">- fullname -
       <p>tenguan de souza fabiano rogerio</p>
      </h1>
      <h1 class="two">- nickname -
       <p>fabi</p>
      </h1>
      <h1 class="three">- age -
       <p>23</p>
      </h1>
     </div>
    </img>
  </div>
  
  <div id="list">
   <table class="table" border="1">
     
   <tr>
    
    <th>
     <img src="photo/syumi.jpg">
     <a href="syumi.html">
       >趣味
     </a>
    </th>
    
    <th>
     <img src="photo/keireki.jpg"></img>
     <a href="keireki.html">
       >経歴
     </a>
    </th>
    
    <th>
     <img src="photo/like.jpg">
     <a href="like.html">
       >好きな事
     </a>
    </th>
    
    <th>
     <img src="photo/samba.jpg">
      <a href="aruaru.html">
       >あるある
      </a>
    </th>
    
   </tr>
   </table>
    
  </div>
  <footer>
   <p>abc</p>
  </footer>
 </div>
</body>
</html>
