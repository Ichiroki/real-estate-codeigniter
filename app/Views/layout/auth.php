<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= csrf_meta() ?>
        <link href=<?= base_url('/css/output/style.css') ?> rel="stylesheet">
    </head>
    <body class="text-slate-800 overflow-hidden">
        <div>
            <div class="border-2 rounded-xl shadow border-slate-400 lg:w-6/12 mx-auto flex flex-col items-center justify-center translate-y-12 lg:translate-y-24">
                <img src="<?= base_url('/img/logo/logo-real-estate.png') ?>" alt="" class="w-24">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </body>
</html>