<head>
  <head>
    <title>Remote</title>
    <link rel="stylesheet" type="text/css" href="css/remote.css?<?= date('YmdHis'); ?>" />    
    <link rel="manifest" href="manifest.json">
    <meta name="viewport" content="user-scalable=0">
    <script src="js/script.js?<?= date('YmdHis'); ?>"></script>
    <script src="js/madvr.js?<?= date('YmdHis'); ?>"></script>
</head>
</head>
<body>
  <main>  
    <section id="main" class="active"><?php include 'inc/_main.php' ?></section>
    <section id="plex"><?php include 'inc/_plex.php' ?></section>
    <section id="madvr-page"><?php include 'inc/_madvr.php' ?></section>
    <section id="anthem"><?php include 'inc/_anthem.php' ?></section>
    <section id="jvc"><?php include 'inc/_jvc.php' ?></section>
    <section id="lights"><?php include 'inc/_lights.php' ?></section>
    <nav id="pages">
      <button class="main active"><svg><use href="img/i.svg#home"/></svg></button>
      <button class="plex"><svg><use href="img/i.svg#plex"/></svg></button>
      <button class="madvr-page"><svg><use href="img/i.svg#madvr"/></svg></button>
      <button class="anthem"><svg><use href="img/i.svg#anthem"/></svg></button>
      <button class="jvc"><svg><use href="img/i.svg#jvc"/></svg></button>
      <button class="lights"><svg><use href="img/i.svg#lights"/></svg></button>
    </nav>

    <div class="modal power">
      <div class="bg">
        
        <button class="anthem toggle"><svg><use href="img/i.svg#power"/></svg><span>AVM70</span></button>
        <button class="jvc toggle"><svg><use href="img/i.svg#power"/></svg><span>JVC</span></button>
        <button class="madvr toggle" value="shutdownX"><svg><use href="img/i.svg#power"/></svg><span>MADVR</span></button>
        <button class="madvr toggle" value="restartX" ><svg><use href="img/i.svg#restart"/></svg><span>MADVR</span></button>

      </div>
      <div id="reload">RELOAD</div>
    </div>


  </main>
</body>