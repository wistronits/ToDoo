<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="__PUBLIC__/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.css">
		<script src="__PUBLIC__/js/bootstrap.js"></script>
	</head>

<body>
	<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
	<div class="container">
		<form action="" class="form-signin" method="post">
			<h2>请登录系统</h2>
			<input type="text" class="input-block-level" placeholder="Email" name="email">
			<input type="password" class="input-block-level" placeholder="PassWord" name="psw">
			<br>
			<button class="btn btn-large btn-primary" type="submit">Sign in</button>
		</form>
	</div>
</body>
</html>