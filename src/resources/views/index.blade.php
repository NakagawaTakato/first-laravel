<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>

  <ul>
    @include ('components.items', ['item' => 'include'])
  </ul>
  <ul>
    @component ('components.items')
    @slot ('item')
    component
    @endslot
    @endcomponent
  </ul>
  <ul>
    @each ('components.items', ['item1', 'item2'], 'item')
  </ul>
</body>

</html>
