<script type="text/javascript">
    $('document').ready(function(){
        if($('footer').length==0)
        {
            var _url = window.location.href;
            var _baseUrl = $('#baseUrl').attr('href');
            var _href = "https://www.koolreport.com/examples"+_url.substr(_url.indexOf(_baseUrl)+_baseUrl.length);
            $('main').append("<a href='"+_href+"' style='margin-top:2rem;' class='btn btn-outline-secondary' target='_blank'><i class='icon-globe'></i> View This Example Online</a>");
        }
    });
</script>