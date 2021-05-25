<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>        

body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
    height:100%;
    background: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBAQDxAPEBAQFRUVDxAVFhUVGBkWFhYWGBUXFRUYHSggGB0mHRUVITEhJSkuLi4uFx8zODMsNygtLisBCgoKDg0OFxAQGC0lHyUrLSstLS0tLS0tLS0rKy0tLSstLS8vLS0tLS0tLSstLS0tKzUtLS0tLS0tLS0rLS0sLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQMEBQYHAgj/xAA9EAACAQIEAwUFBQYGAwAAAAABAgADEQQFEiEGMUEiUWFxgRMykaGxBxQjwfAzQlJictEkQ4KS4fEVNFP/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQIDBAX/xAAhEQEBAAICAwADAQEAAAAAAAAAAQIRAyEEEjEiQVFhMv/aAAwDAQACEQMRAD8A7PEmDyNvSBrubYxmqFP3AbAd5l3g8PpXc3vv/wASwwaFqx1b8z6mZiwHz/QnPb0SSR4diALE2vuP10lbD4oEWPU2Etj2iym/K9+XOeaQOrfkNr7C/lGy4yxr/wBqGP8AuWHXEqmpmYUx3ajcqWI8A3nsJzHhbGVqdYVbnTVPbI/iO9yPP6zqX2roauU1UC66jvS9mBzutRSSPJQxmlcNYBabUUYeBvyvY2v62meSXfTljjbdOj5NmAqoCSNQ5i/5TJgAzkfEPE3sndaSslXD3D27XIXI7ivnNk4Lz3EYpA709Fzy35d4vuJ0m5Jt6ebxcuPGZWt/RQJ6lOidt5VmnjIiICIkwEREBERASYiAiIgIiICIiAiIgIiICIiBESYgehJESIGBxlJkrXA2JNvIy/JuPKTjqwHZfkeR/tLaiy2sHB7gf7zGnXHPrtWYb35Gx28fGefY6gNrg8/lvKgYcyd+gG8tsc7spRBoDe8xIBt3DujS3P8AjCcX4xahp0UIYUr6iOWrYW9LfOYXC5YzsOY7jNhp5PbkFPqJf4bDaOYtGmJlpolD7NGaqXq4gshN7AWZrgFtTX5XuLd3Wb/lWUU6ChUFgJcU66+Q6E7em8rJVB5eXWaa5OTPP/qqqrPU8gz1K5EkxEBERAREQEmRJgIiICIiAiIgTIkxAREQEREAZEmRAREQPcSNU8vUA5kCQY7P/wBmD1DC3zvNeF7khgqruzHYAd5mTzrE+0IVb+Aml8UY8s4wtM9hD+KR+845+g5D1mL9axm2WxXE2xFG6oNjVI7R8h0+s1vGcWupb2eh23sWJY+o6S5rYf8AwtboFQtfqNA1XHedrevhOa1qzFizkgsSTp7/AHhz8zOmNmn1PE8fDPC3TsvDHEq4hBqCrUHvL+Y8JtdCsCN+XxE4E96el0rHslQbErYsL7/D6Tpn2f5y+IpEVCSUNrn9eUjy8/j+ncbZj8IdOpRqA3Kc/Ud/lLSlmAHUD9d0zGHfpMFxDloDrVXs6jzHQ9R6yV5pf1WWwuND+BsD/wBS8QzVKNYg+nhb/uZjAYglQdyTe/73l5Sylx63GXETypnqVgiIgIiIExEQEREBERAmIiAiIgIiICIiAiIgRERA8uoOxls+CB6mXV5F4GNxdBaFKpVAuyKWBPfbb52nLcOhaoSdyTuZ1XiBL4WsB/D+YnOcNRs855N4rbiHOatBRQoAAlQa1Q7kK2oKqjvOlt+4TTc4ykrSpuoLIQCtTc9rqhPfudptnFGGPt2vYa0olO8hfahreRI+Im1ZFky/dTSqAMtQA2IuLjltMYW+1erxvIvFf8rjVPH6qPszqDdm77WsDfSRzJvadM+y7CMlJnZr+0OoDuHj4zB5rwklPEdoimh3XUQ3XkABt629Z0bh7KhQQAC206Wzeo6+Vy45T8ay1DEqXdNaFltdQRcXAI1D4yvmqa8O/eo1D05/K85rkuHrJm+JVtV2qOx8VZwyH/aROmY5rYesT/A30mOLk95dx85qAtz75nsrf3R3DoPrNbR5sGUHYTcatZymZUlKnKom2CIiAkyJMBERAREQERECYiICIiAiIgIiICIiBEREDnvAedYk18RgMWzGtRuyFjc9k2Zb9RurDwvNmxnEeFoP7OtXpo/Vdzb+qw7PrNXzLiHL8Nj69cip950rSZ1ANrKLgBtla4sSb8gLTB0cThMWzUqWBrsCblhWDHfqQy8+fX1nm97jPWXdHVRVStTIVlZKimzAgggjmCOc0irhSlQgjcGxmG/8ZmGVqa+FZq2GB1VcO1tSr1bSCR/qU37xYTYsjzEZlhUxSgCpdkqqOpQ2uPSx8jN+3t1frUesbkyYpaZPZekbo3gfeU+BsPUTJZw1anQf7qgaoqMUHPdRsoXqTKeFuJc5hSarQq00f2b1EZVffslgQDt5y2dXRXEcbm+LeoWru7NyYMACLHla23Xadf4Gzf73hEZjd6fYfzHInzFpzF+BMfrK+y/1a10n4G/ynROA+GquCQmrVJ1j9kLaQe+/O88vB7TL5UnxsqYCmKxrhfxGUIW8Be3ruZa8VYsU6Ip37VU/IWJ/ITIYnEpQQ1KpsByHUnoAOpmh47HPiapqEc9lXuXoJ7OoPdDcgTbMrpWUTDZRl5uCRNow9KwlkKroJUE8gT0JpCIiAiIgSIiICIiAiIgTERAREQEREBERAREQIiIgcrOV5ZiFrVXqLoqF3qaal3Tf31J/aJ15ahvcHkNeybF0Mtx9KpQxX3nCtdK5NN0ZUNt9xZrGzXG+x2mKpIDQRdwyMT5ixI+p+Etq2Icdl0/pNrG30M8EzmWrpNus8b5mrZZinwzq+pF3U37DOquRb+UtOfcH55icPh6lHDUizNUFT2mksqDSBew5k2HPbbrMdkWYlHNFj+DXujqf59jsdt7y54vwtPBY+mlKrUp0atOm7kAXS5INlW3IDlNZZXL8o06Bkeb4xh/i8LUfur0kKk/1U+R8wR5TY6WNo3ANRVLclcNTY+jgXmtYfOq2V6KGPrU8UtT/ANZqf7U/10zyX+a83Cm9HFUd9NSm97ehtcdxBHynfD5rY9kqo1MQBcC/iSAOXiQJFfF6R2ELHvOw/vIVdSeyT9wquu97aCtyTbZrg7b9DK/s9he1+tt/nOkGs4zB1a76qrFrcl5AeQl5gsoC9JWzzO8HgED4uslIH3RuWb+lFBY+gl9hMxoVKaVKbqyVFDIw6g8pdIrUMOFlyonlHB5SoJQkyJMBERAREQJiRECYiICIiAkyIgTERAREQEREBEiICIiBzPiXgJx+JgyKhNzUpHSh3N/w7ALbf3dphsv4NrtTq1sQ1SiMOGJpMhGoBbtZr9wI2HOdhImu8V4HHYhDRwlSnQRgRUqEnWQf3VsDpHjz8uvny4cZ3IOV/wDnctNOrSrYasNYOhkKlgem5tbv68pZZ+1PGvhsVVq+zFSk1Mhh71SiBcXF9GrUm7C3a6yMz4eOFxYwlRbvdAGF7EPaxUnnzt5gzaMbwa+MxVLDUV9jg8GjB6xF7u51Na9tbW0eAsfKcMbctyq07LKlSmfvJJq1iVCs3bsx2UMSfTn3WmU4fzPNUpP92Z6VIu5VWQadbm9lLLf52v8AO4y7hbFA43DK1M1MMpYoUDq7qfwl7Q2Dc/IbzrWJywGlZdesW9nZmsGuLNYkiwO/leawwtls6Vo3CnHtOoxoY6jTpVF2ZwunfrrU7g95vOlUyCAQbg8iJzvibhx27VVvbgk6iwUWB5AAAafjNk4SxGmjSo3LaARdr30qbDpufd7p6McrLqppqX2tZGXdalz7PFhaNzyp4mnqbDN/KHDVKZ/qE03gPOXAOGdmBQnQDcWse0v5/Gdxz/K0xmGrYepstVSA3VW5q48QwB9J885tRrU8WlVUb7yXKYmmins4imbMQB0cWcd92nW9xJ9d74ezDWgBO4mfUznXD+KdNDMrJqALKenK4v4Xm8YXHKwG8zK3lhYv5MprUBnu80wmJEmAiIgIiIExIkwEREBERASZEQJkRECYkRAREQEREDzaLT0Fi9oGvcQ5CuIr4KrpGuhV1M38gVmAPf2wnxMzVNNIA+f1lR3+fKY/GYl9SU6YGpwTc8lAPM95/wCZmSS7FYYdA7VAo1uAGbv030377ajK7Db4+csK1epRGupoqUx7xAKld+drm4+Ev6bhgCDcG2/5yqtMww6sjah2d9Q5+s1vAucPW9m3useyZtzD17/UzCZzl2tOz7y9pD1NydpLFjM0jcTV86wdJK9SqtGmtV7e0cAXNhZSx5nYeW3WZLh/Ha10t7y7GXOeYUMhqWuUBuO9OZH5iTLudOvDlMM/yaZiXYi99xuP15XmUp02UAi4PUTAviAaukEul+otfwPhNmr5kCEKprYrZieR32O3dv8AGccHr8rKZa0yOXYsnY85lkaa3l6uWuQAO4TYKA2noj51XAiQJMqJiRECYiICSJEQJiRJgIiICIiAiIgIiICIkQEREAW9JTZvrz9JTq1NibXCg3Hh+cxmHzm9TQ9GpTDAGnWOlqbar9kEG4YdQR8ZNrplCO/9bTG5pikoslRnphgLFCwDMvO6gnexmSPx/XKYvIaQZWqsdVV2YuxG9xsB4ADp0gY3Nc/XEYZ0wStiHqgoNK9lL7MXJ2uN9u+eOD85YA4TFg0cVTPZpuRdl6Mp5MPLxlPil/u2JoVcMv41UOKtMba1XSFLW63JF/HyllxDw5jcxRDVODpaCTTX2RLKTsR7Qk/QcoG+fofCU3X/AI9BynNstyjPMGygVvaUVvdFKP5BVe1t7ciOcyFLjPGUbLjsuxFrkNUoIzAcu0wOwG/8XQwM5jcOaFQVUHZPv+czuFrB1BHWYLBcSYLFqypWS/Wm3Zb4Ge8BXNGoaTG4/dMnxfqvU4awx5Jpubnc/r0lWllKJyEyateerS6hcqtqVACV1WeolZJMiIExEQERECYkSYCIiAkyIgTEiIExEiBMSIgTIiICJEQKLc/oJYPRWnfb8GpYOgGynvHcPpz2l839/jDoCCCNjcEc+lpFW1FjTYU2JKn9kx3/ANJPf9R15yWwa6iylkZvfKmwJ7yOXrLXEuKdNqdS5VSNDbk6SbAk87rzNrmwv1tPNPM7oQgqOwFgwQqLja93tfp074guUwlKlqquQD+/VqNyHizchLOrxRgwDZ2dRbVUVGKDf/6W0n0MwWYZJi8QSatY+Gym3kGBVfMAGeaXA6m5qO9Q2YXcmpsV0mwbYczyEukbZg8xpVgGpurDvBvLwJ1mByfh77uSRUZgTcCwFvhNiUSLVpicuoVf2lGk572RSe/mRMLnGWJSAaiugLbYXtv4ctvzmxttKeJpBkYHcEH+0EWGTYvWovz6zKiajRY4erY+6Tse8Xmz4atqAMSlV4iJUIiICIiAkyIgTERASZEQJiRECYiRAmJEQJiRECZERAREiBS/RgH8pRr4haalqjKqrzZiAoHS5M1TM+P8NTJWgGxDjYMOyn+47n0HrEm1bdUUHYgEbXvv4zBZvxPg8ICKlQMw/wAtO0x6+Q9SJz3NuKsZiLhqhpp/BTuot4nmfjMTgsvq1200abVD4C48yenrN+n9TbZcd9pVcsPYUKaID/mEsxF/5SAPnN/4YzYY3DU6+nQWuGXnYg72PdtNFy37OK1SzYqqKQ/gQBm+PIfOdIyzL6eHpLRorppoLKPqSepO59ZMtfoXQE9CBKVSsB8vnMj3UP8AeY/H5pSpqWZgAPqN7DvM13P+J7M1Kl2m5eAN+vf0285i8BltXENrqkkXvbpv3DpIqqcXUxNS4B032m45ZSKqAZRy/LVpgWEyaLaJC17EmREqJiRAgTERAREQEREBJkRAmJEQJiRECYkRAm8SIgIkReBMSIgcN47xdZ8dXp1WJWm1qSX2C2BWw5XIsTKWQ5BiMWfwFW17F2YAD05/KInX5GW/ZPwDSSzYhzVO1kHZX16mbdhsKlNQlNFRf4VAA+UmJy3tpcItp7JtEQLDM8xSipZjsAe/oJoOZcQ1cUxSldEJG/JjYW59JESKyWR8PjZmsTNuw2GVRYCIlRdKJ6iICTEQIkxEBIkxASYiAiIgIiIEGLxECbxEQBMi8RAXi8RAi8REBERA/9k=");
    background-repeat: no-repeat;
    background-position: center ;
    background-size:cover;
    background-attachment: fixed;

}
.container{
    height:100%;
    background: url("data:image/jpeg;base64,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");
    background-repeat: no-repeat;
    background-position: center ;
    background-size: cover;
    background-attachment: fixed;
}

.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  

</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="resources\views\front.blade.php">Pro-Nail Studio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href=""></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
       
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="#"></a>
        <a class="nav-link" href="/">Home</a>
        <a class="nav-link" href="/login">Login</a>
       
        
      </div>
    </div>
  </div>
</nav>

</head>
<body>
    <div class="container">
        <div class="signup-form">
            <form  name="listform" action="/registerread" method="post" onsubmit="return validateform()">
            {{csrf_field()}}
        
                <p class="hint-text">Register your account. </p>

                @if ($errors->any())
    						<div class="alert alert-danger">
        					<ul style="color: green;">
					            @foreach ($errors->all() as $error)
                				<li>{{ $error }}</li>
            					@endforeach
        					</ul>
    						</div>
							@endif

                    
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                        <input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
 class="form-control" name="name" placeholder="Name" required="required">
                        </div>
                    </div>  
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Address" required="required"> 	
                </div>
                <div class="form-group">
                <tr>
                        <td>Gender </td>
						
                        <td>Male<input type="radio" id="male" name="sex" value="male"></td>
						<td>Female<input type="radio" id="female" name="sex" value="female"></td>
                    </tr>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="dob" placeholder="Date of Birth" required="required">
                </div> 
                <div class="form-group">
                    <input type="number" class="form-control" name="mobile" placeholder="Mobile" required="required">
                </div> 
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>       
                <div class="form-group">
                    <input type="password" id="password" class="form-control" name="pass" placeholder="Password" required="required" onkeyup='check();'
>
                </div> 
                <div class="form-group">
                    <input type="password" id="confirm_password" class="form-control" name="cpass" placeholder="Confirm-Password" required="required" onkeyup='check();'
>
<span id='message'></span>

                </div> 
                <div class="form-group">
                    <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                </div>
                <div class="form-group">
                    <button type="submit" id="myBtn" class="btn btn-success btn-lg btn-block">Register Now</button>
                </div>
            </form>
           
    </div>
    <script src="{{ asset('password.js')}}"></script>
</body>

</html>