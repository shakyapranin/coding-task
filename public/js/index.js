/**
 * Created by pranin on 7/10/16.
 */
$('tr[data-href]').on("click", function() {
    document.location = $(this).data('href');
});