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
          <?php echo $diary->topic ?>  <!-- echoでtopicのデータを全て表示させる -->
          <?php echo $diary->weather ?>
        </a>
      </p>
    @endforeach   <!-- mysqlのtopicに登録されている全てのデータをforeach文を使って表示 -->
      <div>
        <a href={{ route("diary.new") }}>新規投稿</a>
      </div>
  </body>
</html>