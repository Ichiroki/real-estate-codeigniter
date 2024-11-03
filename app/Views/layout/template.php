<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?= base_url('/css/output/style.css') ?> rel="stylesheet">
  </head>
  <body class="text-slate-800">
    <nav class="flex justify-between items-center px-7 py-3 shadow-lg">
        <div>
        <div class="flex flex-col gap-[.15rem]">
            <div class="w-7 h-[.25rem] bg-slate-900"></div>
            <div class="w-7 h-[.25rem] bg-slate-900"></div>
            <div class="w-7 h-[.25rem] bg-slate-900"></div>
        </div>
        </div>
        <a href="#" alt="logo" class="block">
        <img src="<?= base_url('/img/logo/logo-real-estate.png') ?>" class="w-12 block"/>
        </a>
        <a href="" class="font-tahoma py-2 px-5 border-[#FFD806] border-2 rounded-full hover:bg-[#FFD806] hover:text-slate-100 transition-all">
        Login
        </a>
    </nav>

    <?= $this->renderSection('content'); ?>

    </body>
</html>