

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{url('/')}}/assets/js/jquery-barcode.js"></script>
<div id="demo"></div>
<script>

$("#demo").barcode(
"13087894487", // Value barcode (dependent on the type of barcode)
"code128" // type (string)
);    
</script>