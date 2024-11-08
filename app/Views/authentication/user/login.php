<?= $this->extend('layout\auth') ?>
<?= $this->section('content') ?>
    <form action="<?= url_to('userLogin') ?>" class="flex flex-col w-7/12" method="post">
        <?= csrf_field() ?>
        <label for="email" class="text-sm text-slate-500 mt-10">Email</label>
        <input type="email" name="email" class="border-b-2 outline-none" id="email" value="<?= old('email') ?>">
        <label for="password" class="text-sm text-slate-500 mt-10">Password</label>
        <input type="password" name="password" class="border-b-2 outline-none" id="password">
        <input type="submit" value="Login" class="px-5 py-2 border-2 border-green-600 hover:bg-green-400 hover:text-slate-800 my-6 rounded-full cursor-pointer">
    </form>
    <span>Are you not registered ? <br><a href="<?= url_to('userRegisterPage') ?>" class="text-center w-full block text-blue-700 underline">Register here</a>
    </span>
<?= $this->endSection('content') ?>