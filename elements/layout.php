<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? 'Site Nidiriki' ?></title>
  <meta name="description" content="<?= $pageDescription ?? '' ?>">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">NIDIRKI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/nouveau">NOUVEAU</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            COMPLEMENT
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">LISTES</a>
            <a class="dropdown-item" href="#">ACTION</a>
            <a class="dropdown-item" href="#">ARCHIVE</a>

        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-4">
    <?= $pageContent ?>
  </div>
  <!--<script src="../assets/js/jquery.min.js" ></script>-->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>