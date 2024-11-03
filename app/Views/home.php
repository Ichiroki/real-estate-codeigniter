<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="banner flex items-center justify-center flex-col">
    <h1 class="text-2xl md:text-5xl text-slate-100 font-semibold">Find your dream home</h1>
    <p class="text-slate-100 mt-8 font-semibold">We are the platform that will help you to find the best place for you to live</p>
    <div class="bg-slate-100">
        <form action="">
            <?= csrf_field() ?>
            <div>
                
            </div>
            <div>
                
            </div>
            <div>
                
            </div>
            <div>
                
            </div>
        </form>
    </div>
</div>

<?= $this->endSection('content') ?>