<?php require_once __DIR__. '/layouts/main.php'?>
<body xmlns="http://www.w3.org/1999/html">
<div class="container">
    <div class="w-full">
        <h2 class="text-center text-xl">Save new Department</h2>
    </div>
    <p id="success"></p>
    <div class="w-1/2 m-auto flex justify-center mt-6 p-4">
        <form id="userForm" class="w-full flex flex-col items-center">
            <div class="w-full flex flex-col">
                <input class="py-4 border w-full px-3 border-slate-300" type="text" id="department_name" placeholder="Department name"/>
                <small class="w-50 name-err text-red-500"></small>
            </div>
            <div class="w-full flex flex-col mt-4">
                <textarea class="py-4 border w-full px-3 border-slate-300" type="password" id="department_desc" placeholder="Department description"></textarea>
                <small class="password-err text-red-500"></small>
            </div>
            <div class="w-full flex flex-col mt-4">
                <select class="py-4 border w-full px-3 border-slate-300" id="department_manager">
                    <option selected> Select department Manager</option>
                </select>
                <small class="password-err text-red-500"></small>
            </div>
            <div class="w-full flex justify-center mt-2">
                <input type="submit" value="Save" class="py-4 px-6 bg-sky-500 text-white"/>
            </div>
        </form>
    </div>
</div>
<script src="./js/app.js"></script>
</body>