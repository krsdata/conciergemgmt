
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Page not found!</title>

</head>

<body>
    <div id="main">
    	<div class="fof">
            <div class="box">
                <img src="https://hamptonsboatrental.com/public/photos/200411072235.png?v=1"><br>
                <h1>Error 404</h1>
                <h2>The page you're looking for couldn't be found. :(</h2>
                <p><a href="<?php echo e(url('/')); ?>" class="text-white">Take me where the boats are!</a></p>
            </div>
    	</div>
        <img src="https://hamptonsboatrental.com/public/photos/2/62-pershing/pershing-62-1 (2).jpg" class="bg" alt="Our Boats Header Image">
    </div>
</body>
</html>


<style>
    *{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: tenor sans,sans-serif;
    margin: 0;
    color: #15b8f3;
    overflow: hidden;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}
    .box {
        background: #fff;
        padding: 50px 100px;
        display: inline-block;
            border-radius: 20px;
    }
    img.bg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: 1;
        opacity: 0.2;
        min-width: 100%;
        min-height: 100%;
    }
    
.fof{
	  display: table-cell;
	  vertical-align: middle;
    position: relative;
    z-index: 2;
    
}

.fof h1{
	  font-size: 40px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes  type{
	  from{box-shadow: inset -3px 0px 0px #15b8f3;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
    .not-found{background:url("<?php echo e(asset('/frontend/images/bg/counter.jpg')); ?>") no-repeat 50% 50%;background-size:cover}
    a {    color: #242424;}
    a:hover {text-decoration: none;}</style>
<?php /**PATH /home1/ncwfegko/public_html/resources/views/frontend/404.blade.php ENDPATH**/ ?>