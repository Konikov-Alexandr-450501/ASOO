<!DOCTYPE html>
<html>
<head>
    <title>404</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{ Html::script('js/jquery.min.js') }}
    {{ Html::style('css/404/style.css') }}
</head>
<body>
<div class="wrap">
    <div class="content">
        <div class="logo">
            <h1><a href="#">{{ Html::image('images/404/logo.png') }}</a></h1>
            <span>{{ Html::image('images/404/signal.png') }}Oops! The Page you requested was not found!</span>
        </div>
        <div class="buttom">
            <div class="seach_bar">
                <p>you can go to <span><a href="{{ URL::previous() }}">home</a></span> page or search here</p>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>