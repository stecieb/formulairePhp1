<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="firstname">Firstname :</label>
      <input  type="text"  id="firstname"  name="firstname">
    </div>
    <div>
      <label  for="lastname">Lastname :</label>
      <input  type="text"  id="lastname"  name="lastname">
    </div>
    <div>
      <label  for="email">Email :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phone">Phone Number:</label>
      <input  type="phone"  id="phone"  name="user_phone" placeholder="00 00 00 00 00">
    </div>
    <label for="subject">Choose a subject:</label>
    <select name="subject" id="subject">
    <option value="sujet1">sujet1</otion>
    <option value="sujet2">sujet2</option>
    </select>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form> 
</body>
</html>