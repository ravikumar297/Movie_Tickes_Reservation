<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Loader</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

<style>

.bod{
  margin: 0;
  padding: 0;
  height: 100vh;
  background: url(background.jpg)no-repeat;
  background-size: cover;
}

.loader{
  background: #111;
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader div{
  background: #fff;
  width: 16px;
  height: 32px;
  margin-left: 10px;
  animation: loader 1.2s infinite;
}

@keyframes loader{
  50%{
    height: 64px;
  }
}

.loader div:nth-child(1){
  background: #FF9F1A;
  animation-delay: -0.40s;
}

.loader div:nth-child(2){
  background: #FED330;
  animation-delay: -0.20s;
}

.loader div:nth-child(3){
  background: #FFFA65;
  animation-delay: 0s;
}
      

</style>

  </head>
  <body class="bod">

    <div class="loader">
      <div></div>
      <div></div>
      <div></div>
    </div>

    <script type="text/javascript">
    setTimeout(function(){
      $('.loader').fadeToggle();
    },3000);
    </script>

  </body>
</html>
      