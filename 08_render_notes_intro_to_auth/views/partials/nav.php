<header class="bg-gray-900">
  <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
      <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
            </a>
        </div>
<div class="space-x-4">
<a href="/" class= "<?php echo urlIs("/") ?  "bg-gray-500 text-white" :  "bg-transparent ";;  ?> text-sm/6 font-semibold text-white p-3 rounded-xl">Home</a>
<a href="/about" class="<?php echo urlIs("/about") ?  "bg-gray-500 text-white" :  "bg-transparent ";;  ?> text-sm/6 font-semibold text-white p-3 rounded-xl">About</a>
<a href="/notes" class="<?php echo ($_SERVER['REQUEST_URI'] === "/notes") ?  "bg-gray-500 text-white" :  "bg-transparent ";;  ?> text-sm/6 font-semibold text-white p-3 rounded-xl">Notes</a>
<a href="/contact" class="<?php echo ($_SERVER['REQUEST_URI'] === "/contact") ?  "bg-gray-500 text-white" :  "bg-transparent ";;  ?> text-sm/6 font-semibold text-white p-3 rounded-xl">Contact Us</a>
</div>
<div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <a href="#" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span></a>
</div>
</nav>

</header>