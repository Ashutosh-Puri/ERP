<nav class="bg-orange-400 text-white flex justify-between">
    {{-- <img src="{{ asset('img/p1.jpg') }}" class="h-12 pt-3 px-3 rounded-2xl" alt="user-img"> --}}
    <span class="text-xl items-center font-bold mx-3 flex">AIGen</span>
    <ul class="flex py-4 px-28 float-end space-x-10">
        <li class="cursor-pointer">Home</li>
        <li class="cursor-pointer">About</li>
        <li class="cursor-pointer">Services</li>
        <li class="cursor-pointer">Contact</li>
    </ul>
</nav>
<main class=" bg-orange-200 flex justify-around">
    <div class="main py-40 pl-9">
        <div class="text-3xl">
            Privacy and ethical considerations are critical in tech development, shaping responsible innovation
        </div>
        <p class="py-2 w-5/6">Artificial Intelligence is revolutionizing industries, from healthcare to finance, reshaping how we work and live.</p>
        <div class="buttons">
            <button class="bg-orange-400 px-4 py-1 rounded-full border border-orange-200 text-white font-semibold hover:text-white hover:bg-orange-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 mx-1 my-4">Contact Us</button>
            <button class="bg-orange-400 px-4 py-1 rounded-full border border-orange-200 text-white font-semibold hover:text-white hover:bg-orange-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-offset-2 mx-1 my-4">About Us</button>
        </div>
    </div>
    <div class="flex items-center">
        <img src="{{ asset('img/AI.png') }}" class="h-80" alt="">
    </div>
</main>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Font-Family</h1>
<div class="mx-5 font-sans">this is mx-5</div>
<div class="mx-5 font-serif">this is mx-5</div>
<div class="mx-5 font-mono">this is mx-5</div>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Font-size</h1>
<h1 class="font-bold m-5 bg-orange-300 text-6xl">this is h1</h1>
<h2 class="font-bold m-5 bg-orange-300 text-5xl">this is h2</h2>
<h3 class="font-bold m-5 bg-orange-300 text-4xl">this is h3</h3>
<h4 class="font-bold m-5 bg-orange-300 text-3xl">this is h4</h4>
<h5 class="font-bold m-5 bg-orange-300 text-2xl">this is h5</h5>
<h6 class="font-bold m-5 bg-orange-300 text-xl">this is h6</h6>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Font-Smoothning</h1>
<p class="mx-5 mt-2 subpixel-antialiased">this is the sample text</p>
<p class="mx-5 mt-2 antialiased">this is the sample text</p>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Font Style</h1>
<p class="mx-5 mt-2 non-italic hover:italic">this is the sample text</p>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Font Weight</h1>
<p class="mx-5 mt-2 text-xl hover:font-thin">this is font-thin text</p>
<p class="mx-5 mt-2 text-xl hover:font-extralight">this is font-extralight text</p>
<p class="mx-5 mt-2 text-xl hover:font-light">this is font-light text</p>
<p class="mx-5 mt-2 text-xl hover:font-normal">this is font-normal text</p>
<p class="mx-5 mt-2 text-xl hover:font-medium">this is font-medium text</p>
<p class="mx-5 mt-2 text-xl hover:font-semibold">this is font-semibold text</p>
<p class="mx-5 mt-2 text-xl hover:font-bold">this is font-bold text</p>
<p class="mx-5 mt-2 text-xl hover:font-extrabold">this is font-extrabold text</p>
<p class="mx-5 mt-2 text-xl hover:font-black">this is font-black text</p>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Font Variant Numeric</h1>
<p class="mx-5 mt-2 ordinal normal-nums">1234567890</p>
<p class="mx-5 mt-2 oldstyle-nums">1234567890</p>
<p class="mx-5 mt-2 tabular-nums">1234567890</p>
<p class="mx-5 mt-2 lining-nums">1234567890</p>
<p class="mx-5 mt-2 ordinal">1st</p>
<p class="mx-5 mt-2 slashed-zero">0</p>
<p class="mx-5 mt-2 proportional-nums">121121</p>
<p class="mx-5 mt-2 diagonal-fractions">1/2 3/4 5/6</p>
<p class="mx-5 mt-2 stacked-fractions">1/2 3/4 5/6</p>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Letter Spacing</h1>
<p class="mx-5 mt-2 tracking-tight">this is the sample text</p>
<p class="mx-5 mt-2 tracking-normal">this is the sample text</p>
<p class="mx-5 mt-2 tracking-wide">this is the sample text</p>
<p class="mx-5 mt-2 tracking-wider">this is the sample text</p>
<p class="mx-5 mt-2 tracking-widest">this is the sample text</p>
<p class="mx-5 mt-2 tracking-tight hover:tracking-widest">this is the sample text</p>
<p class="mx-5 mt-2 tracking-widest">this is the sample text</p>

<h1 class="font-bold mx-5 mt-5 bg-purple-300 text-xl">Container</h1>
<div class="md:container md:mx-auto mt-2 bg-orange-400">
   <div class="columns-4 p-2">
    <img class="w-full aspect-video" src="{{ asset('img/p1.jpg') }}" alt="img-1">
    <img class="w-full aspect-square mt-2" src="{{ asset('img/p1.jpg') }}" alt="img-2">
    <img class="w-full aspect-video" src="{{ asset('img/p1.jpg') }}" alt="img-3">
    <img class="w-full aspect-square mt-2" src="{{ asset('img/p1.jpg') }}" alt="img-4">
    <img class="w-full aspect-video" src="{{ asset('img/p1.jpg') }}" alt="img-5">
    <img class="w-full aspect-square mt-2" src="{{ asset('img/p1.jpg') }}" alt="img-6">
    <img class="w-full aspect-video" src="{{ asset('img/p1.jpg') }}" alt="img-7">
    <img class="w-full aspect-square mt-2" src="{{ asset('img/p1.jpg') }}" alt="img-8">
   </div>
</div>

<div>
    ...

    <div x-data="{ open: false }">
        <button @click="open = true">Show More...</button>

        <ul x-show="open" @click.outside="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
    </div>
</div>
