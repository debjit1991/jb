<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>West Bengal Social Registry</title>
</head>

<body class="bg-cover bg-fixed bg-[url('backgroun.jpg')]">
    {{-- <header id="navbar"
        class="transition-all ease-in-out sticky top-0 navigation text-gray-50 bg-sky-900 shadow-lime-600 body-font">
        <div class="container flex flex-col flex-wrap items-center px-2 py-3 mx-auto sm:px-10 md:flex-row">
            <a class="flex items-center mb-4 font-medium title-font md:mb-0">
                <img src="/logo-nav.png" class="w-8" alt="">
                <div>
                    <span class="block ml-3 text-xl font-semibold">Beneficiary Management System</span>
                    <span class="block ml-4 text-xs">Govt. of West Bengal</span>
                </div>
            </a>
            <nav class="flex flex-wrap items-center justify-center text-base font-semibold md:ml-auto">
                <a href="#schemes" class="mr-5">Home</a>
                <a href="#about" class="mr-5">Dashboard</a>
            </nav>
        </div>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </header> --}}

    <div class="max-h-screen bg-transparent">
        <div class="sm:px-auto sm:px-6 flex justify-center pt-14">
            <div class="w-1/2 hidden sm:flex items-center justify-center"><img src="{{asset('/loginbg2.jpg')}}" class="sm:h-[300px] sm:block hidden md:h-[500px]"></div>
            <div class="sm:w-1/2 flex justify-center items-center">
                <div
                    class="backdrop-filter relative backdrop-blur-xl rounded-lg shadow-lg border-t-2 shadow-sky-300 flex flex-col justify-center py-8 sm:px-6 lg:px-8 px-6">
                    <a href="{{ url('/') }}">
                        <img src="/back.png" class="h-5 w-5 hover:cursor-pointer absolute" alt="">
                    </a>
                    <div class="flex items-center justify-center">
                        <img src="/logo.png" class="w-14" alt="">
                    </div>

                    <div class="sm:rounded-lg sm:px-3">
                        <form method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <input id="email" name="email" placeholder="Enter your email" autocomplete="email" type="email"
                                        required="" value=""
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="password"
                                    class="block text-sm font-medium leading-5 text-gray-700">Password</label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="password" name="password" type="password" autocomplete="current-password" required=""
                                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>

                            <div class="container mt-3 flex gap-2 pb-2">
                                <span id="captcha-container">{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-danger" class="text-gray-400" onclick="refreshCaptcha()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" data-slot="icon" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M13.836 2.477a.75.75 0 0 1 .75.75v3.182a.75.75 0 0 1-.75.75h-3.182a.75.75 0 0 1 0-1.5h1.37l-.84-.841a4.5 4.5 0 0 0-7.08.932.75.75 0 0 1-1.3-.75 6 6 0 0 1 9.44-1.242l.842.84V3.227a.75.75 0 0 1 .75-.75Zm-.911 7.5A.75.75 0 0 1 13.199 11a6 6 0 0 1-9.44 1.241l-.84-.84v1.371a.75.75 0 0 1-1.5 0V9.591a.75.75 0 0 1 .75-.75H5.35a.75.75 0 0 1 0 1.5H3.98l.841.841a4.5 4.5 0 0 0 7.08-.932.75.75 0 0 1 1.025-.273Z" clip-rule="evenodd" />
                                      </svg>
                                </button>
                            </div>
                            <div>
                                <input id="captcha" type="text" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Enter Captcha" name="captcha">
                            </div>
                            <div class="mt-6 flex items-center justify-between gap-16">
                                <div class="flex items-center">
                                    <input id="remember_me" name="remember" type="checkbox" value="1"
                                        class="form-checkbox h-4 w-4 focus:ring-0 rounded transition duration-150 ease-in-out">
                                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">Remember
                                        me</label>
                                </div>
                                <div class="text-sm leading-5">
                                    <a href="#"
                                        class="font-medium text-gray-700 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                        Forgot your password?
                                    </a>
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="submit"
                                        class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                        Sign in
                                    </button>
                                </span>
                            </div>
                        </form>
                        <div class="text-sm pt-3 text-center">
                            <p>Not member yet? <a href="{{url('/register')}}" class="text-blue-500 font-semibold hover:cursor-pointer">Register here</a href="{{url('/register')}}"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    window.addEventListener("scroll", function () {
    const navigation = document.querySelector(".navigation");
    if (window.scrollY > 0)
        navigation.classList.add("bg-white");
    else 
        navigation.classList.remove("bg-white");
});
        function refreshCaptcha() {
            fetch("{{ route('refresh-captcha') }}")
                .then(response => response.text())
                .then(data => {
                    document.getElementById('captcha-container').innerHTML = data;
                });
        }
</script>

</html>