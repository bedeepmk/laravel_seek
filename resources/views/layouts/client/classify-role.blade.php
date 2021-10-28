@component('layouts.client.top')
@endcomponent 
@yield('styles') 
@yield('scripts_top') 
<body class='employer-create-job'>
<container>
@component('layouts.client.classify-role-header')
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
