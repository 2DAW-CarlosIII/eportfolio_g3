<!-- Header -->
<section id="header" class="wrapper">

    <!-- Logo -->
    <div id="logo">
        <h1><a href="index.html">Escape Velocity</a></h1>
        <p>A free responsive site template by HTML5 UP</p>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            @section('menu')
                <li class="current"><a href="index.html">Home</a></li>
                <li>
                    <a href="#">Dropdown</a>
                    <ul>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Magna veroeros</a></li>
                        <li><a href="#">Etiam nisl</a></li>
                        <li>
                            <a href="#">Sed consequat</a>
                            <ul>
                                <li><a href="#">Lorem dolor</a></li>
                                <li><a href="#">Amet consequat</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam nisl</a></li>
                                <li><a href="#">Sed feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Nisl tempus</a></li>
                    </ul>
                </li>
                @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                    Dashboard
                                </a></li>
                            <li>
                                @include('escapeVelocity.partials.dropdown-user')
                            </li>
                        @else
                                <li><a href="{{ route('login') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                                    Log in
                                </a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"
                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                        Register
                                    </a></li>
                            @endif
                        @endauth
                @endif
            @show
        </ul>
    </nav>

</section>

<!-- Intro -->
<section id="intro" class="wrapper style1">
    <div class="title">The Introduction</div>
    <div class="container">
        <p class="style1">So in case you were wondering what this is all about ...</p>
        <p class="style2">
            Escape Velocity is a free responsive<br class="mobile-hide" />
            site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
        </p>
        <p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>,
            and released for
            free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it
            for any of
            your personal or commercial projects &ndash; just be sure to credit us!</p>
        <ul class="actions">
            <li><a href="#" class="button style3 large">Proceed</a></li>
        </ul>
    </div>
</section>
