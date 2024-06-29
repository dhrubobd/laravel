<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
<menu>
    <li class="selected">Home</li>
  <li>
    Profile
    <menu>
      <li>Story</li>
      <li>
        Profile
        <menu>
          <li>About Us</li>
          <li>Our Team</li>
        </menu>
      </li>
    </menu>
  </li>
  <li>Contact</li>
</menu>
    <h1>{{$pagetitle}}</h1>
    {{$slot}}
</body>
</html>