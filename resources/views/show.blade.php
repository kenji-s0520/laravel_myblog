<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Blog</title>
    <style>body {padding: 10px;}</style>
  </head>
  <body>
    <h1>This is myblog page</h1>
      <p><?php echo $message ?></p>
      <p><?php echo $diary->topic ?></p>  <!-- echoでtopicのデータを全て表示させる -->

      <p>
          <a href="/diary">一覧に戻る</a>
      </p>
  </body>
</html>