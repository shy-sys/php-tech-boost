{"changed":true,"filter":false,"title":"ProfileController.php","tooltip":"/mynews/app/Http/Controllers/Admin/ProfileController.php","value":"<?php\n\nnamespace App\\Http\\Controllers\\Admin;\n\nuse Illuminate\\Http\\Request;\nuse App\\Http\\Controllers\\Controller;\n\nclass ProfileController extends Controller\n{\n    //\n public function add()\n    {\n        return view('admin.profile.create');\n    }\n \n public function create()\n    {\n        return redirect('admin/profile/create');\n    }\n\npublic function edit()\n    {\n        return view('admin.profile.edit');\n    }\n\ngit add .public function update()\n    {\n        return redirect('admin/profile/edit');\n    }\n\t\n}\n","undoManager":{"mark":11,"position":12,"stack":[[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"remove","lines":["}"],"id":3}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":["}"],"id":4}],[{"start":{"row":10,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["","\t",""],"id":5}],[{"start":{"row":10,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":[" public function add()","    {","        return view('admin.profile.create');","    }",""],"id":6}],[{"start":{"row":14,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":[" public function create()","    {","        return redirect('admin/profile/create');","    }",""],"id":7}],[{"start":{"row":18,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["public function edit()","    {","        return view('admin.profile.edit');","    }",""],"id":8}],[{"start":{"row":22,"column":0},"end":{"row":25,"column":5},"action":"insert","lines":["public function update()","    {","        return redirect('admin/profile/edit');","    }"],"id":9}],[{"start":{"row":14,"column":1},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":19,"column":1},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":11}],[{"start":{"row":19,"column":1},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":12}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":13}],[{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":14}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":9},"action":"insert","lines":["git add ."],"id":15}]]},"ace":{"folds":[],"scrolltop":126.5,"scrollleft":0,"selection":{"start":{"row":25,"column":9},"end":{"row":25,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1607241383066}