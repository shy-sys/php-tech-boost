{"changed":true,"filter":false,"title":"web.php","tooltip":"/mynews/routes/web.php","value":"<?php\n\n/*\n|--------------------------------------------------------------------------\n| Web Routes\n|--------------------------------------------------------------------------\n|\n| Here is where you can register web routes for your application. These\n| routes are loaded by the RouteServiceProvider within a group which\n| contains the \"web\" middleware group. Now create something great!\n|\n*/\n\nRoute::get('/', function () {\n    return view('welcome');\n});\n\nRoute::group(['prefix' => 'admin'], function() {\n    Route::get('news/create', 'Admin\\NewsController@add');\n});\n\nRoute::group(['prefix' => 'admin'], function() {\nRoute::get('news/create', 'Admin\\NewsController@add');\nRoute::get('news/delete', 'Admin\\NewsController@delete');\nRoute::get('news/update', 'Admin\\NewsController@update');\n});\n\n\nRoute::group(['prefix' => 'admin'], function() {\nRoute::get('news/create', 'Admin\\ProfileController@add');\nRoute::get('news/edit', 'Admin\\ProfileController@edit');\n\n});\n","undoManager":{"mark":67,"position":69,"stack":[[{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":17,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["Route::group(['prefix' => 'admin'], function() {","    Route::get('news/create', 'Admin\\NewsController@add');","});"],"id":3}],[{"start":{"row":19,"column":3},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":48},"action":"insert","lines":["Route::group(['prefix' => 'admin'], function() {"],"id":5}],[{"start":{"row":21,"column":48},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"remove","lines":["\t"],"id":7}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":3},"action":"insert","lines":["});"],"id":8}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"insert","lines":["　"],"id":9}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"remove","lines":["　"],"id":10}],[{"start":{"row":22,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["","\t",""],"id":11}],[{"start":{"row":23,"column":1},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":24,"column":0},"end":{"row":24,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":24,"column":1},"end":{"row":25,"column":0},"action":"insert","lines":["",""]},{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":25,"column":1},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":26,"column":1},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":54},"action":"insert","lines":["Route::get('news/create', 'Admin\\NewsController@add');"],"id":13}],[{"start":{"row":22,"column":54},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":14}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"insert","lines":["　"],"id":15}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":1},"action":"insert","lines":["　"],"id":16}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"remove","lines":["　"],"id":17}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":62},"action":"insert","lines":["Route::get('news/delete', 'Admin\\NewsController@delete');","     Route::get('news/update', 'Admin\\NewsController@update');"],"id":18}],[{"start":{"row":29,"column":1},"end":{"row":30,"column":0},"action":"remove","lines":["",""],"id":19},{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"remove","lines":["\t"]},{"start":{"row":28,"column":1},"end":{"row":29,"column":0},"action":"remove","lines":["",""]},{"start":{"row":28,"column":0},"end":{"row":28,"column":1},"action":"remove","lines":["\t"]},{"start":{"row":27,"column":1},"end":{"row":28,"column":0},"action":"remove","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"remove","lines":["\t"]},{"start":{"row":26,"column":1},"end":{"row":27,"column":0},"action":"remove","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"remove","lines":["\t"]},{"start":{"row":25,"column":1},"end":{"row":26,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":["\t"],"id":20}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"remove","lines":[" "],"id":21},{"start":{"row":24,"column":3},"end":{"row":24,"column":4},"action":"remove","lines":[" "]},{"start":{"row":24,"column":2},"end":{"row":24,"column":3},"action":"remove","lines":[" "]},{"start":{"row":24,"column":1},"end":{"row":24,"column":2},"action":"remove","lines":[" "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":23,"column":46},"end":{"row":23,"column":47},"action":"remove","lines":["r"],"id":22},{"start":{"row":23,"column":45},"end":{"row":23,"column":46},"action":"remove","lines":["e"]},{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"remove","lines":["l"]},{"start":{"row":23,"column":43},"end":{"row":23,"column":44},"action":"remove","lines":["l"]},{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"remove","lines":["o"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"remove","lines":["r"]},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"remove","lines":["t"]},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"remove","lines":["n"]},{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"remove","lines":["o"]},{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"remove","lines":["C"]}],[{"start":{"row":23,"column":36},"end":{"row":23,"column":37},"action":"remove","lines":["s"],"id":23},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"remove","lines":["w"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"remove","lines":["e"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":["N"]}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"insert","lines":["v"],"id":24}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":["v"],"id":25}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":52},"action":"insert","lines":[" ProfileController "],"id":28}],[{"start":{"row":23,"column":51},"end":{"row":23,"column":52},"action":"remove","lines":[" "],"id":29}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":[" "],"id":30}],[{"start":{"row":24,"column":46},"end":{"row":24,"column":47},"action":"remove","lines":["r"],"id":31},{"start":{"row":24,"column":45},"end":{"row":24,"column":46},"action":"remove","lines":["e"]},{"start":{"row":24,"column":44},"end":{"row":24,"column":45},"action":"remove","lines":["l"]},{"start":{"row":24,"column":43},"end":{"row":24,"column":44},"action":"remove","lines":["l"]},{"start":{"row":24,"column":42},"end":{"row":24,"column":43},"action":"remove","lines":["o"]},{"start":{"row":24,"column":41},"end":{"row":24,"column":42},"action":"remove","lines":["r"]},{"start":{"row":24,"column":40},"end":{"row":24,"column":41},"action":"remove","lines":["t"]},{"start":{"row":24,"column":39},"end":{"row":24,"column":40},"action":"remove","lines":["n"]},{"start":{"row":24,"column":38},"end":{"row":24,"column":39},"action":"remove","lines":["o"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["C"]},{"start":{"row":24,"column":36},"end":{"row":24,"column":37},"action":"remove","lines":["s"]}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"remove","lines":["w"],"id":32},{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"remove","lines":["e"]},{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"remove","lines":["N"]}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":52},"action":"insert","lines":[" ProfileController "],"id":33}],[{"start":{"row":24,"column":51},"end":{"row":24,"column":52},"action":"remove","lines":[" "],"id":34}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"remove","lines":[" "],"id":35}],[{"start":{"row":25,"column":3},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":36}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["?"],"id":37},{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"remove","lines":[">"],"id":38},{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"remove","lines":["?"]}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"insert","lines":["z"],"id":39},{"start":{"row":24,"column":5},"end":{"row":24,"column":6},"action":"insert","lines":["z"]},{"start":{"row":24,"column":6},"end":{"row":24,"column":7},"action":"insert","lines":["z"]},{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"insert","lines":["z"]},{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"insert","lines":["z"]}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"remove","lines":["z"],"id":40},{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"remove","lines":["z"]},{"start":{"row":24,"column":6},"end":{"row":24,"column":7},"action":"remove","lines":["z"]}],[{"start":{"row":24,"column":5},"end":{"row":24,"column":6},"action":"remove","lines":["z"],"id":41},{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"remove","lines":["z"]}],[{"start":{"row":24,"column":60},"end":{"row":24,"column":61},"action":"remove","lines":["　"],"id":42}],[{"start":{"row":23,"column":49},"end":{"row":23,"column":50},"action":"remove","lines":["r"],"id":43},{"start":{"row":23,"column":48},"end":{"row":23,"column":49},"action":"remove","lines":["e"]},{"start":{"row":23,"column":47},"end":{"row":23,"column":48},"action":"remove","lines":["l"]},{"start":{"row":23,"column":46},"end":{"row":23,"column":47},"action":"remove","lines":["l"]},{"start":{"row":23,"column":45},"end":{"row":23,"column":46},"action":"remove","lines":["o"]},{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"remove","lines":["r"]},{"start":{"row":23,"column":43},"end":{"row":23,"column":44},"action":"remove","lines":["t"]},{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"remove","lines":["n"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"remove","lines":["o"]},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"remove","lines":["C"]},{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"remove","lines":["e"]}],[{"start":{"row":23,"column":38},"end":{"row":23,"column":39},"action":"remove","lines":["l"],"id":44},{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"remove","lines":["i"]},{"start":{"row":23,"column":36},"end":{"row":23,"column":37},"action":"remove","lines":["f"]},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"remove","lines":["o"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"remove","lines":["r"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"remove","lines":["P"]}],[{"start":{"row":24,"column":49},"end":{"row":24,"column":50},"action":"remove","lines":["r"],"id":45},{"start":{"row":24,"column":48},"end":{"row":24,"column":49},"action":"remove","lines":["e"]},{"start":{"row":24,"column":47},"end":{"row":24,"column":48},"action":"remove","lines":["l"]},{"start":{"row":24,"column":46},"end":{"row":24,"column":47},"action":"remove","lines":["l"]}],[{"start":{"row":24,"column":45},"end":{"row":24,"column":46},"action":"remove","lines":["o"],"id":46},{"start":{"row":24,"column":44},"end":{"row":24,"column":45},"action":"remove","lines":["r"]},{"start":{"row":24,"column":43},"end":{"row":24,"column":44},"action":"remove","lines":["t"]},{"start":{"row":24,"column":42},"end":{"row":24,"column":43},"action":"remove","lines":["n"]},{"start":{"row":24,"column":41},"end":{"row":24,"column":42},"action":"remove","lines":["o"]},{"start":{"row":24,"column":40},"end":{"row":24,"column":41},"action":"remove","lines":["C"]},{"start":{"row":24,"column":39},"end":{"row":24,"column":40},"action":"remove","lines":["e"]},{"start":{"row":24,"column":38},"end":{"row":24,"column":39},"action":"remove","lines":["l"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["i"]},{"start":{"row":24,"column":36},"end":{"row":24,"column":37},"action":"remove","lines":["f"]},{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"remove","lines":["o"]}],[{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"remove","lines":["r"],"id":47},{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"remove","lines":["P"]}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":47},"action":"insert","lines":["NewsController"],"id":48}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"insert","lines":["v"],"id":49}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"remove","lines":["v"],"id":50}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":47},"action":"insert","lines":["NewsController"],"id":51}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":53}],[{"start":{"row":27,"column":0},"end":{"row":31,"column":3},"action":"insert","lines":["Route::group(['prefix' => 'admin'], function() {","Route::get('news/create', 'Admin\\NewsController@add');","Route::get('news/delete', 'Admin\\NewsController@delete');","Route::get('news/update', 'Admin\\NewsController@update');","});"],"id":54}],[{"start":{"row":30,"column":46},"end":{"row":30,"column":47},"action":"remove","lines":["r"],"id":55},{"start":{"row":30,"column":45},"end":{"row":30,"column":46},"action":"remove","lines":["e"]},{"start":{"row":30,"column":44},"end":{"row":30,"column":45},"action":"remove","lines":["l"]},{"start":{"row":30,"column":43},"end":{"row":30,"column":44},"action":"remove","lines":["l"]},{"start":{"row":30,"column":42},"end":{"row":30,"column":43},"action":"remove","lines":["o"]},{"start":{"row":30,"column":41},"end":{"row":30,"column":42},"action":"remove","lines":["r"]},{"start":{"row":30,"column":40},"end":{"row":30,"column":41},"action":"remove","lines":["t"]},{"start":{"row":30,"column":39},"end":{"row":30,"column":40},"action":"remove","lines":["n"]},{"start":{"row":30,"column":38},"end":{"row":30,"column":39},"action":"remove","lines":["o"]},{"start":{"row":30,"column":37},"end":{"row":30,"column":38},"action":"remove","lines":["C"]}],[{"start":{"row":30,"column":36},"end":{"row":30,"column":37},"action":"remove","lines":["s"],"id":56},{"start":{"row":30,"column":35},"end":{"row":30,"column":36},"action":"remove","lines":["w"]},{"start":{"row":30,"column":34},"end":{"row":30,"column":35},"action":"remove","lines":["e"]},{"start":{"row":30,"column":33},"end":{"row":30,"column":34},"action":"remove","lines":["N"]}],[{"start":{"row":29,"column":46},"end":{"row":29,"column":47},"action":"remove","lines":["r"],"id":57},{"start":{"row":29,"column":45},"end":{"row":29,"column":46},"action":"remove","lines":["e"]},{"start":{"row":29,"column":44},"end":{"row":29,"column":45},"action":"remove","lines":["l"]},{"start":{"row":29,"column":43},"end":{"row":29,"column":44},"action":"remove","lines":["l"]},{"start":{"row":29,"column":42},"end":{"row":29,"column":43},"action":"remove","lines":["o"]},{"start":{"row":29,"column":41},"end":{"row":29,"column":42},"action":"remove","lines":["r"]},{"start":{"row":29,"column":40},"end":{"row":29,"column":41},"action":"remove","lines":["t"]},{"start":{"row":29,"column":39},"end":{"row":29,"column":40},"action":"remove","lines":["n"]},{"start":{"row":29,"column":38},"end":{"row":29,"column":39},"action":"remove","lines":["o"]},{"start":{"row":29,"column":37},"end":{"row":29,"column":38},"action":"remove","lines":["C"]},{"start":{"row":29,"column":36},"end":{"row":29,"column":37},"action":"remove","lines":["s"]}],[{"start":{"row":29,"column":35},"end":{"row":29,"column":36},"action":"remove","lines":["w"],"id":58},{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"remove","lines":["e"]},{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"remove","lines":["N"]}],[{"start":{"row":28,"column":46},"end":{"row":28,"column":47},"action":"remove","lines":["r"],"id":59},{"start":{"row":28,"column":45},"end":{"row":28,"column":46},"action":"remove","lines":["e"]},{"start":{"row":28,"column":44},"end":{"row":28,"column":45},"action":"remove","lines":["l"]},{"start":{"row":28,"column":43},"end":{"row":28,"column":44},"action":"remove","lines":["l"]},{"start":{"row":28,"column":42},"end":{"row":28,"column":43},"action":"remove","lines":["o"]},{"start":{"row":28,"column":41},"end":{"row":28,"column":42},"action":"remove","lines":["r"]},{"start":{"row":28,"column":40},"end":{"row":28,"column":41},"action":"remove","lines":["t"]},{"start":{"row":28,"column":39},"end":{"row":28,"column":40},"action":"remove","lines":["n"]},{"start":{"row":28,"column":38},"end":{"row":28,"column":39},"action":"remove","lines":["o"]},{"start":{"row":28,"column":37},"end":{"row":28,"column":38},"action":"remove","lines":["C"]}],[{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"remove","lines":["s"],"id":60},{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"remove","lines":["w"]},{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"remove","lines":["e"]},{"start":{"row":28,"column":33},"end":{"row":28,"column":34},"action":"remove","lines":["N"]}],[{"start":{"row":28,"column":33},"end":{"row":28,"column":50},"action":"insert","lines":["ProfileController"],"id":61}],[{"start":{"row":29,"column":33},"end":{"row":29,"column":50},"action":"insert","lines":["ProfileController"],"id":62}],[{"start":{"row":30,"column":33},"end":{"row":30,"column":50},"action":"insert","lines":["ProfileController"],"id":63}],[{"start":{"row":31,"column":3},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":64}],[{"start":{"row":27,"column":0},"end":{"row":32,"column":0},"action":"remove","lines":["Route::group(['prefix' => 'admin'], function() {","Route::get('news/create', 'Admin\\ProfileController@add');","Route::get('news/delete', 'Admin\\ProfileController@delete');","Route::get('news/update', 'Admin\\ProfileController@update');","});",""],"id":66},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":28,"column":0},"end":{"row":33,"column":0},"action":"insert","lines":["Route::group(['prefix' => 'admin'], function() {","Route::get('news/create', 'Admin\\ProfileController@add');","Route::get('news/delete', 'Admin\\ProfileController@delete');","Route::get('news/update', 'Admin\\ProfileController@update');","});",""],"id":67}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":60},"action":"remove","lines":["Route::get('news/update', 'Admin\\ProfileController@update');"],"id":68}],[{"start":{"row":30,"column":56},"end":{"row":30,"column":57},"action":"remove","lines":["e"],"id":69},{"start":{"row":30,"column":55},"end":{"row":30,"column":56},"action":"remove","lines":["t"]},{"start":{"row":30,"column":54},"end":{"row":30,"column":55},"action":"remove","lines":["e"]},{"start":{"row":30,"column":53},"end":{"row":30,"column":54},"action":"remove","lines":["l"]},{"start":{"row":30,"column":52},"end":{"row":30,"column":53},"action":"remove","lines":["e"]},{"start":{"row":30,"column":51},"end":{"row":30,"column":52},"action":"remove","lines":["d"]}],[{"start":{"row":30,"column":51},"end":{"row":30,"column":52},"action":"insert","lines":["e"],"id":70},{"start":{"row":30,"column":52},"end":{"row":30,"column":53},"action":"insert","lines":["d"]},{"start":{"row":30,"column":53},"end":{"row":30,"column":54},"action":"insert","lines":["i"]}],[{"start":{"row":30,"column":54},"end":{"row":30,"column":55},"action":"insert","lines":["t"],"id":71}],[{"start":{"row":30,"column":22},"end":{"row":30,"column":23},"action":"remove","lines":["e"],"id":72},{"start":{"row":30,"column":21},"end":{"row":30,"column":22},"action":"remove","lines":["t"]},{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"remove","lines":["e"]},{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"remove","lines":["l"]},{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"remove","lines":["e"]},{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"remove","lines":["d"]}],[{"start":{"row":30,"column":17},"end":{"row":30,"column":18},"action":"insert","lines":["e"],"id":73},{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["d"]},{"start":{"row":30,"column":19},"end":{"row":30,"column":20},"action":"insert","lines":["i"]},{"start":{"row":30,"column":20},"end":{"row":30,"column":21},"action":"insert","lines":["t"]}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":9},"action":"insert","lines":["git add ."],"id":74}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":9},"action":"remove","lines":["."],"id":75},{"start":{"row":33,"column":7},"end":{"row":33,"column":8},"action":"remove","lines":[" "]},{"start":{"row":33,"column":6},"end":{"row":33,"column":7},"action":"remove","lines":["d"]},{"start":{"row":33,"column":5},"end":{"row":33,"column":6},"action":"remove","lines":["d"]},{"start":{"row":33,"column":4},"end":{"row":33,"column":5},"action":"remove","lines":["a"]},{"start":{"row":33,"column":3},"end":{"row":33,"column":4},"action":"remove","lines":[" "]},{"start":{"row":33,"column":2},"end":{"row":33,"column":3},"action":"remove","lines":["t"]},{"start":{"row":33,"column":1},"end":{"row":33,"column":2},"action":"remove","lines":["i"]},{"start":{"row":33,"column":0},"end":{"row":33,"column":1},"action":"remove","lines":["g"]}]]},"ace":{"folds":[],"scrolltop":151,"scrollleft":0,"selection":{"start":{"row":33,"column":0},"end":{"row":33,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1607493554874}