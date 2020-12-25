<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$this->renderSection('title')?>&nbsp;-&nbsp;Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?=$this->renderSection('css')?>
</head>

<body>
    <?=$this->include('Admin/layout/header')?>

    <section class="section">
        <div class="container"> 
            <?php if(session('msg')):?>
            <article class="message is-<?=session('msg.type')?>">
                <div class="message-body">
                    <?=session('msg.body')?>
                </div>
            </article>
            <?php endif;?>
            <?=$this->renderSection('content')?>
        </div>
    </section>




    <?=$this->renderSection('js')?>
</body>

</html>