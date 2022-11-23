@if($config->google->analytics_global)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$config->google->analytics_global}}"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{{$config->google->analytics_global}}');
    </script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{config('global.gg_analytic')}}');</script>


@endif
@if($config->google->ads_global)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$config->google->ads_global}}"></script> 	
    <script> 	  
    window.dataLayer = window.dataLayer || []; 	  
    function gtag(){
        dataLayer.push(arguments);
    } 	  
    gtag('js', new Date());  	  
    gtag('config', '{{$config->google->ads_global}}'); 	
    </script>
@endif