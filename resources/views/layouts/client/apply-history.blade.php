@component('layouts.client.top')
@endcomponent 
@yield('styles') 
@yield('scripts_top')  
<body class='antialiased'>
<container>
@component('layouts.client.apply-history-header')
@endcomponent 

@yield('content')

@component('layouts.client.footer')
@endcomponent 
</container>
</body>

@yield('scripts_bottom')
<!-- 
@component('layouts.client.bottom')
@endcomponent  -->
