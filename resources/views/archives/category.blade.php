<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $category }}の一覧</title>
</head>

<body>
  <h1>{{ $category }}の一覧</h1>
  @if ($category === 'news')
  <h2>本日のニュース</h2>
  @endif
  <P>/resources/view/内にあるファイルです。</P>
</body>

</html>
