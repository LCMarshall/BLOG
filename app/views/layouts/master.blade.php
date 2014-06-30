<!DOCTYPE html>

<html>
	<head>
		<meta charset=”utf-8”> 
    	<title>@yield('title')</title>
		    	
      @yield('topscript')
    </head>

  @if(!isset($route))
    <body>
  @elseif($route == 'portfolio')
	  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
  @endif
  
    	@yield('content')
      @yield('bottomscript')
  </body>
</html>