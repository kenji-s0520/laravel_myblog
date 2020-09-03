<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Blog</title>
    <style>body {padding: 10px;}</style>
  </head>
  <body>
    <h1>myblog Index Page</h1>
    <p><?php echo $message ?></p>
    @foreach ($diaries as $diary)   
      <p>
        <a href='{{ route("diary.show", ["id" => $diary->id]) }}'>
          <?php echo $diary->topic ?></p>  <!-- echoでtopicのデータを全て表示させる -->
        </a>
      </p>
    @endforeach   <!-- mysqlのtopicに登録されている全てのデータをforeach文を使って表示 -->
  </body>
</html>