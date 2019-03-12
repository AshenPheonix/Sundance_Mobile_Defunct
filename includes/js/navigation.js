var searchStore = {};
$(document).ready(function() {
    var killer;
    $('#searchBar').on('keydown', function(e) {
        if (e.which == 13) {
            $('#searchButton').click();
        }
    });

    $('#searchButton').on('click', function(e) {
        $('#resultsModal').modal('toggle');
        $('#alertText').remove();
        $('#results').append($('<p></p>').text('Searching').attr('id', 'alertText'));
        $.get('https://www.googleapis.com/customsearch/v1', {
            cx: "000409918650992771376:z7zjmcijfh4",
            q: $('#searchBar').val(),
            key: "AIzaSyDLyVf5L2ZgbMk6gaZyxa-WD96G3qkALog",
            lowRange: '0',
            num: 6,
            excludeTerms: '.pdf kilnwashhowto.php'
        }, function(results) {
            $('#alertText').remove();
            searchStore = results;
            if (searchStore.items != undefined) {
                killer = riot.mount('div#results', 'search');
            } else {
                $('#results').append($('<p></p>').text('No results').attr('id', 'alertText'));
            }
        });
    });

    $('#resultsModal').on('hidden.bs.modal', (e) => {
        if (killer !== undefined) {
            killer.forEach(element => {
                element.unmount(true);
            });
        }

    })
});