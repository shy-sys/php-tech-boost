{"filter":false,"title":"profile.blade.php","tooltip":"/mynews/resources/views/layouts/profile.blade.php","undoManager":{"mark":23,"position":23,"stack":[[{"start":{"row":26,"column":7},"end":{"row":26,"column":74},"action":"remove","lines":[" <link href=\"{{ secure_asset('css/admin.css') }}\" rel=\"stylesheet\">"],"id":3}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":75},"action":"insert","lines":["<link href=\"{{ secure_asset('css/profile.css') }}\" rel=\"stylesheet\">"],"id":4}],[{"start":{"row":42,"column":55},"end":{"row":43,"column":28},"action":"insert","lines":["","                            "],"id":6}],[{"start":{"row":43,"column":28},"end":{"row":72,"column":29},"action":"insert","lines":["                   <!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">","","                        {{-- 以下を追記 --}}","                        <!-- Authentication Links -->","                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}","                        @guest","                            <li><a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('Login') }}</a></li>","                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}","                        @else","                            <li class=\"nav-item dropdown\">","                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">","                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"","                                       onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                        {{ __('Logout') }}","                                    </a>","","                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                        @csrf","                                    </form>","                                </div>","                            </li>","                            @endguest","                            {{-- 以上までを追記 --}}","                        </ul>"],"id":7}],[{"start":{"row":43,"column":45},"end":{"row":43,"column":46},"action":"remove","lines":[" "],"id":9},{"start":{"row":43,"column":44},"end":{"row":43,"column":45},"action":"remove","lines":[" "]},{"start":{"row":43,"column":40},"end":{"row":43,"column":44},"action":"remove","lines":["    "]},{"start":{"row":43,"column":36},"end":{"row":43,"column":40},"action":"remove","lines":["    "]},{"start":{"row":43,"column":32},"end":{"row":43,"column":36},"action":"remove","lines":["    "]},{"start":{"row":43,"column":28},"end":{"row":43,"column":32},"action":"remove","lines":["    "]},{"start":{"row":43,"column":24},"end":{"row":43,"column":28},"action":"remove","lines":["    "]}],[{"start":{"row":43,"column":20},"end":{"row":43,"column":24},"action":"remove","lines":["    "],"id":10}],[{"start":{"row":43,"column":20},"end":{"row":43,"column":21},"action":"insert","lines":[" "],"id":11},{"start":{"row":43,"column":21},"end":{"row":43,"column":22},"action":"insert","lines":[" "]},{"start":{"row":43,"column":22},"end":{"row":43,"column":23},"action":"insert","lines":["n"]}],[{"start":{"row":43,"column":22},"end":{"row":43,"column":23},"action":"remove","lines":["n"],"id":12}],[{"start":{"row":43,"column":22},"end":{"row":43,"column":23},"action":"insert","lines":[" "],"id":13}],[{"start":{"row":42,"column":55},"end":{"row":43,"column":28},"action":"insert","lines":["","                            "],"id":14}],[{"start":{"row":75,"column":29},"end":{"row":76,"column":0},"action":"remove","lines":["",""],"id":15},{"start":{"row":75,"column":28},"end":{"row":75,"column":29},"action":"remove","lines":[">"]},{"start":{"row":75,"column":27},"end":{"row":75,"column":28},"action":"remove","lines":["l"]},{"start":{"row":75,"column":26},"end":{"row":75,"column":27},"action":"remove","lines":["u"]},{"start":{"row":75,"column":25},"end":{"row":75,"column":26},"action":"remove","lines":["/"]},{"start":{"row":75,"column":24},"end":{"row":75,"column":25},"action":"remove","lines":["<"]},{"start":{"row":75,"column":20},"end":{"row":75,"column":24},"action":"remove","lines":["    "]},{"start":{"row":75,"column":16},"end":{"row":75,"column":20},"action":"remove","lines":["    "]},{"start":{"row":75,"column":12},"end":{"row":75,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":75,"column":8},"end":{"row":75,"column":12},"action":"remove","lines":["    "],"id":16},{"start":{"row":75,"column":4},"end":{"row":75,"column":8},"action":"remove","lines":["    "]},{"start":{"row":75,"column":0},"end":{"row":75,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":43,"column":22},"end":{"row":73,"column":29},"action":"remove","lines":["      ","                        <!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">","","                        {{-- 以下を追記 --}}","                        <!-- Authentication Links -->","                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}","                        @guest","                            <li><a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('Login') }}</a></li>","                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}","                        @else","                            <li class=\"nav-item dropdown\">","                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">","                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"","                                       onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                        {{ __('Logout') }}","                                    </a>","","                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                        @csrf","                                    </form>","                                </div>","                            </li>","                            @endguest","                            {{-- 以上までを追記 --}}","                        </ul>"],"id":17}],[{"start":{"row":46,"column":21},"end":{"row":46,"column":22},"action":"remove","lines":[" "],"id":18},{"start":{"row":46,"column":20},"end":{"row":46,"column":21},"action":"remove","lines":[" "]},{"start":{"row":46,"column":16},"end":{"row":46,"column":20},"action":"remove","lines":["    "]},{"start":{"row":46,"column":12},"end":{"row":46,"column":16},"action":"remove","lines":["    "]},{"start":{"row":46,"column":8},"end":{"row":46,"column":12},"action":"remove","lines":["    "]},{"start":{"row":46,"column":4},"end":{"row":46,"column":8},"action":"remove","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"remove","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":46,"column":0},"action":"remove","lines":["",""]},{"start":{"row":44,"column":0},"end":{"row":45,"column":0},"action":"remove","lines":["",""]},{"start":{"row":43,"column":22},"end":{"row":44,"column":0},"action":"remove","lines":["",""]},{"start":{"row":43,"column":21},"end":{"row":43,"column":22},"action":"remove","lines":[" "]}],[{"start":{"row":43,"column":21},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":44,"column":0},"end":{"row":44,"column":21},"action":"insert","lines":["                     "]}],[{"start":{"row":45,"column":55},"end":{"row":46,"column":28},"action":"insert","lines":["","                            "],"id":20}],[{"start":{"row":46,"column":24},"end":{"row":75,"column":29},"action":"insert","lines":[" <!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">","","                        {{-- 以下を追記 --}}","                        <!-- Authentication Links -->","                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}","                        @guest","                            <li><a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('Login') }}</a></li>","                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}","                        @else","                            <li class=\"nav-item dropdown\">","                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">","                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"","                                       onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                        {{ __('Logout') }}","                                    </a>","","                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                        @csrf","                                    </form>","                                </div>","                            </li>","                            @endguest","                            {{-- 以上までを追記 --}}","                        </ul>"],"id":22}],[{"start":{"row":46,"column":24},"end":{"row":48,"column":0},"action":"remove","lines":[" <!-- Right Side Of Navbar -->","                        <ul class=\"navbar-nav ml-auto\">",""],"id":23}],[{"start":{"row":73,"column":24},"end":{"row":73,"column":29},"action":"remove","lines":["</ul>"],"id":24}],[{"start":{"row":42,"column":55},"end":{"row":43,"column":28},"action":"insert","lines":["","                            "],"id":26}],[{"start":{"row":43,"column":24},"end":{"row":43,"column":28},"action":"remove","lines":["    "],"id":27}],[{"start":{"row":43,"column":24},"end":{"row":43,"column":29},"action":"insert","lines":["</ul>"],"id":28}],[{"start":{"row":43,"column":24},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":44,"column":0},"end":{"row":44,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":75,"column":0},"end":{"row":76,"column":0},"action":"remove","lines":["                            ",""],"id":30}]]},"ace":{"folds":[],"scrolltop":789,"scrollleft":0,"selection":{"start":{"row":68,"column":60},"end":{"row":68,"column":60},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1608339105107,"hash":"f52624fa53856c274adb248fa24e951953e76b2c"}8339105107,"hash":"f52624fa53856c274adb248fa24e951953e76b2c"}