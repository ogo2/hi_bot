$(document).ready(function(){
    $( function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 10000,
          max: 50000,
          values: [ 10000, 20000 ],
          slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
          }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
          " - $" + $( "#slider-range" ).slider( "values", 1 ) );
      } );
});