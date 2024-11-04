<?= $this->extend('layout\auth') ?>
<?= $this->section('content') ?>
    <form action="<?= url_to('userLogin') ?>" class="flex flex-col w-7/12" method="post">
        <?= csrf_field() ?>
        <label for="email" class="text-sm text-slate-500 mt-10">Email</label>
        <input type="text" name="email" class="border-b-2 outline-none" id="email" value="<?= old('email') ?>">
        <label for="email" class="text-sm text-slate-500 mt-10">Password</label>
        <input type="text" name="email" class="border-b-2 outline-none" id="email">
        <input type="submit" value="Login" class="px-5 py-2 border-2 border-green-600 hover:bg-green-400 hover:text-slate-800 my-6 rounded-full cursor-pointer">
    </form>
    <span>Are you already have an account ? <br><a href="<?= url_to('userLoginPage') ?>" class="text-center w-full block text-blue-700 underline">Sign in</a>
    </span>
<?= $this->endSection('content') ?>