@yield('content')
@yield('styles')
@yield('scripts')
<script type="text/javascript">
    $('title').html('{{$general_setting->site_title}} | {{(isset($page_name) ? $page_name : 'Dashboard')}}');
</script>