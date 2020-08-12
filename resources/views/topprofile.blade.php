<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet">

  <style>
#maine {
  position: relative;
}

#maine img {
 width: 100%;

}

/*---h1---*/
#maine p {
  position: absolute;/*絶対配置*/
  color: white;/*文字は白に*/
  font-weight: bold; /*太字に*/
  font-size: 3em;/*サイズ2倍*/
  font-family :Quicksand, sans-serif;
  top: 25%;
  left: 50%;
  -ms-transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
  margin:0;
  padding:0;
  text-align: center;

}

#maine a {
  text-decoration: none;
  color: white;
}

/*---button---*/
#maine button {
  background: #098191;
  transition: background ease .25s;
  border-radius: 10px;
  display: inline-block;
  border: none;
  padding:  0.75rem 1.5rem;
  margin: 0;
  text-decoration: none;
  color: #ffffff;
  font-size: 2rem;
  cursor: pointer;
  text-align: center;
  position: absolute;
  top: 65%;
  left: 50%;
  -ms-transform: translate(-50%,-50%);
  -webkit-transform: translate(-50%,-50%);
  transform: translate(-50%,-50%);
}
button:hover {
  background: #63b6b8;
}
button:focus {
  outline: 1px solid #fff;
   outline-offset: -4px;
}
  </style>

  <title>profile</title>
</head>
<body>
  <div id="maine">
    <img src="brasil.jpg">
  <p>Un Brasileiro no Japão</p>
    <button >
      <a href="home.html">
      >profile
      </a>
    </button>
  </div>
</body>
</html>
