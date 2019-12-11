<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');
        var instances = M.Tooltip.init(elems, elems);

        var elems2 = document.querySelectorAll('.modal');
        var instances2 = M.Modal.init(elems2, elems2);

        var elems3 = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems3, elems3);

        var elems4 = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems4,  {format: 'yyyy-mm-dd', selectMonths:true});
      });
    </script>

    <script>

    </script>
    </body>
</html>