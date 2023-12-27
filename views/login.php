<script src="https://cdn.tailwindcss.com"></script>
<body>
<div class="container flex justify-center mt-6">
    <div class="w-1/2">
        <form class="w-full">
            <div class="w-full flex flex-col">
                <label>Sing-in with Your Code Pin: </label>
                <input class="border py-2 px-2 user-pin mt-2" type="text" name="user-pin" placeholder="Your pin"/>
            </div>
            <div class="w-1/2 flex m-auto flex-col items-center mt-6">
                <div class="w-full d-flex justify-between">
                    <input type="button" value="1" class="py-3 w-24 border bg-sky-500 text-white">
                    <input type="button" value="2" class="py-3 w-24 border bg-sky-500 text-white">
                    <input type="button" value="3" class="py-3 w-24 border bg-sky-500 text-white">
                </div>
                <div class="w-full d-flex justify-between">
                    <input type="button" value="4" class="py-3 w-24 border bg-sky-500 text-white">
                    <input type="button" value="5" class="py-3 w-24 border bg-sky-500 text-white">
                    <input type="button" value="6" class="py-3 w-24 border bg-sky-500 text-white">
                </div>
                <div class="w-full d-flex justify-between">
                    <input type="button" value="7" class="py-3 w-24 border bg-sky-500 text-white">
                    <input type="button" value="8" class="py-3 w-24 border bg-sky-500 text-white">
                    <input type="button" value="9" class="py-3 w-24 border bg-sky-500 text-white">
                </div>
                <div class="w-full d-flex justify-between">
                    <input type="button" value="0" class="py-3 w-1/2 border bg-sky-500 text-white">
                    <button type="button" id="apagar" class="w-24 border py-3  ml-1 px-3 bg-sky-500 text-white">X</button>
                </div>
                <div class="w-full d-flex justify-between">
                    <input type="submit" value="0" class="w-full py-3 px-5 border bg-sky-500 text-white">
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./js/app.js"></script>
</body>