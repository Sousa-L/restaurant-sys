<script>
/*
var DocumentContainer = document.getElementById('cupom_content');
var WindowObject = window.open("print.html", "PrintWindow",
"width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
//WindowObject.document.write('<html><head><title>Imprimir Boleto</title></head><body>');
//WindowObject.document.writeln('');
WindowObject.document.getElementById("content").innerHTML = DocumentContainer.innerHTML;
WindowObject.document.close();
WindowObject.focus();
WindowObject.print();
WindowObject.close();*/
$(document).ready(function(){
  $('#print_btn').click(function(){
    // getting the tag element I want to print
    // cloning the content so it doesn't get messed
    // remove all the possible scripts that could be embed
    var printContents = $('#cupom_content').clone().find('script').remove().end().html();

    // get all <links> and remove all the <script>'s from the header that could run on the new window
    var allLinks = $('head').clone().find('script').remove().end().html();

    // open a new window
    var popupWin = window.open("", "PrintWindow",
    "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    // ready for writing
    popupWin.document.open();

    // -webkit-print-color-adjust to keep colors for the printing version
    var keepColors = '<style>body {-webkit-print-color-adjust: exact !important; }</style>';

    // writing
    // onload="window.print()" to print straigthaway
    popupWin.document.write('<html><head>' + keepColors + allLinks + '</head><body onload="window.print()">' + printContents + '</body></html>');

    // close for writing
    popupWin.document.close();
  });
});
</script>
