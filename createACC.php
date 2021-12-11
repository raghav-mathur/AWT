<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./nav.js" defer></script>
    <link rel="stylesheet" href="./css/Create_Acc.css" />
    <link rel="stylesheet" href="./css/data_entry.css">
    <link rel="stylesheet" href="./css/home.css">
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
    </style>
    <title>Create_Account</title>
  </head>
  <body>
    <div class="header">
      <p>Create Account</p>
    </div>

    <div class="form_div">
      <form class="form" action="create_my_account.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="Name" placeholder="name" />
        <label for="regno">Regno</label>
        <input
          type="text"
          id="regno"
          name="regno"
          placeholder="registration no"
        />
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="abc@geg.com" />
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="password"
        />
        <label for="confirm_password">Confirm Password</label>
        <input
          type="password"
          id="confirm_password"
          name="confirm_password"
          placeholder="confirm password"
        />
        <button type="submit" class="btn_submit">Submit</button>
        <button type="button" class="btn_submit" onclick="Go_login()">
          Login
        </button>
      </form>
    </div>
  </body>
</html>
