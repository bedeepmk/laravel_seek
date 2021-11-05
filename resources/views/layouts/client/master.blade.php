@component('layouts.client.top')
@endcomponent 
@yield('styles') 
@yield('scripts_top')  
<body class='antialiased'>
<container>
    <div id="app">
@component('layouts.client.header')
@endcomponent 

@yield('content')

@component('layouts.client.footer')
@endcomponent 
    </div>
</container>
</body>

@yield('scripts_bottom')
<!-- 
@component('layouts.client.bottom')
@endcomponent  -->
