<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>JS Shoutbox</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div id="container">
      <header>
        <h1>JS Shoutbox</h1>
      </header>
      <div id="shouts">
        <ul>
          <li></li>
        </ul>
      </div>
      <footer>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name">
          <label for="shoutText">Shout Text:</label>
          <input type="text" id="shout">
          <input type="submit" value="SHOUT!" id="submit">
        </form>
      </footer>
    </div>
  </body>
</html>

