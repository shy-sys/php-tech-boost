{"filter":false,"title":"web.php","tooltip":"/mynews/routes/web.php","undoManager":{"mark":63,"position":63,"stack":[[{"start":{"row":19,"column":55},"end":{"row":19,"column":56},"action":"remove","lines":[";"],"id":2}],[{"start":{"row":19,"column":55},"end":{"row":19,"column":76},"action":"insert","lines":["->middleware('auth');"],"id":3}],[{"start":{"row":23,"column":61},"end":{"row":23,"column":81},"action":"insert","lines":["->middleware('auth')"],"id":4}],[{"start":{"row":24,"column":60},"end":{"row":24,"column":80},"action":"insert","lines":["->middleware('auth')"],"id":5}],[{"start":{"row":20,"column":2},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":21,"column":0},"end":{"row":21,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":20,"column":2},"end":{"row":20,"column":62},"action":"insert","lines":["  Route::post('news/create', 'Admin\\NewsController@create');"],"id":7}],[{"start":{"row":20,"column":2},"end":{"row":20,"column":4},"action":"remove","lines":["  "],"id":8}],[{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["  Route::post('news/create', 'Admin\\NewsController@create');",""],"id":10}],[{"start":{"row":31,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":11}],[{"start":{"row":32,"column":0},"end":{"row":35,"column":3},"action":"insert","lines":["Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {","     Route::get('news/create', 'Admin\\NewsController@add');","     Route::post('news/create', 'Admin\\NewsController@create'); # 追記","});"],"id":12}],[{"start":{"row":34,"column":68},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":35,"column":0},"end":{"row":35,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":35,"column":5},"end":{"row":35,"column":64},"action":"insert","lines":[" Route::post('news/create', 'Admin\\NewsController@create');"],"id":14}],[{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"remove","lines":[" "],"id":15}],[{"start":{"row":35,"column":52},"end":{"row":35,"column":53},"action":"remove","lines":["r"],"id":16},{"start":{"row":35,"column":51},"end":{"row":35,"column":52},"action":"remove","lines":["e"]},{"start":{"row":35,"column":50},"end":{"row":35,"column":51},"action":"remove","lines":["l"]},{"start":{"row":35,"column":49},"end":{"row":35,"column":50},"action":"remove","lines":["l"]},{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"remove","lines":["o"]},{"start":{"row":35,"column":47},"end":{"row":35,"column":48},"action":"remove","lines":["r"]},{"start":{"row":35,"column":46},"end":{"row":35,"column":47},"action":"remove","lines":["t"]},{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"remove","lines":["n"]},{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"remove","lines":["o"]},{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"remove","lines":["C"]},{"start":{"row":35,"column":42},"end":{"row":35,"column":43},"action":"remove","lines":["s"]}],[{"start":{"row":35,"column":41},"end":{"row":35,"column":42},"action":"remove","lines":["w"],"id":17},{"start":{"row":35,"column":40},"end":{"row":35,"column":41},"action":"remove","lines":["e"]},{"start":{"row":35,"column":39},"end":{"row":35,"column":40},"action":"remove","lines":["N"]}],[{"start":{"row":35,"column":39},"end":{"row":35,"column":56},"action":"insert","lines":["ProfileController"],"id":18}],[{"start":{"row":34,"column":67},"end":{"row":34,"column":68},"action":"remove","lines":["記"],"id":19},{"start":{"row":34,"column":66},"end":{"row":34,"column":67},"action":"remove","lines":["追"]},{"start":{"row":34,"column":65},"end":{"row":34,"column":66},"action":"remove","lines":[" "]},{"start":{"row":34,"column":64},"end":{"row":34,"column":65},"action":"remove","lines":["#"]}],[{"start":{"row":34,"column":64},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":35,"column":0},"end":{"row":35,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":35,"column":5},"end":{"row":35,"column":60},"action":"insert","lines":[" Route::get('news/create', 'Admin\\NewsController@add');"],"id":21}],[{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"remove","lines":[" "],"id":22}],[{"start":{"row":35,"column":51},"end":{"row":35,"column":52},"action":"remove","lines":["r"],"id":23},{"start":{"row":35,"column":50},"end":{"row":35,"column":51},"action":"remove","lines":["e"]},{"start":{"row":35,"column":49},"end":{"row":35,"column":50},"action":"remove","lines":["l"]},{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"remove","lines":["l"]},{"start":{"row":35,"column":47},"end":{"row":35,"column":48},"action":"remove","lines":["o"]},{"start":{"row":35,"column":46},"end":{"row":35,"column":47},"action":"remove","lines":["r"]}],[{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"remove","lines":["t"],"id":24},{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"remove","lines":["n"]},{"start":{"row":35,"column":43},"end":{"row":35,"column":44},"action":"remove","lines":["o"]},{"start":{"row":35,"column":42},"end":{"row":35,"column":43},"action":"remove","lines":["C"]},{"start":{"row":35,"column":41},"end":{"row":35,"column":42},"action":"remove","lines":["s"]},{"start":{"row":35,"column":40},"end":{"row":35,"column":41},"action":"remove","lines":["w"]},{"start":{"row":35,"column":39},"end":{"row":35,"column":40},"action":"remove","lines":["e"]},{"start":{"row":35,"column":38},"end":{"row":35,"column":39},"action":"remove","lines":["N"]}],[{"start":{"row":35,"column":38},"end":{"row":35,"column":55},"action":"insert","lines":["ProfileController"],"id":25}],[{"start":{"row":24,"column":1},"end":{"row":24,"column":81},"action":"remove","lines":[" Route::get('profile/edit', 'Admin\\ProfileController@edit')->middleware('auth');"],"id":26},{"start":{"row":24,"column":0},"end":{"row":24,"column":1},"action":"remove","lines":[" "]},{"start":{"row":23,"column":82},"end":{"row":24,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":35,"column":66},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":36,"column":0},"end":{"row":36,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":36,"column":5},"end":{"row":36,"column":85},"action":"insert","lines":[" Route::get('profile/edit', 'Admin\\ProfileController@edit')->middleware('auth');"],"id":28}],[{"start":{"row":36,"column":83},"end":{"row":36,"column":84},"action":"remove","lines":[")"],"id":29},{"start":{"row":36,"column":82},"end":{"row":36,"column":83},"action":"remove","lines":["'"]},{"start":{"row":36,"column":81},"end":{"row":36,"column":82},"action":"remove","lines":["h"]},{"start":{"row":36,"column":80},"end":{"row":36,"column":81},"action":"remove","lines":["t"]},{"start":{"row":36,"column":79},"end":{"row":36,"column":80},"action":"remove","lines":["u"]},{"start":{"row":36,"column":78},"end":{"row":36,"column":79},"action":"remove","lines":["a"]},{"start":{"row":36,"column":77},"end":{"row":36,"column":78},"action":"remove","lines":["'"]},{"start":{"row":36,"column":76},"end":{"row":36,"column":77},"action":"remove","lines":["("]},{"start":{"row":36,"column":75},"end":{"row":36,"column":76},"action":"remove","lines":["e"]},{"start":{"row":36,"column":74},"end":{"row":36,"column":75},"action":"remove","lines":["r"]}],[{"start":{"row":36,"column":73},"end":{"row":36,"column":74},"action":"remove","lines":["a"],"id":30},{"start":{"row":36,"column":72},"end":{"row":36,"column":73},"action":"remove","lines":["w"]},{"start":{"row":36,"column":71},"end":{"row":36,"column":72},"action":"remove","lines":["e"]},{"start":{"row":36,"column":70},"end":{"row":36,"column":71},"action":"remove","lines":["l"]},{"start":{"row":36,"column":69},"end":{"row":36,"column":70},"action":"remove","lines":["d"]},{"start":{"row":36,"column":68},"end":{"row":36,"column":69},"action":"remove","lines":["d"]},{"start":{"row":36,"column":67},"end":{"row":36,"column":68},"action":"remove","lines":["i"]},{"start":{"row":36,"column":66},"end":{"row":36,"column":67},"action":"remove","lines":["m"]},{"start":{"row":36,"column":65},"end":{"row":36,"column":66},"action":"remove","lines":[">"]}],[{"start":{"row":36,"column":64},"end":{"row":36,"column":65},"action":"remove","lines":["-"],"id":31}],[{"start":{"row":36,"column":5},"end":{"row":36,"column":6},"action":"remove","lines":[" "],"id":32}],[{"start":{"row":17,"column":0},"end":{"row":36,"column":27},"action":"remove","lines":["","Route::group(['prefix' => 'admin'], function() {","  Route::get('news/create', 'Admin\\NewsController@add')->middleware('auth');","  Route::get('news/delete', 'Admin\\NewsController@delete');","  Route::get('news/update', 'Admin\\NewsController@update');","","  Route::get('profile/create', 'Admin\\ProfileController@add')->middleware('auth');","","});","","Auth::routes();","","Route::get('/home', 'HomeController@index')->name('home');","","Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {","     Route::get('news/create', 'Admin\\NewsController@add');","     Route::post('news/create', 'Admin\\NewsController@create'); ","     Route::get('news/create', 'Admin\\ProfileController@add');","     Route::post('news/create', 'Admin\\ProfileController@create');","     Route::get('profile/ed"],"id":33}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":37},"action":"remove","lines":["it', 'Admin\\ProfileController@edit');"],"id":34}],[{"start":{"row":16,"column":0},"end":{"row":31,"column":58},"action":"insert","lines":["Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {","  Route::get('news/create', 'Admin\\NewsController@add');","  Route::post('news/create', 'Admin\\NewsController@create');","  Route::get('news/edit', 'Admin\\NewsController@edit');","  Route::post('news/edit', 'Admin\\NewsController@update');","  Route::get('news/delete', 'Admin\\NewsController@delete');","","  Route::get('profile/create', 'Admin\\ProfileController@add');","  Route::post('profile/create', 'Admin\\ProfileController@create');","  Route::get('profile/edit', 'Admin\\ProfileController@edit');","  Route::post('profile/edit', 'Admin\\ProfileController@update');","});","","Auth::routes();","","Route::get('/home', 'HomeController@index')->name('home');"],"id":35}],[{"start":{"row":33,"column":2},"end":{"row":33,"column":3},"action":"remove","lines":[";"],"id":36},{"start":{"row":33,"column":1},"end":{"row":33,"column":2},"action":"remove","lines":[")"]},{"start":{"row":33,"column":0},"end":{"row":33,"column":1},"action":"remove","lines":["}"]},{"start":{"row":32,"column":0},"end":{"row":33,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":37}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":76},"action":"insert","lines":[" Route::get('news', 'Admin\\NewsController@index')->middleware('auth'); // 追記"],"id":38}],[{"start":{"row":22,"column":1},"end":{"row":22,"column":2},"action":"insert","lines":["　"],"id":39}],[{"start":{"row":22,"column":1},"end":{"row":22,"column":2},"action":"remove","lines":["　"],"id":40}],[{"start":{"row":22,"column":1},"end":{"row":22,"column":2},"action":"insert","lines":[" "],"id":42}],[{"start":{"row":19,"column":54},"end":{"row":19,"column":75},"action":"insert","lines":["->middleware('auth');"],"id":44}],[{"start":{"row":20,"column":57},"end":{"row":20,"column":78},"action":"insert","lines":["->middleware('auth');"],"id":45}],[{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"remove","lines":[";"],"id":46}],[{"start":{"row":19,"column":75},"end":{"row":19,"column":76},"action":"remove","lines":[";"],"id":47}],[{"start":{"row":17,"column":55},"end":{"row":17,"column":75},"action":"insert","lines":["->middleware('auth')"],"id":48}],[{"start":{"row":18,"column":59},"end":{"row":18,"column":79},"action":"insert","lines":["->middleware('auth')"],"id":49}],[{"start":{"row":21,"column":58},"end":{"row":21,"column":78},"action":"insert","lines":["->middleware('auth')"],"id":50}],[{"start":{"row":22,"column":76},"end":{"row":22,"column":77},"action":"remove","lines":["記"],"id":51},{"start":{"row":22,"column":75},"end":{"row":22,"column":76},"action":"remove","lines":["追"]},{"start":{"row":22,"column":74},"end":{"row":22,"column":75},"action":"remove","lines":[" "]},{"start":{"row":22,"column":73},"end":{"row":22,"column":74},"action":"remove","lines":["/"]},{"start":{"row":22,"column":72},"end":{"row":22,"column":73},"action":"remove","lines":["/"]}],[{"start":{"row":24,"column":61},"end":{"row":24,"column":81},"action":"insert","lines":["->middleware('auth')"],"id":52}],[{"start":{"row":25,"column":65},"end":{"row":25,"column":85},"action":"insert","lines":["->middleware('auth')"],"id":53}],[{"start":{"row":26,"column":60},"end":{"row":26,"column":80},"action":"insert","lines":["->middleware('auth')"],"id":54}],[{"start":{"row":27,"column":63},"end":{"row":27,"column":83},"action":"insert","lines":["->middleware('auth')"],"id":55}],[{"start":{"row":27,"column":84},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":56},{"start":{"row":28,"column":0},"end":{"row":28,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":28,"column":2},"end":{"row":28,"column":79},"action":"insert","lines":["Route::get('news/delete', 'Admin\\NewsController@delete')->middleware('auth');"],"id":57}],[{"start":{"row":28,"column":38},"end":{"row":28,"column":39},"action":"remove","lines":["s"],"id":58},{"start":{"row":28,"column":37},"end":{"row":28,"column":38},"action":"remove","lines":["w"]},{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"remove","lines":["e"]},{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"remove","lines":["N"]}],[{"start":{"row":28,"column":35},"end":{"row":28,"column":41},"action":"insert","lines":["Profil"],"id":59}],[{"start":{"row":28,"column":41},"end":{"row":28,"column":42},"action":"insert","lines":["e"],"id":60}],[{"start":{"row":28,"column":35},"end":{"row":28,"column":52},"action":"remove","lines":["ProfileController"],"id":61},{"start":{"row":28,"column":35},"end":{"row":28,"column":52},"action":"insert","lines":["ProfileController"]}],[{"start":{"row":28,"column":17},"end":{"row":28,"column":18},"action":"remove","lines":["s"],"id":62},{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"remove","lines":["w"]},{"start":{"row":28,"column":15},"end":{"row":28,"column":16},"action":"remove","lines":["e"]},{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"remove","lines":["n"]}],[{"start":{"row":28,"column":14},"end":{"row":28,"column":20},"action":"insert","lines":["Profil"],"id":63}],[{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"insert","lines":["e"],"id":64}],[{"start":{"row":28,"column":14},"end":{"row":28,"column":21},"action":"remove","lines":["Profile"],"id":65},{"start":{"row":28,"column":14},"end":{"row":28,"column":21},"action":"insert","lines":["Profile"]}],[{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"remove","lines":["P"],"id":66}],[{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"insert","lines":["p"],"id":67}],[{"start":{"row":28,"column":14},"end":{"row":28,"column":21},"action":"remove","lines":["profile"],"id":68},{"start":{"row":28,"column":14},"end":{"row":28,"column":21},"action":"insert","lines":["profile"]}]]},"ace":{"folds":[],"scrolltop":216,"scrollleft":0,"selection":{"start":{"row":30,"column":0},"end":{"row":30,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1610006373449,"hash":"0576b29d69c7c371ef12c79caa068f0dc9e7b266"}