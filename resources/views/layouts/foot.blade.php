<script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }
    function openNav() {
  document.getElementById("mySidenav").style.width = "500px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>
<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
          $('.saved').click(function(){
               var articleid=$(this).data('id');
                $.ajax({
                 type:'get',
                 url:'/saved/'+articleid,
                 dataType:'json',
                success:function(data)
                 {
                   $("ul.mySave").load(" ul.mySave>*");
                   $("div.sidenav").load(" div.sidenav>*");
                 },
                });
        });
});
</script>

<script>

        var myVar;

        function myFunction() {
          myVar = setTimeout(showPage, 1000);
        }

        function showPage() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("myDiv").style.display = "block";
        }
</script>
<script src="{{ asset('/js/more.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/js/jquery-3.3.1.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"  type="text/javascript" ></script>
<script src="{{ asset('/js/printThis.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/taginput/tagsinput.js') }}" type="text/javascript" ></script>
{{-- <livewire:scripts> --}}

