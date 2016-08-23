@extends('layouts.master')	  
@section('title',	 'Page	 Title')	  
@section('content')	   	 	 	 
<p>This	 is	 my	 body	 content.</p>	  
@endsection

{{-----
• {{	 $string	 }} 
- 輸出前會做跳脫，安全預設 
-­‐ {{	 $name	 or	 'Default'	 }}	  
• {!!	 $html	 !!} 
- 輸出不會做跳脫，可⽤用於印出 HTML 
• 萬⼀一真的要顯⽰示 {{ 的時候怎麼辦？ 
-用 @{{	 raw	 data	 }} 輸出
-----}}

