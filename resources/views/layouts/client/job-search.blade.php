@component('layouts.client.top')
@endcomponent 
@yield('styles') 
@yield('scripts_top')  
<body class='isMobileMap'>
<container>
@component('layouts.client.job-search-header')
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
