<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->renderSection('title')?>&nbsp;-&nbsp;Mi Blog CI4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?=$this->renderSection('css')?>
</head>

<body>
    <?=$this->include('Front/layout/header')?>
    <?=$this->renderSection('content')?>
    <?=$this->include('Front/layout/footer')?>

    <?=$this->renderSection('js')?>
</body>

</html>