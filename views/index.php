<?php require_once __DIR__. '/layouts/main.php'?>
<body>
<div class="container">
    <div class="w-full">
        <h2 class="text-center text-xl">Save new collaborator</h2>
    </div>
    <div class="w-full flex justify-center mt-6">
        <p class="w-1/2 bg-green-400" id="success"></p>
    </div>
    <div class="w-1/2 m-auto flex justify-center p-4">
        <form id="userForm" class="w-full flex flex-col items-center">
            <div class="w-full flex justify-center gap-2">
                <div class="w-1/2 flex flex-col">
                    <input class="py-4 border w-full px-3 border-slate-300" type="text" id="email" placeholder="email"/>
                    <small class="w-50 name-err text-red-500"></small>
                </div>
                <div class="w-1/2">
                    <input class="py-4 border w-full px-3 border-slate-300" type="text" id="nome" placeholder="nome"/>
                    <small class="w-50 email-err text-red-500"></small>
                </div>
            </div>
            <div class="w-full flex flex-col mt-4">
                <input class="py-4 border w-full px-3 border-slate-300" type="password" id="password" placeholder="password"/>
                <small class="password-err text-red-500"></small>
            </div>
            <div class="w-full flex flex-col mt-4">
                <select class="py-4 border w-full px-3 border-slate-300">
                    <option selected> Select user department</option>
                </select>
                <small class="password-err text-red-500"></small>
            </div>
            <div class="w-full mt-4 text-lg">
                <label>Gerente
                    <input type="radio" name="user-function" value="1">
                </label>
                <label>Subordinado
                    <input type="radio" name="user-function" value="0">
                </label>
            </div>
            <div class="w-full flex justify-center mt-2">
                <input type="submit" value="Save" class="py-4 px-6 bg-sky-500 text-white"/>
            </div>
        </form>
    </div>
</div>
<script src="./js/app.js"></script>
</body>