@component('layouts.client.top')
@endcomponent 
@yield('styles') 
@yield('scripts_top')  
<body class='employer body-grey'>
<container>
@component('layouts.client.employer-sign-header')
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
