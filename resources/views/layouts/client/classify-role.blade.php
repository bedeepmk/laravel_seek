@component('layouts.client.top')
@endcomponent 
@yield('styles') 
@yield('scripts_top') 
{{-- <body class='employer-create-job'> --}}
<body class='employer body-grey'>
<container>
{{-- @component('layouts.client.classify-role-header') --}}
@component('layouts.client.employer-header2')
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
