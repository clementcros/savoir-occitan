$(document).ready();
$('.itemName').select2({
    placeholder: 'Selection de villes',
    ajax: {
        url: 'index.php/search',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
                results: data
            };
        },
        cache: true
    }
});
/**
 * Created by c.cros on 22/01/2018.
 */
