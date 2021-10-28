@component('layouts.client.top')
@endcomponent 
@yield('styles') 
@yield('scripts_top')  
<body>
<container>
@component('layouts.client.job-seeker-my-page-heder')
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
