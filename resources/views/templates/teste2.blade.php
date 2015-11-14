<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>AETR - Controle Online de Viaturas</title>
    <link rel="stylesheet" href="{!! asset('bower_components/bootstrap/dist/css/bootstrap.css') !!}">

    <link rel="stylesheet" href="{!! asset('bower_components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.css') !!}">

	<link rel="stylesheet" href="{!! asset('bower_components/font-awesome/css/font-awesome.css') !!}">
	<link rel="stylesheet" media="screen" type="text/css" href="{!! asset('bower_components/fancybox/source/jquery.fancybox.css?v=2.1.5') !!}">
	<style>body{margin-top: 70px;}</style>
</head>
<body class="container">
<!-- Static navbar -->
<div class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Project name</a>
  </div>
  <div class="navbar-collapse collapse">

    <!-- Left nav -->
    <ul class="nav navbar-nav">
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Nav header</li>
          <li><a href="#">Separated link</a></li>
          <li><a href="#">One more separated link <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">A long sub menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
                  <li><a href="#">One more link</a></li>
                  <li><a href="#">Menu item 1</a></li>
                  <li><a href="#">Menu item 2</a></li>
                  <li><a href="#">Menu item 3</a></li>
                  <li><a href="#">Menu item 4</a></li>
                  <li><a href="#">Menu item 5</a></li>
                  <li><a href="#">Menu item 6</a></li>
                  <li><a href="#">Menu item 7</a></li>
                  <li><a href="#">Menu item 8</a></li>
                  <li><a href="#">Menu item 9</a></li>
                  <li><a href="#">Menu item 10</a></li>
                  <li><a href="#">Menu item 11</a></li>
                  <li><a href="#">Menu item 12</a></li>
                  <li><a href="#">Menu item 13</a></li>
                  <li><a href="#">Menu item 14</a></li>
                  <li><a href="#">Menu item 15</a></li>
                  <li><a href="#">Menu item 16</a></li>
                  <li><a href="#">Menu item 17</a></li>
                  <li><a href="#">Menu item 18</a></li>
                  <li><a href="#">Menu item 19</a></li>
                  <li><a href="#">Menu item 20</a></li>
                  <li><a href="#">Menu item 21</a></li>
                  <li><a href="#">Menu item 22</a></li>
                  <li><a href="#">Menu item 23</a></li>
                  <li><a href="#">Menu item 24</a></li>
                  <li><a href="#">Menu item 25</a></li>
                  <li><a href="#">Menu item 26</a></li>
                  <li><a href="#">Menu item 27</a></li>
                  <li><a href="#">Menu item 28</a></li>
                  <li><a href="#">Menu item 29</a></li>
                  <li><a href="#">Menu item 30</a></li>
                  <li><a href="#">Menu item 31</a></li>
                  <li><a href="#">Menu item 32</a></li>
                  <li><a href="#">Menu item 33</a></li>
                  <li><a href="#">Menu item 34</a></li>
                  <li><a href="#">Menu item 35</a></li>
                  <li><a href="#">Menu item 36</a></li>
                  <li><a href="#">Menu item 37</a></li>
                  <li><a href="#">Menu item 38</a></li>
                  <li><a href="#">Menu item 39</a></li>
                  <li><a href="#">Menu item 40</a></li>
                  <li><a href="#">Menu item 41</a></li>
                  <li><a href="#">Menu item 42</a></li>
                  <li><a href="#">Menu item 43</a></li>
                  <li><a href="#">Menu item 44</a></li>
                  <li><a href="#">Menu item 45</a></li>
                  <li><a href="#">Menu item 46</a></li>
                  <li><a href="#">Menu item 47</a></li>
                  <li><a href="#">Menu item 48</a></li>
                  <li><a href="#">Menu item 49</a></li>
                  <li><a href="#">Menu item 50</a></li>
                  <li><a href="#">Menu item 51</a></li>
                  <li><a href="#">Menu item 52</a></li>
                  <li><a href="#">Menu item 53</a></li>
                  <li><a href="#">Menu item 54</a></li>
                  <li><a href="#">Menu item 55</a></li>
                  <li><a href="#">Menu item 56</a></li>
                  <li><a href="#">Menu item 57</a></li>
                  <li><a href="#">Menu item 58</a></li>
                  <li><a href="#">Menu item 59</a></li>
                  <li><a href="#">Menu item 60</a></li>
                </ul>
              </li>
              <li><a href="#">Another link</a></li>
              <li><a href="#">One more link</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>

    <!-- Right nav -->
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="bootstrap-navbar.html">Default</a></li>
      <li><a href="bootstrap-navbar-static-top.html">Static top</a></li>
      <li><a href="bootstrap-navbar-fixed-top.html">Fixed top</a></li>
      <li><a href="bootstrap-navbar-fixed-bottom.html">Fixed bottom</a></li>
      <li><a href="#">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Nav header</li>
          <li><a href="#">A sub menu <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
              <li><a href="#">One more link</a></li>
            </ul>
          </li>
          <li><a href="#">A separated link</a></li>
        </ul>
      </li>
    </ul>

  </div><!--/.nav-collapse -->
</div>
@yield('content')
	<script src="{!! asset('bower_components/jquery/dist/jquery.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.js') !!}" type="text/javascript"></script>

	<script src="{!! asset('bower_components/smartmenus/dist/jquery.smartmenus.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/smartmenus/dist/addons/bootstrap/jquery.smartmenus.bootstrap.js') !!}" type="text/javascript"></script>

	<script src="{!! asset('bower_components/bootbox/bootbox.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('bower_components/fancybox/source/jquery.fancybox.js?v=2.1.5') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
</body>
</html>