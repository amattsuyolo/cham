<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="coffee_web/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="coffee_web/img/favicon.ico" type="image/x-icon" />
    <title>@yield("title")</title>
		@section("head")
						@include("coffeeshop.public.partials.head")
		@show
  
  </head>
  <body>
		@include("coffeeshop.public.partials.preloader")

		@section("nav")
						@include("coffeeshop.public.partials.nav")
		@show

		@yield("content")   

</body>
</html>