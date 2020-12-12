{"changed":true,"filter":false,"title":"create.blade.php","tooltip":"/mynews/resources/views/admin/profile/create.blade.php","value":"<!DOCTYPE html>\n<html>\n    <head>\n        <meta charset=\"utf-8\">\n        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n\n        <title>MyProfile</title>\n    </head>\n    <body>\n        <h1>My　プロフィール作成画面</h1>\n    </body>\n</html>\n\n{{-- layouts/admin.blade.phpを読み込む --}}\n@extends('layouts.admin')\n\n\n{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}\n@section('title', 'ニュースの新規作成')\n\n{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}\n@section('content')\n    <div class=\"container\">\n        <div class=\"row\">\n            <div class=\"col-md-8 mx-auto\">\n                <h2>ニュース新規作成</h2>\n            </div>\n        </div>\n    </div>\n@endsection","undoManager":{"mark":-2,"position":13,"stack":[[{"start":{"row":0,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>MyNews</title>","    </head>","    <body>","        <h1>Myニュース作成画面</h1>","    </body>","</html>",""],"id":1}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"remove","lines":["s"],"id":2},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"remove","lines":["w"]},{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"remove","lines":["e"]},{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"remove","lines":["N"]}],[{"start":{"row":7,"column":17},"end":{"row":7,"column":18},"action":"insert","lines":["P"],"id":3}],[{"start":{"row":7,"column":18},"end":{"row":7,"column":19},"action":"insert","lines":["r"],"id":4},{"start":{"row":7,"column":19},"end":{"row":7,"column":20},"action":"insert","lines":["o"]}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":21},"action":"insert","lines":["f"],"id":5},{"start":{"row":7,"column":21},"end":{"row":7,"column":22},"action":"insert","lines":["i"]}],[{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"insert","lines":["l"],"id":6},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"remove","lines":["ス"],"id":7},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"remove","lines":["ー"]},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"remove","lines":["ュ"]},{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"remove","lines":["ニ"]}],[{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":["p"],"id":8},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":["u"]},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"insert","lines":["r"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"insert","lines":["o"]}],[{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"insert","lines":["h"],"id":9},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":["u"]}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"remove","lines":["u"],"id":10},{"start":{"row":10,"column":18},"end":{"row":10,"column":19},"action":"remove","lines":["h"]},{"start":{"row":10,"column":17},"end":{"row":10,"column":18},"action":"remove","lines":["o"]},{"start":{"row":10,"column":16},"end":{"row":10,"column":17},"action":"remove","lines":["r"]},{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"remove","lines":["u"]},{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"remove","lines":["p"]}],[{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":["　"],"id":11}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":21},"action":"insert","lines":["プロフィール"],"id":12}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":13}],[{"start":{"row":14,"column":0},"end":{"row":30,"column":11},"action":"insert","lines":["{{-- layouts/admin.blade.phpを読み込む --}}","@extends('layouts.admin')","","","{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}","@section('title', 'ニュースの新規作成')","","{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}","@section('content')","    <div class=\"container\">","        <div class=\"row\">","            <div class=\"col-md-8 mx-auto\">","                <h2>ニュース新規作成</h2>","            </div>","        </div>","    </div>","@endsection"],"id":15}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":30,"column":11},"end":{"row":30,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":31,"mode":"ace/mode/php_laravel_blade"}},"timestamp":1607518637994}