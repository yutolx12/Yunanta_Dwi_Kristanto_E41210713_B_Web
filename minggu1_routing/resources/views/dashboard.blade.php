<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Template</title>
 <link rel="stylesheet" href="{{ url('/') }}/css/dashboard.css" type="text/css"/>
</head>
<body>
  <div class="header">
  <p>Hello {{ $nama }}</p>
    <h1>Dashboard</h1>
    
  </div>

  <div class="sidebar">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <div class="main">
    <div class="card">
      <h2>Card 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dolor in libero feugiat pulvinar.</p>
    </div>

    <div class="card">
      <h2>Card 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dolor in libero feugiat pulvinar.</p>
    </div>

    <div class="card">
      <h2>Card 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in dolor in libero feugiat pulvinar.</p>
    </div>
  </div>
</body>
</html>
