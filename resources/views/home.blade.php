@extends('layouts.user')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;1,600&display=swap" rel="stylesheet" />
@section('title', 'Home')
@section('contents')
    <header>
        <div>
            <div class="relative mx-auto flex flex-col px-4 sm:max-w-xl md:max-w-screen-xl md:flex-row">
                <div class="my-auto mx-auto mt-10 w-full max-w-xl md:mt-56 lg:max-w-screen-xl">
                    <div class="mb-4 lg:mb-0 lg:max-w-lg">
                        <div class="mb-6 max-w-xl">
                            <div>
                                <p class="bg-teal-accent-400 mb-2 inline-block rounded-full px-3 py-px text-xs font-semibold uppercase tracking-wider text-indigo-900">Approved by google</p>
                            </div>
                            <h2 class="mb-6 max-w-lg text-3xl font-bold tracking-tight text-slate-700 sm:text-5xl sm:leading-snug">
                                World's Best <br />
                                <span class="inline-block font-bold text-orange-600">Programming Tutors</span>
                            </h2>
                            <p class="text-base text-gray-700 md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ullam rem voluptatem, animi tempora expedita!Lorem ipsum dolor.</p>
                        </div>
                        <div class="flex items-center">
                            <a href="/" class="mr-6 inline-flex h-12 items-center justify-center rounded bg-orange-600 px-6 font-medium tracking-wide text-white shadow-md outline-none transition duration-200 hover:bg-orange-400 focus:ring"> Get started </a>
                            <a href="/" aria-label="" class="inline-flex items-center font-semibold text-orange-600 transition-colors duration-200 hover:text-orange-400">Learn more</a>
                        </div>
                    </div>
                </div>
                <!-- /Left Column -->

                <!-- Right Column -->
                <div class="flex h-full w-full space-x-3 overflow-hidden md:justify-end lg:px-2">
                    <!-- Col 2 -->
                    <div class="my-auto mb-10 hidden w-56 flex-col space-y-3 md:mt-36 lg:flex">
                        <div class="rounded-xl bg-yellow-400 pt-10">
                            <img class="animate-bounce  h-full w-full object-contain" src="{{asset('/asset/pic3.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="my-auto flex space-x-3 rounded-xl md:mt-36 md:w-60 md:flex-col md:space-y-3 md:space-x-0 md:px-4">
                        <div class="h-40 overflow-hidden rounded-xl bg-green-600/60">
                            <img class="mx-auto h-full w-full object-contain object-bottom" src="{{asset('asset/pic.png')}}" alt="" />
                        </div>
                        <div class="h-40 overflow-hidden rounded-xl bg-pink-600/60">
                            <img class="mx-auto h-full w-full object-contain object-bottom" src="{{asset('asset/pic2.png')}}" alt="" />
                        </div>
                        <div class="h-40 overflow-hidden rounded-xl bg-blue-600/60">
                            <img class="mx-auto h-full w-full object-contain object-bottom" src="{{asset('asset/pic4.png')}}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <main class="mt-24">
        <section>
            <div class="mx-auto mt-24 mb-20 max-w-6xl text-center p-6 ">
                <h2 class="mb-12 text-center text-4xl font-extrabold text-gray-700 sm:text-5xl">Our
                    Categories
                </h2>
                <div
                    class="gr mx-auto max-w-3xl items-stretch space-y-4 text-left sm:flex sm:space-y-0 sm:space-x-8 sm:text-center">
                    <a class="flex w-full items-center rounded-xl border-2 border-orange-500 border-opacity-10 px-4 py-6 text-black duration-200 hover:border-opacity-0 hover:no-underline hover:shadow-lg hover:shadow-orange-500 sm:flex-col sm:hover:shadow-2xl"
                       href="#" target="_blank">
                        <img class="mr-4 w-12 h-12 sm:mr-0 sm:h-32 sm:w-32" src="{{asset('asset/drink-categories.png')}}" alt="Framework7">
                        <div>
                            <div class="font-semibold text-gray-700  sm:mt-4 sm:mb-2">Drink</div>
                            <div class="text-sm opacity-75">Full featured framework for building iOS
                            </div>
                        </div>
                    </a>
                    <a class="flex w-full items-center rounded-xl border-2 border-orange-600 border-opacity-10 px-4 py-6 text-black duration-200 hover:border-opacity-0 hover:no-underline hover:shadow-lg  sm:flex-col sm:hover:shadow-2xl"
                       href="#" target="_blank">
                        <img class="mr-4 w-12 sm:mr-0 sm:h-32 sm:w-32" src="{{asset('asset/food-categories.png')}}" alt="Atropos">
                        <div>
                            <div class="font-semibold text-gray-700  sm:mt-4 sm:mb-2">Foods</div>
                            <div class="text-sm opacity-75">Stunning touch-friendly 3D parallax hover effects</div>
                        </div>
                    </a>
                    <a class="flex w-full items-center rounded-xl border-2 border-orange-600 border-opacity-10 px-4 py-6 text-black duration-200 hover:border-opacity-0 hover:no-underline hover:shadow-lg  sm:flex-col sm:hover:shadow-2xl"
                       href="#" target="_blank">
                        <img class="mr-4 w-12 sm:mr-0 sm:h-32 sm:w-32" src="{{asset('asset/vegetable-categories.png')}}" alt="Konsta UI">
                        <div>
                            <div class="font-semibold text-gray-700  sm:mt-4 sm:mb-2">Vegetable</div>
                            <div class="text-sm opacity-75">Pixel perfect mobile UI components built with Tailwind CSS</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section>
            <div class="relative overflow-hidden pt-16 pb-32 space-y-24">
                <div class="relative">
                    <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                        <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">

                            <div>
                                <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#ea580c]">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                            </svg>

                        </span>
                                </div>

                                <div class="mt-6">
                                    <h2 class="text-3xl font-bold tracking-tight text-gray-600">
                                        About Our Website
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-700">
                                        The AI product utilizes advanced NLP algorithms to understand and interpret human language,
                                        enabling it to accurately process and analyze text-based inputs.
                                    </p>
                                    <div class="mt-6">
                                        <a class="inline-flex rounded-lg bg-[#ea580c] px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-pink-600 hover:bg-pink-700 hover:ring-pink-700"
                                           href="/login">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 sm:mt-16 lg:mt-0">
                            <div class="pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                                <img loading="lazy" width="647" height="486"
                                     class="w-full  rounded-xl  lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                     style="color:transparent" src="{{asset('asset/about.gif')}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                        <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 lg:col-start-2">
                            <div>
                                <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#ea580c]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                 class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                        </span>
                                </div>
                                <div class="mt-6">
                                    <h2 class="text-3xl font-bold tracking-tight text-gray-600">
                                        Service
                                    </h2>
                                    <p class="mt-4 text-lg text-gray-700">
                                        The product has built-in sentiment analysis capabilities, allowing it to determine the
                                        sentiment (positive, negative, or neutral) expressed in text or customer feedback.
                                    </p>
                                    <div class="mt-6">
                                        <a class="inline-flex rounded-lg bg-[#ea580c] px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-pink-600 hover:bg-pink-700 hover:ring-pink-700"
                                           href="/login">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 sm:mt-16 lg:mt-0">
                            <div class="pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                                <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                                     class="w-full rounded-xl  lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                                     style="color:transparent" src="{{asset('asset/service.gif')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <h1 class="text-3xl mb-12 font-extrabold sm:text-5xl text-center text-gray-700">Contact Us</h1>
                        <div id="map" class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11672.945750644447!2d-122.42107853750231!3d37.7730507907087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858070cc2fbd55%3A0xa71491d736f62d5c!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1619524992238!5m2!1sen!2sus"
                                width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="container px-6 md:px-12">
                            <div
                                class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px] border border-gray-300">
                                <div class="flex flex-wrap">
                                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
                                        <form>
                                            <div class="relative mb-6" data-te-input-wrapper-init>
                                                <input type="text"
                                                       class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                                       id="exampleInput90" />
                                                <label
                                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none "
                                                    for="exampleInput90">Name
                                                </label>
                                            </div>
                                            <div class="relative mb-6" data-te-input-wrapper-init>
                                                <input type="email"
                                                       class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                                       id="exampleInput91" />
                                                <label
                                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none "
                                                    for="exampleInput91">Email address
                                                </label>
                                            </div>
                                            <div class="relative mb-6" data-te-input-wrapper-init>
              <textarea
                  class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                  id="exampleFormControlTextarea1" rows="3"></textarea>
                                                <label for="exampleFormControlTextarea1"
                                                       class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none ">Message</label>
                                            </div>
                                            <div class="mb-6 inline-block min-h-[1.5rem] justify-center pl-[1.5rem] md:flex">
                                                <input
                                                    class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent "
                                                    type="checkbox" value="" id="exampleCheck96" checked />
                                                <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="exampleCheck96">
                                                    Send me a copy of this message
                                                </label>
                                            </div>
                                            <button type="button"
                                                    class="mb-6 w-full rounded bg-[#ea580c] text-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal   lg:mb-0">
                                                Send
                                            </button>
                                        </form>
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                                        <div class="flex flex-wrap">
                                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                                                <div class="flex items-start">
                                                    <div class="shrink-0">
                                                        <div class="inline-block rounded-md bg-[#ea580c] p-4 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                                 stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="ml-6 grow">
                                                        <p class="mb-2 font-bold ">
                                                            Technical support
                                                        </p>
                                                        <p class="text-sm text-neutral-500">
                                                            example@gmail.com
                                                        </p>
                                                        <p class="text-sm text-neutral-500">
                                                            1-600-890-4567
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                                                <div class="flex items-start">
                                                    <div class="srink-0">
                                                        <div class="inline-block rounded-md bg-[#ea580c] p-4 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                                 stroke="currentColor" class="w-7 h-7">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="ml-6 grow">
                                                        <p class="mb-2 font-bold ">
                                                            Address
                                                        </p>
                                                        <p class="text-sm text-neutral-500">
                                                            abcd, <br>
                                                            xyz <br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:mb-12 lg:w-full lg:px-6 xl:w-6/12">
                                                <div class="align-start flex">
                                                    <div class="shrink-0">
                                                        <div class="inline-block rounded-md bg-[#ea580c] p-4 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="ml-6 grow">
                                                        <p class="mb-2 font-bold ">Land Line</p>
                                                        <p class="text-neutral-500"> (0421) 431 2030
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:mb-12 xl:w-6/12">
                                                <div class="align-start flex">
                                                    <div class="shrink-0">
                                                        <div class="inline-block rounded-md bg-[#ea580c] p-4 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                                 stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="ml-6 grow">
                                                        <p class="mb-2 font-bold ">Mobile</p>
                                                        <p class="text-neutral-500"> +91 123456789
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>
@endsection
