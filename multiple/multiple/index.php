<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="choices.min.css" />
    <script src="choices.min.js"></script>
  <head>
    <title>Multi Selection</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

          <form action="functions.php" method="post">
          <h1>Sign Up</h1>
          <fieldset>
          <legend><span class="number">1</span> Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id='name' class="choices__inner" name="name">
          <label for="choices-text-remove-button">Languages you speak:</label>
        <input
          class="form-control"
          id="choices-text-remove-button"
          type="text"
          value='English,Arbic'
          name="languages[]"
        />
         <input type="submit" class='btn' value="submit" name="submit">
         </fieldset>
        </form>
  
     
    <script>
     
        var textRemove = new Choices(
          document.getElementById('choices-text-remove-button'),
          {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
          }
        );

    </script>

  </body>
</html>