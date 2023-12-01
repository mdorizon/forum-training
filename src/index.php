<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="container">
  <section class="row justify-content-center">
    <section class="col-8 pt-5">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident veritatis earum ut aut omnis esse pariatur.
        Non
        ab distinctio accusamus, assumenda cumque repellat, quos, fugit nesciunt laborum numquam aut nulla?
      </p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident veritatis earum ut aut omnis esse pariatur.
        Non
        ab distinctio accusamus, assumenda cumque repellat, quos, fugit nesciunt laborum numquam aut nulla?
      </p>
      <form class="pt-5" action="/actions/create-message.php">
        <input type="text" name="name" class="form-control mb-3" placeholder="Username" aria-label="Username">
        <textarea class="form-control mb-3" name="content" placeholder="message"></textarea>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
      <div class="messages mt-3">
        <?php 
          require_once __DIR__ . '/templates/message-list.php'
        ?>
      </div>
    </section>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>