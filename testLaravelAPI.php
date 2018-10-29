<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  ></script>

  <script src="http://www.ajax-cross-origin.com/js/jquery.ajax-cross-origin.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    // $('#submit').on('submit', function (e) {
        // e.preventDefault();
        // var title = $('#title').val();
        // var body = $('#body').val();
        // var published_at = $('#published_at').val();
        var userToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNTQwMjM1MDM1LCJleHAiOjE1NDAyMzg2MzUsIm5iZiI6MTU0MDIzNTAzNSwianRpIjoiMHVQR0QycGZzT0FhR1F1cyIsInN1YiI6NCwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.-8tCNgekCne6lZRTw16i3sHm5VV0ZSTmp00_1z-GnO4";
        $.ajax({
            // crossOrigin: true,
            // crossDomain: true,
            // contentType: "application/json; charset=utf-8",
            // crossDomain: true,
            // contentType: "application/json; charset=utf-8",
            // dataType: "xml",
            // cache: false,
            type: "POST",
            url:'http://localhost:8000/api/articles?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNTQwMjI1MzY2LCJleHAiOjE1NDAyMjg5NjcsIm5iZiI6MTU0MDIyNTM2NywianRpIjoiSDhrZWJ4T2hDRmUzTHltRSIsInN1YiI6NCwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.-K7dFV8nRxjkXf3yMp1hrhL0-II3s64nMt2lh9WSNlo',
            // beforeSend: function(xhr){
            //             xhr.setRequestHeader ({"Accept":"application/json","Content-Type":"application/json"});
            //         },
            // headers: {
            //         'Access-Control-Allow-Origin': '*',
            //         'Content-Type':'application/json',
            //         'Accept':'application/json',
            //     },
            // contentType: "application/xjson",
            Accept:'application/json',
            // Access-Control-Allow-Origin: '*',
                headers: {
                'Access-Control-Allow-Origin' : '*',
                'Access-Control-Allow-Methods' : 'POST, GET, OPTIONS, PUT',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },         
            success: function( msg ) {
                console.log( msg);
                // $("#ajaxResponse").append("<div>"+msg+"</div>");
            }
        });
    // });
});
</script>