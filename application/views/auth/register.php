<style media="screen">
body, html{
  background-color:#34515E;
 font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 18px;

}

.register-form{
  font-size: 16px;
 left: 50%;
  top: 50%;
  position: absolute;
  -webkit-transform: translate3d(-50%, -50%, 0);
  -moz-transform: translate3d(-50%, -50%, 0);
  transform: translate3d(-50%, -50%, 0);
}

.regbutton{
  height: 50px;
  width: 200px;
  background-color:tomato;
  border-radius: 20px;
  font-size: 18px;
  color:white;
  border: none !important;
  margin-bottom: 5px;
  margin-left: 110px;
}
.regbutton:hover{
  color: white;
  background-color:#aa422f;
}
.regbutton:active{
  color: white;
  background-color:#aa422f;
}
.logbutton{
  height: 50px;
  width: 200px;
  background-color:yellowgreen;
  border-radius: 0px;
  font-size: 18px;
  color:white;
  border: none !important;
  margin-bottom: 5px;
}
.logbutton:hover{
  color: white;
  background-color:darkolivegreen;
}
.logbutton:active{
  color: white;
  background-color:darkolivegreen;
}



.register-form label{
  color: aliceblue;

}
.register-form input{
  margin-bottom: 5px;
  width: 430px;
  height: 40px;
  border-radius: 0px;
}

</style>

<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<div class="container-fluid">

	 <form action="" method="post" action="/" class="register-form">
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
               <input name="name" class="form-control" placeholder="NAME" type="text">
           </div>
      </div>
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
               <input name="email" class="form-control" placeholder="EMAIL" type="email">
           </div>
      </div><div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">

               <input name="nim" class="form-control"placeholder="Nim" type="text">
           </div>
      </div>
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
               <input name="password" class="form-control" placeholder="Password" type="password">
           </div>
      </div>
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
               <input name="password2" class="form-control" placeholder="Confirm Password" type="password">
           </div>
      </div>
      <hr>
      <div class="row">
        <span class="text-white"><?=form_error('name')?></span>
        <span class="text-white"><?=form_error('email')?></span>
        <span class="text-white"><?=form_error('nim')?></span>
        <span class="text-white"><?=form_error('password')?></span>
        <span class="text-white"><?=form_error('password2')?></span>
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
           <button class="btn btn-default regbutton">Join</button>
      </div>
    </form>
</div>
