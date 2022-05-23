<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<h1>Contact Us Anytime</h1>
<form action="{{ route('contact.send') }}" method="post">
    @csrf
    <div>
    <input type="text" name="name" placeholder="Please Enter Your Name">
    </div>
    <div>
    <input type="email" name="email" placeholder="Please Enter Your Email">
    </div>
    <div>
    <textarea name="message"  cols="30" rows="10" placeholder="Please Enter Your message"></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>
