
(function($) {
$('#toggle').toggle(
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost:8888/envirochem/assets/images/menu.png" alt="Navigation menu icon" />');
        });
    },
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="http://localhost:8888/envirochem/assets/images/menu.png" alt="Navigation menu icon" />');
        });
    }
);
})(jQuery);